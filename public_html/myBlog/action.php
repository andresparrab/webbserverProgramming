<?php
include('./php/connect.php');

 $inpText = $_POST['query'];
 $query = "SELECT * FROM post WHERE title LIKE '%$inpText%'";


            if (mysqli_query($conn, $query)) {
                $result = $conn->query($query);
                $rows = $result->num_rows; 
                for ($j = 0;$j < $rows ; ++$j) {
                    $result->data_seek($j); 
                    $row = $result->fetch_array(MYSQLI_ASSOC);
                }
            if ($result) {
                foreach ($result as $row) {
                    echo '<a href="article.php?postID='.$row['id'].'&title='.urlencode($row['title']).'" class="list-group-item list-group-item-action border-1">' . $row['title'] . '</a>';
                    
                }
            } else {
                echo '<p class="list-group-item border-1">No Record</p>';
    }
            }
        
?>