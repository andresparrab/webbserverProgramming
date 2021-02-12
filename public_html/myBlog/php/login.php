<?php
session_start();
        $servername = "localhost";
        $username = "doctor2";
        $password = "doctor2";
        $dbname = "myBlog";


        //Create connection
         $conn = mysqli_connect($servername, $username, $password, $dbname);
         if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }
          else{
           echo "good";
          }
          $email = mysqli_real_escape_string($conn, $_POST['email']);
          $pass = mysqli_real_escape_string($conn, $_POST['password']);
    	//$email = $_POST['email'];
        //$pass = $_POST['password'];

        //$pass = hash(sha512 , $pass);
	$pass = password_hash($pass, PASSWORD_DEFAULT);
        //$pass = "123";
   	echo 'entering query';
        $query = "SELECT * FROM author WHERE email= '$email' AND password = '$pass'";
        echo '\npasss the query';
        if (mysqli_query($conn, $query)) {
            echo "successfully inserted: title, seo_title, content, author:::: ";
        } else {
            echo "<br>"."Mega Error inserting post: <br>" . mysqli_error($conn);
        }
        echo "EMAIL: " . $email;
        //echo "PASSWORD: " . $pass;
        $query = "SELECT * FROM author";
        $result = mysqli_query($conn, $query);
       // echo "<br> pass2". $query. $conn;
        //$row =mysqli_fetch_array($result);
        //echo "<br>ID is " . $row[0];
        //echo "Entering the if STATMENT<br>";
        if(mysqli_num_rows($result)>1){
            echo "good3";
            $row =mysqli_fetch_array($result);
            //$row2 =mysqli_fetch_array($result);
            echo "<br>ID is // " . $row[0] . "<br>";
            $_SESSION['author'] = $row[0];
            //$_SESSION['author'] = mysqli_fetch_array($result)[0];
            header("Location: ../admin/new_post.php");
            echo "this session author:------>  " . $row[0]. "  <--------got it!";
        }
        else{
            header("Location: ./myBlog/error.html");
        }
        // else{
        //     echo "<br>bad<br>";
        // }
        //echo "lol";
        echo $_SESSION['author'];

?>