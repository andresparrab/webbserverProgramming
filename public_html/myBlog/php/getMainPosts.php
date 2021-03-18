<?php
//    Set variables
include('connect.php');


    function getMainPosts(){
        global $conn;
        // $servername = "localhost";
        // $username = "doctor2";
        // $password = "doctor2";
        // $dbname = "myBlog";
        // // //Create connection
        //  $conn = mysqli_connect($servername, $username, $password, $dbname);
        //  if ($conn) {
        //     // echo "Connection succesfull<br>";
        //   }
        //   else{
        //     die("Connection failed: " . mysqli_connect_error());
        //   }
    
        $query = "SELECT * FROM post ORDER BY date DESC LIMIT 50";

        if (mysqli_query($conn, $query)) {
  
          } else {
            echo "<br>"."category Error: " . $query . "<br>" . mysqli_error($conn);
          }
        
        //$result = mysqli_query($conn, $query);

          // ---------------   PDO WAY ------------------//
          $result = $conn->query($query);
         $counter = 1;

        // while($row =mysqli_fetch_array($result)){
include('pdoGetPosts.php');
            // PDO WAY
        //     while($row =$result->fetch_assoc()){
      
        //     $query = "SELECT name FROM category 
        //         INNER JOIN has_category on category.id = has_category.category 
        //     WHERE has_category.post = ".$row['id'];
             
        // $cat_result =  mysqli_query($conn, $query);
        // $categories ="";
        // while($category = mysqli_fetch_array($cat_result)){ 
        //  $categories .= ' <span class="badge bg-dark fs-5">'.
        //  $category['name'].'</span>';  
        // }
        //     echo '
        //     <article class="col-md-4 p-3">
        //     <a class="text-decoration-none" href="article.php?postID='.$row['id'].'&title='.urlencode($row['title']).'">
        //         <div class="m-1 shadow">                
        //             <img class="img-fluid" src="./images/'.$counter.'.jpg" alt="0'. $counter.'" style="height:292px;">
        //     </a>
        //             <div class="article-content px-2 py-1">
        //                 <h2 class="fs-3 fw-bold mb-1">'. $row['title'].'</h2>
 
        //                 <div class="d-flex justify-content-between">
        //                     <p>'. substr($row['date'],0,10).'</p>
        //                     <p>
        //                         '.$categories.'
        //                     </p>
        //                 </div>
        //             </div>
        //         </div>
               
        //     </article>
        //     ';
        //     $counter++;
        // }
    }
?>