<?php 
session_start();
session_destroy();
        // unset($_SESSION["author"]);
        // unset($_SESSION["authorName"]);
        // unset($_SESSION["id"]);
         header("Location: index.php");

    echo $_SESSION['author'];
?>