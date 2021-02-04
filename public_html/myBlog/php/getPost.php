<?php
//    Set variables


    function getMainPosts(){
        $servername = "localhost";
        $username = "doctor2";
        $password = "doctor2";
        $dbname = "myBlog";
        //Create connection
         $conn = mysqli_connect($servername, $username, $password, $dbname);
         if ($conn) {
             //echo "Connection succesfull<br>";
          }
          else{
            die("Connection failed: " . mysqli_connect_error());
          }
        
        $postID = $_GET['postID'];
      
       // $postID = 44; 
        //echo "this is the post id".$postID;
        $query = "SELECT * FROM post WHERE id= $postID";
       
        if (mysqli_query($conn, $query)) {
  
          } else {
            echo "<br>"."category Error: " . $query . "<br>" . mysqli_error($conn);
          }
        
        //$query = "SELECT * FROM post ORDER BY date DESC LIMIT 10";
        $result = mysqli_query($conn, $query);

        $counter = 1;

    $row =mysqli_fetch_array($result);
    //   echo "this is the row: ".$row[0];
    //   echo "<br>this is the title<br>". $row['title'];
            $query = "SELECT name FROM category 
                INNER JOIN has_category on category.id = has_category.category 
            WHERE has_category.post = ".$row['id'];
             
        $cat_result =  mysqli_query($conn, $query);
        //echo "Cat result<br>";
        $categories ="";
        while($category = mysqli_fetch_array($cat_result)){ 
         $categories .= ' <span class="badge bg-success fs-5">'.
         $category['name'].'</span>';  
        }
            // echo '
            // <article class="col-md-4 p-3">
            // <a class="text-decoration-none" href="article.html" >
            //     <div class="m-1 shadow">
                
            //         <img class="img-fluid" src="images/0'.$counter++.'.jpg" alt="0'.$counter++.'" style="height:292px;">
            //         </a>
            //         <div class="article-content px-2 py-1">
            //             <h2 class="fs-3 fw-bold mb-1">'. $row['title'].'</h2>
            //             <div class="d-flex justify-content-between">
            //                 <p>'. substr($row['date'],0,10).'</p>
            //                 <p>
            //                     '.$categories.'
            //                 </p>
            //             </div>
            //         </div>
            //     </div>
               
            // </article>
            // ';
        
        echo '


        <!-- Row items -->
        <article class="row col-md-8 px-4" style="max-height: 900px;" >
            <div class="mx-0 shadow">
                <img class="img-fluid" src="./images/2.jpg" alt="">
                <div class="p-2">


                     <div class="d-flex justify-content-between">
                     <p>
                     '.$categories.'
                    </p>
                            <p>'. substr($row['date'],0,10).'</p>
    
                        </div>

                    <h3 class="mb-3">'. $row['seo_title'].'</h3>
                    <p>
                    '. $row['content'].'
                    </p>
                </div>
                <div class="d-flex justify-content-center my-3">
                    <button class="btn btn-primary btn-lg fs-4 mx-1">Learn more</button>
                    <button class="btn btn-dark btn-lg fs-4 mx-1">Like more</button>
                </div>

               <div class="p-0 bg-dark text-white">
                   <div class="row pt-3 m-0">
                       <div class="col-md-3 text-end ">
                           <img class="img-fluid rounded-circle" src="https://picsum.photos/200/300" alt="">
                       </div>
                       <div class="col-md-9">
                           <h3 class="m-0">Andres Parra</h3>
                           <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid illo, vero eaque vitae hic sit, fuga necessitatibus nobis eius id quaerat tenetur illum quos placeat minima eum, nostrum natus corporis!</p>
                       </div>
                   </div>
               </div>
            </div>
        </article>
        ';
  
        // echo "end";
    }
?>