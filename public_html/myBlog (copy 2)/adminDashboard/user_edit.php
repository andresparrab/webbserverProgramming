
<?php
session_start();
if(!isset($_SESSION['author']))
{   
 
     header("Location: ../error.php");
}
if($_SESSION['name']!='admin')
{
    header("Location: ../login.php");
}
//include("../php/codeUpdate.php");
include("../php/code.php");

include("../php/connect.php");

message();
if(isset($_POST['update-btn']))
{
    
    updateUser();
}
// $conn = new mysqli($servername, $username, $password, $dbname);
//   if($conn->connect_error) die($conn->connect_error);

//   function getUsers()
//   {
//     global $conn;
// $query = "SELECT * FROM author";


//         if (mysqli_query($conn, $query)) {
//             $result = $conn->query($query);
//           $rows = $result->num_rows; 
//           for ($j = 0;$j < $rows ; ++$j) {
//               $result->data_seek($j); 
//               $row = $result->fetch_array(MYSQLI_ASSOC); 
//             echo '
//             <tr>
//               <td>'.$row['id'].'</td>
//               <td>'.$row['name'].'</td>
//               <td>'.$row['email'].'</td>
//               <td>'.$row['password'].'</td>
//               <td class="btn-change">
//               <form action="../php/user_edit.php" method="post">
//               <input type="hidden" name="edit_id" value="'.$row['id'].'"> 
//               <button name="edit-btn" type="submit" class="btn btn-secondary btn-block edit_delete">Edit</button>
//               </form>
//               </td>
//               <td>
//               <form action="../php/user_edit.php" method="post">
//               <input type="hidden" name="edit_id" value="'.$row['id'].'"> 
//               <button name="edit-btn" type="submit" class="btn btn-secondary btn-block edit_delete">Delete</button>
//               </form>
//               </td>

//           </tr>
//           ';
//               //echo "this is ti: ". $row['name'];
//           }
//           } else {
//             echo "<br>"."category Error: " . $query . "<br>" . mysqli_error($conn);
//           }
//         }
// ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
</head>
<body>
    <!-- /************Dashboard nav *******************/ -->
    <?php include "adminNavSide.inc" ?> 
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">        
        <div class="container">
            <a class="navbar-brand fs-3 fw-bold" href="index.php">MyBlog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                
                <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link" href="login.php">Log in</a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link" href="./admin/insert_author.php">Register</a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link" href="./admin/insert_post.php">Post</a>
                    </li>


                </ul>
                <form class="d-flex">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- /************Dashboard nav *******************/ -->

    <!-- /************Dashboard Sidebar *******************/ -->

<!-- <aside class="sidebar">
    <img src="logo.png" alt="logo">
<ul class="ul sidebar_icon">
<li><i class="fa fa-th-large"></i></li>
<li><i class="far fa-user"></i></li>
<li><i class="fas fa-suitcase"></i></li>
<li><i class="fas fa-cog"></i></li>
</ul>
<ul class="bottom_sidebar_icon">
    <li><i class="fa fa-bell"></i></li>
    <li><img src="logo.png" alt=""></li>
</ul>
</aside> --> -->

<!-- /************Dashboard Sidebar *******************/ -->


<!-- /************Dashboard Graph Area *******************/ -->
<div class="graph_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="user_name">
                    <h2>Welcome <strong>Andres Parra</strong> </h2>
                </div>
            </div>
                <div class="col-lg-2 offset-lg-5">
                    <div class="add_link">
                    <a href="../admin/insert_author.php">
                        <button class="btn btn-secondary btn-block">Add User</button>
                    </a>
                    </div>
                </div>
        </div>
        <div class="value_cards_sec">
            <div class="row">
                <div class="col-lg-3">
                    <div class="value_card card_1">
                        <p>Post per month</p>
                        <h3>45</h3>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="value_card card_2">
                        <p>Users per month</p>
                        <h3>32</h3>
                    </div>
                </div>

            </div>
        </div>

            <div class="graph-sec">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="graph_sec_2">

                        <div class="message">

                                <?php
                                $row = getUserByid();
  
                                //include("../php/connect.php");
                                
                                //$row = getUserByid();
                               
                                
                                    // if(isset($_POST['edit-btn']))
                                    // {

                                    //     $id = $_POST['edit_id'];
                                        

                                    //     $query= "SELECT * FROM author WHERE id='$id'";
                                    //     $result = $conn->query($query);
                                        

                                    //         $row = $result->fetch_array(MYSQLI_ASSOC); 


                                    //}
                                    
                                    
                                    ?>
                                </div>
                                    <form  method="post">
                                    <input type="text" name="update_id" class="form-control form-control-lg" value="<?php echo $row['id']?>">
                                    <div class="form-group user_form">
                                        <label> Username </label>
                                        <input type="text" name="username" class="form-control form-control-lg" value="<?php echo $row['name']?>" placeholder="Enter Username">
                                    </div>

                                    <div class="form-group user_form">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control form-control-lg" value="<?php echo $row['email']?>" placeholder="Enter Email">
                                        <small class="error_email" style="color: red;"></small>
                                    </div>

                                    <div class="form-group user_form">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control form-control-lg" value="<?php  echo $row['password']?>" placeholder="Enter Password">
                                    </div>

                                        <!-- <a href="editUsers.php">
                                        <button name="cancel" class="btn btn-secondary mybutton">Cancel</button>
                                        </a> -->
                                             
                                            <button name="update-btn" type="submit" class="btn btn-secondary mybutton">Update</button>
                                    </form>
                                    <span><a href="editUsers.php">
                                        <button name="cancel" class="btn btn-secondary mybutton">Cancel</button>
                                        </a></span> 


                                        <!-- <a href="">
                                        <button name="edit-btn" class="btn btn-secondary mybutton">Update</button>
                                        </a> -->
                        </div>
                    </div>
            </div>
    </div>   
</div>
<!-- /************Dashboard Main *******************/ -->









</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</html>

