<?php 
session_start();

        unset($_SESSION["author"]);
        unset($_SESSION["authorName"]);
        header("Location: index.php");

    echo $_SESSION['author'];
?>