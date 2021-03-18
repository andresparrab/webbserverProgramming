<?php
$rows = $result->num_rows; 
for ($j = 0;$j < $rows ; ++$j) {
    $result->data_seek($j); 
    $row = $result->fetch_array(MYSQLI_ASSOC); 
        
            $query = "SELECT name FROM category 
                INNER JOIN has_category on category.id = has_category.category 
            WHERE has_category.post = ".$row['id'];
            
        $cat_result =  mysqli_query($conn, $query);
        $categories ="";
  
        foreach($cat_result as $category){

         $categories .= ' <span class="badge bg-dark fs-5">'.
         $category['name'].'</span>';  
        }
            echo '
            <article class="col-md-4 p-3">
            <a class="text-decoration-none" href="article.php?postID='.$row['id'].'&title='.urlencode($row['title']).'">
                <div class="m-1 shadow">                
                    <img class="img-fluid" src="./images/'.$counter.'.jpg" alt="0'. $counter.'" style="height:292px;">
            </a>
                    <div class="article-content px-2 py-1">
                        <h2 class="fs-3 fw-bold mb-1">'. $row['title'].'</h2>
 
                        <div class="d-flex justify-content-between">
                            <p>'. substr($row['date'],0,10).'</p>
                            <p>
                                '.$categories.'
                            </p>
                        </div>
                    </div>
                </div>
               
            </article>
            ';
            $counter++;
} 
$result->close(); 
$connection->close();


?>