<?php require("Register.php") ?> <!--Avoir accès a tout les élements (méthodes, variables) de la class registeredClass !-->
<?php
if (isset($_POST['submit'])) { // if user put submit button
    $user = new RegisterUser($_POST['email'], $_POST['password']); // On créé
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200;400;600&display=swap" rel="stylesheet">
    <title>Inscription</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
        <h1>Inscription</h1>

        <label>Adresse mail *</label>
        <input type="email" name="email">

        <label>Mot de passe *</label>
        <input type="password" name="password">

        <button type="submit" name="submit">S'inscrire</button>

        <p class="error"><?php echo @$user->error ?></p>
        <p class="success"><?php echo @$user->success ?></p>
        <a href="login_view.php">Vous avez déjà un compte ? </br> Connectez-vous !</a>
    </form>

</body>

</html>