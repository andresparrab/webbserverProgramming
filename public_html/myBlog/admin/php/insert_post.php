<?php
session_start();
if(!isset($_SESSION['author']))
{
   header("Location: ../../error.php");
}
    // Set variables
    $servername = "localhost";
    $username = "doctor2";
    $password = "doctor2";
    $dbname = "myBlog";
    
    

    
    //Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $submit = $_POST['submit'];
    $title = $_POST['title'];
    $seo = $_POST['seo'];
    $content = $_POST['content'];
    $category = $_POST['category']; // Example 1, 2, 3
    $author = $_POST['author'];

    // Conditions
        // check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    // check submit and that all fields ar not empty
    if(isset($submit))
    {
        echo "the submit button has been pusshed" . "<br>";
        if(!empty($_POST['title']) && !empty($_POST['seo']) &&!empty($_POST['content']))
        {
            echo "all fields have been filled: " . "<br>" . $title . "<br>" . $seo . "<br>" . $content. "<br>";
        }
        else
        {
            echo "fill all fields please <br>" . $title . $seo . $content;
        }
    }s
        $query = "INSERT INTO post(title, seo_title, content, author) VALUES ('$title', '$seo', '$content', '$author')";
        // Check for error when inserting to the table
        if (mysqli_query($conn, $query)) {
            echo "successfully inserted: title, seo_title, content, author ";
        } else {
            echo "<br>"."Mega Error inserting post: <br>" . mysqli_error($conn);
        }

        $query = "SELECT id FROM post WHERE seo_title='$seo'";
        $result = mysqli_query($conn, $query);
        $row =mysqli_fetch_array($result);
        echo "<br>ID is " . $row[0];
        $post_id = $row[0];
        $category_array = explode(" ", $category); // 1, 2 

        foreach($category_array as $el){
            $query = "INSERT INTO has_category (post, category) VALUES ($post_id,$el)";
            if (mysqli_query($conn, $query)) {
                header("Location: ../../index.php");
                echo "<br>New record created successfully into has_category<br>";
            } else {
                echo "<br>"."category Error: " . $query . "<br>" . mysqli_error($conn);
            }
        }
        // Closing connection
        mysqli_close($conn);
   

?>