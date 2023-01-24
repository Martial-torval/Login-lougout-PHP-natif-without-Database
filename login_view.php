	<?php require("Login.php") ?>
	<?php
	if (isset($_POST['submit'])) {
		$user = new LoginUser($_POST['email'], $_POST['password']);
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
		<title>Connexion</title>
	</head>

	<body>
		<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
			<h1>Connexion</h1>
			<label for="">Adresse mail</label>
			<input type="email" name="email">

			<label for="">Mot de passe</label>
			<input type="password" name="password">
			<p class="error"><?php echo @$user->error ?></p>


			<button type="submit" name="submit">Me connecter</button>

			<p class="success"><?php echo @$user->success ?></p>
			<a href="register_view.php">Vous n'avez pas encore de compte ? </br> Inscrivez vous juste ici !</a>
		</form>




	</body>

	</html>