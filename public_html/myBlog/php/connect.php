<?php
        $servername = "localhost";
        $username = "doctor2";
        $password = "doctor2";
        $dbname = "myBlog";
        // PDO way
          $conn = new mysqli($servername, $username, $password, $dbname);
          if($conn->connect_error) die($conn->connect_error);

?>