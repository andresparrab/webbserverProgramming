<?php
 // Kolla användarnamn och lösenord från ett formulär
 if ($_POST["username"] == "php" && $_POST["password"] == "php") { // Om sant sätter vi Login till YES 
    session_start(); 
    $_SESSION["Login"] = "YES";
    $_SESSION["uid"] = $_POST["username"]; 
    header("Location: form.php");
    }
    else
    { }

    session_start(); if (isset($_SESSION["uid"]))
{
echo "Du är inloggad och kan komma åt särskilda medlemsfunktioner";
include('member/admin_bar.php');


?>