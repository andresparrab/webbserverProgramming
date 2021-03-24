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
include('../php/code.php');
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
   <!-- /************Dashboard nav ans side panel *******************/ -->
<?php include "adminNavSide.inc" ?>

<!-- /************Dashboard Main *******************/ -->
<div class="graph_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="user_name">
                    <h2>Welcome <strong><?php echo ucfirst( $_SESSION['name']) ?></strong> </h2>
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
                        <p>Total Posts</p>
                        <h3><?php numberOfPosts(); ?></h3>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="value_card card_2">
                        <p>Total Users</p>
                        <h3><?php numberOfUsers(); ?></h3>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="value_card card_3">
                        <p>Post per month</p>
                        <h3><?php numberOfPostsPerMonth(); ?></h3>
                    </div>
                </div>
<!-- 
                <div class="col-lg-3">
                    <div class="value_card card_4">
                        <p>Users per month</p>
                        <h3><?php numberOfUsersPerMonth(); ?></h3>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="graph-sec">
            <div class="row">
            <div class="col-lg-3">
                <div class="graph_sec_2">
                    <p>Total Users</p>
                    <img src="graph.png" alt="">
                 </div>
            </div>
             <div class="col-lg-9">
                <div class="graph_sec_2">
                    <p>Post per month</p>
                    <img class="pie" src="chart-diagram.png" alt="">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="graph_sec_2">
                    <p>Post per month</p>
                    <img class="pie" src="chart-diagram.png" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>   
</div>
<!-- /************Dashboard Main *******************/ -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</html>