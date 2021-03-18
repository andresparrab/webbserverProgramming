<?php
session_start();
        $servername = "localhost";
        $username = "NormalUser";
        $password = "NormalUser";
        // $username = "doctor2";
        // $password = "doctor2";
        $dbname = "myBlog";


        //Create connection
         $conn = mysqli_connect($servername, $username, $password, $dbname);
         if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }
          else{
           echo "good connection<br>";
          }
          $email = mysqli_real_escape_string($conn, $_POST['email']);
          $pass = mysqli_real_escape_string($conn, $_POST['password']);

        echo "this is the pass: ". $pass;

   	echo 'n<br>entering query';

        $query = "SELECT * FROM `author` WHERE `email` = '$email' AND `password`= '$pass'";
        $result = mysqli_query($conn, $query);
       
        echo "<br>IDd is // " . $row[1] . "<br>";
        if(mysqli_num_rows($result)==1){
            echo "pass";
            $row =mysqli_fetch_array($result);
            $rowAssoc= mysqli_fetch_assoc($result);
           
            echo "<br>ID is // " . $row[1] . "<br>";
            $_SESSION['author'] = $row[0];
            $_SESSION['authorName'] = $row[1];
            $_SESSION['name'] = $row['name'];
            if($_SESSION['name']=='admin')
            {
              echo "this is the authir name: ". $_SESSION['name']."<br>";
              $_SESSION['success']  = "You are now logged in";
				      header('location: ../admin.php');		
            }
            else
            {
              echo "this is the authir name: ". $_SESSION['name']."<br>";
              $_SESSION['success']  = "You are now logged in";
				       header("Location: ../admin/new_post.php");
               echo "this session author:------>  " . $row[0]. "  <--------got it!";
            }
           
         
           
        }
        else{
            echo "bad";
            $row =mysqli_fetch_array($result);          
            echo "<br>ID2 is // " . $row[1] . "<br>";
            $_SESSION['author'] = $row[0];
            echo "this session author:------>  " . $row[0]. "  <--------got it!";
        }

        echo $_SESSION['author'];

?>