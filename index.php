<?php require("Register.php") ?>
<?php

session_start();

if (!isset($_SESSION['user'])) {
    header("location:login_view.php");
}
// print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200;400;600&display=swap" rel="stylesheet">
    <title>Accueil</title>
    <link rel="icon" href="favicon.ico" />
</head>

<body class="home">
    <div class="content">
        <h1>Je suis connecté</h1>
        <a href="logout.php" class="logout">Déconnexion</a>
    </div>

    <main>
        <button id="btn1">Afficher le contenu de la page 1</button>
        <button id="btn2">Afficher le contenu de la page 2</button>

        <div id="ajaxContent"></div>
    </main>

</body>
<script>
    $(document).ready(function() {
        $("#btn1").click(function() {
            $("#ajaxContent").load("page1.php");
        });
        $('#btn2').click(function() {
            $("#ajaxContent").load('page2.php')
        })
    })
</script>

</html>