<?php
class RegisterUser
{
    // class properties.
    private $email;
    private $raw_password;
    private $encrypted_password;
    public $error;
    public $success;
    private $storage = "data.json";
    private $stored_users; // array
    private $new_user; // array

    public function __construct($email, $password)
    {
        $this->email = htmlspecialchars(trim($email));
        $this->raw_password = htmlspecialchars(trim($password));
        $this->encrypted_password = password_hash($password, PASSWORD_DEFAULT);
        $this->stored_users = json_decode(file_get_contents($this->storage), true);
        $this->new_user = [
            "email" => $this->email,
            "password" => $this->encrypted_password,
        ];

        if ($this->checkFieldValues()) {
            $this->insertUser();
        }
    }

    private function checkFieldValues()
    {

        if (empty($this->email) || empty($this->raw_password)) {
            $this->error = "Les champs * doivent être remplis";
            return false;
        } else if (strlen($this->raw_password) < 8) {
            $this->error = "Le mot de passe doit contenir au minimum 8 caractères";
            return false;
        } else {
            return true;
        }

        // if {
        //     $this->error = "Le mot de passe doit contenir au moins 8 caractères";
        //     return false;
        // } else {
        //     return true;
        // }
    } // Checking for empty fields.
    private function usernameExists()
    {
        foreach ($this->stored_users as $user) {
            if ($this->email == $user['email']) {
                $this->error = "Cette adresse mail existe déjà !";
                return true;
            }
        }
    } // Checking if the username is taken.
    private function insertUser()
    {
        if ($this->usernameExists() == FALSE) {
            array_push($this->stored_users, $this->new_user);
            if (file_put_contents($this->storage, json_encode($this->stored_users))) {
                return $this->success = "Votre inscription à été réalisée avec succès";
            } else {
                return $this->error = "Une erreur s'est produite, réessayez";
            }
        }
    } // Insert the user in the JSON file.



}
