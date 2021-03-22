<?php
//    Set variables
include('connect.php');


    function getMainPosts(){
        global $conn;

        $query = "SELECT * FROM post ORDER BY date DESC LIMIT 50";

        if (mysqli_query($conn, $query)) {
  
          } else {
            echo "<br>"."category Error: " . $query . "<br>" . mysqli_error($conn);
          }


          // ---------------   PDO WAY ------------------//
          $result = $conn->query($query);
         $counter = 1;

include('pdoGetPosts.php');

    }
?>