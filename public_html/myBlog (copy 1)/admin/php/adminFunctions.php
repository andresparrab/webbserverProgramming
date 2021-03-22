<?php
session_start();
if(!isset($_SESSION['author']))
{   
 
     header("Location: ../error.php");
}
if($_SESSION['name']!='admin')
{
    header("Location: login.php");
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

    // return user array from their id
function getUserById2($id){
	global $conn;
	$query = "SELECT * FROM author WHERE id=".$id;
    $result =  mysqli_query($conn, $query);

	$user = mysqli_fetch_assoc($result);
    echo "goten user: ".$user['email'];
	
    return $user;
}

function getUsers(){
	global $conn;
	$query = "SELECT * FROM author";
    $result =  mysqli_query($conn, $query);
    foreach($result as $user){
	
    echo "<br> ".$user['name']." | ".$user['email'];
    }
   
}


// escape string
function delete_user($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function delete_post() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}


?>