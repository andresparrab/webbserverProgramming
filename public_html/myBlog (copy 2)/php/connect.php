<?php
        $servername = "localhost";
        $username = "doctor2";
        $password = "doctor2";
        $dbname = "myBlog";
        // //Create connection
        //  $conn = mysqli_connect($servername, $username, $password, $dbname);
        //  if ($conn) {
        //     // echo "Connection succesfull<br>";
        //   }
        //   else{
        //     die("Connection failed: " . mysqli_connect_error());
        //   }

        // PDO way
          $conn = new mysqli($servername, $username, $password, $dbname);
          if($conn->connect_error) die($conn->connect_error);

?>