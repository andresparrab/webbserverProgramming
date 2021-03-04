<?php

        $servername = "localhost";
        $username = "doctor2";
        $password = "doctor2";
        $dbname = "myBlog";

        //Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $author_password = mysqli_real_escape_string($conn, $_POST['password']);
        //echo "checkin vars <br>  " .$name. "," . $email. "," .$author_password. "<br>";

         if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }
          else{
           echo "connection good";
          }
        //$author_password = password_hash($author_password,PASSWORD_DEFAULT);
        echo "this is the pass: ".$author_password;
        $query = "INSERT INTO author (name, email, password) VALUES ('$name', '$email', '$author_password')";

        if (mysqli_query($conn, $query)) {

            echo "New record created successfully";
        } else {
            echo "<br>"."Mega Error: " . $query . "<br>" . mysqli_error($conn);
        }
       
        $query = "SELECT * FROM author";
        $result = mysqli_query($conn, $query);
        $row =mysqli_fetch_array($result);
        echo "<br>ID is " . $row[0];


        if(mysqli_num_rows($result) > 1){
            echo "<br>pass2";
            $_SESSION['author'] = mysqli_fetch_array($result)[0];
            echo "hello ".  $_SESSION['author'];
            header("Location: ../../login.php");
        }
         else{
             header("Location: ../../myBlog/error.php");
            
         }
?>