
<?php
 session_start();
if(!isset($_SESSION['author']))
{   
 
     header("Location: ../error.php");
}
// if($_SESSION['name']!='admin')
// {
//     header("Location: ../login2.php");
// }

include('../php/code.php');


$row = getUserById2();

if(isset($_POST['update-btn']))
{
    
    updateUser();
}

if(isset($_POST['delete_btn']))
{
    //message();
    Delete_user();
}
                                 


 ?>
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

<!-- /************Main Graph Area *******************/ -->
<div class="graph_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="user_name">
                    <h2>Welcome <strong><?php echo ucfirst( $_SESSION['name']) ?></strong> </h2>
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


                     if(isset($_SESSION['success']))
                     {
                         echo '<h2>'.$_SESSION['success'].'<h2>';
                         unset($_SESSION['success']);
                     }

                     if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                     {
                         
                         echo '<h2>'.$_SESSION['status'].'<h2>';
                         unset($_SESSION['status']);
                     }
                  

                    ?>

                        </div>
                                    <form  method="post">
                                    <input type="hidden" name="update_id" class="form-control form-control-lg" value="<?php echo $row['id']?>">
                                    <input type="hidden" name="del_id" class="form-control form-control-lg" value="<?php echo $row['id']?>">
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

                                            <button name="update-btn" type="submit" class="btn btn-secondary mybutton">Update</button>
                                            <button name="delete_btn" type="submit" class="btn btn-secondary mybutton">Delete</button>
                                    </form>
  

                        </div>
                    </div>
            </div>
    </div>   
</div>
<!-- /************Main Main *******************/ -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</html>

