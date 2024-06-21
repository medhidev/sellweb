<!-- Autorisations -->
<?php

// invite | connecter | vendeur | admin
//        |           |         |
//   0    |     1     |   2     |   3

session_start();
$_SESSION["perm"] = 0;

?>


<!-- Redirection page home.php -->
 <?php header("Location: pages/home.php"); ?>