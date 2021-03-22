<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The BobaBlog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="mybootstrat.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">


        <div class="container">
            <a class="navbar-brand fs-3 fw-bold" href="index.php">BobaBlog</a>
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
                        <a class="nav-link" href="./error.php" >Post </a>
                    </li>
                    <?php
                        if(isset($_SESSION['authorName']))
                        {
                            echo ' <li class="nav-item  ">
                            <a class="nav-link" href="./logout.php">Log out </a>
                        </li>';
                        }
                     
                    ?>                  
                   

                </ul>
   
                <form class="d-flex">
                
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                   
                </form>
                <div class="signed_in px-1" >
                    <?php
                        if(!isset($_SESSION['authorName']))
                        {
                            echo "no user,";
                        }
                        else
                        {
                            echo $_SESSION['authorName'];
                        }                       
                    ?> 
                         <br>Signed in
                </div>
            </div>
          
        </div>


    </nav>
    <section class="hero d-flex  align-items-center">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h1 class="fw-bold text-white"> The BobaBlog</h1>
            </div>

        </div>
    </section>

    <!-- Rows  -->

    <main class="content bg-light container py-4">
        <section class="row" >

            <?php
            
            require_once("./php/getMainPosts.php");
        
            getMainPosts();
            
            ?>


        </section>
    <div class="d-flex justify-content-center my-3">
        <button class="btn btn-primary btn-lg fs-4">Load more</button>
    </div>  
    </main>
   
    <section class="hero2 py-3">
        <div class="d-flex container justify-content-center flex-wrap ">
                <a class="badge bg-dark fs-7 m-1 p-2 text-decoration-none" href="" >Bootstrap</a>
                <a class="badge bg-dark fs-7 m-1 p-2 text-decoration-none" href="" >HTML &amp; CSS</a>
                <a class="badge bg-dark fs-7 m-1 p-2 text-decoration-none" href="" >Javascript</a>
                <a class="badge bg-dark fs-7 m-1 p-2 text-decoration-none" href="" >REACT</a>
                <a class="badge bg-dark fs-7 m-1 p-2 text-decoration-none" href="" >MongoDB</a>
                <a class="badge bg-dark fs-7 m-1 p-2 text-decoration-none" href="" >NodeJS</a>
                <a class="badge bg-dark fs-7 m-1 p-2 text-decoration-none" href="" >Bootstrap</a>
                <a class="badge bg-dark fs-7 m-1 p-2 text-decoration-none" href="" >HTML &amp; CSS</a>
                <a class="badge bg-dark fs-7 m-1 p-2 text-decoration-none" href="" >Javascript</a>
                <a class="badge bg-dark fs-7 m-1 p-2 text-decoration-none" href="" >REACT</a>
                <a class="badge bg-dark fs-7 m-1 p-2 text-decoration-none" href="" >MongoDB</a>
                <a class="badge bg-dark fs-7 m-1 p-2 text-decoration-none" href="" >NodeJS</a>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <h2 class="fw-bold">MyBlog</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus neque, quaerat, beatae commodi sunt deserunt nesciunt earum adipisci aliquam dolor tempore dolore? Id consequuntur rerum odit quis facilis doloribus qui?</p>
        </div>
        <div class="d-flex flex-wrap justify-content-center">
            <a class="badge bg-secondary fs-8 p-2 m-2 text-decoration-none" href="">Privacy polivy</a>
            <a class="badge bg-secondary fs-8 p-2 m-2 text-decoration-none" href="">Privacy polivy</a>
            <a class="badge bg-secondary fs-8 p-2 m-2 text-decoration-none" href="">Privacy polivy</a>
            <a class="badge bg-secondary fs-8 p-2 m-2 text-decoration-none" href="">Privacy polivy</a>
            <a class="badge bg-secondary fs-8 p-2 m-2 text-decoration-none" href="">Privacy polivy</a>

        </div>
        <div class="credits text-center mt-4"> 
            <p>Made by Andres Parra &copy; 2021. All right reserved</p> 
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>