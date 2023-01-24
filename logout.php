<?php
session_start();
session_destroy();
header('Location:index.php'); // Redirection sur home_view pour tester si l'utilisateur à encore une session active 
