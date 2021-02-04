<?php
$title = $_GET['title'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="mybootstrat.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">


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


    <!-- HERO section -->
    <section class="hero2 d-flex align-items-center">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h1 class="fw-bold text-white"><?php echo $title?>  </h1>
            </div>

        </div>
    </section>

    <!-- Rows  -->

    <main class="content bg-light container py-5">
        <div class="row">
        <?php
            // echo 'Start testing';
            require_once("./php/getPost.php");
            // echo 'Before getMain';
            getMainPosts();
            // echo 'Stop testing';
            ?>
            <!-- Row items -->
            <!-- <article class="row col-md-8 px-4" style="max-height: 900px;" >
                <div class="mx-0 shadow">
                    <img class="img-fluid" src="./images/02.jpg" alt="">
                    <div class="p-2">
    
                        <div class="badge mb-1">
                            <span class="badge bg-success fs-5 m-1 p-1">Bootstrap</span>
                            <span class="badge bg-success fs-5 m-1 p-1">Responsive</span>
                            <span class="badge bg-success fs-5 m-1 p-1">CSS</span>
                            </p>
                        </div>
    
                        <h3 class="mb-3">Subheading</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ratione nemo rerum laborum modi
                            expedita, aliquid totam ex impedit! Nostrum, quam! Aspernatur repudiandae maiores, porro quas et
                            incidunt nihil eveniet?</p>
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
            </article> -->
        
            
            <!-- Side Items -->
            <aside class="col-md-4 px-4 mx-2">    
            <article class="w-100 mb-4">
                <div class="m-1 shadow">
                    <img class="img-fluid" src="./images/1.jpg" alt="">
                    <div class="article-content px-2 py-1">
                        <h2 class="fs-3 fw-bold mb-1">My bootstrap theme</h2>
                        <div class="d-flex justify-content-between">
                            <p>20. Mars 2020</p>
                            <p>
                                <span class="badge bg-dark fs-5">php</span>
                            </p>
                        </div>
                    </div>
                </div>
            </article>
<!-- Side Items -->
            <article class="w-100 py-0 mb-4">
                <div class="m-1 shadow">
                    <img class="img-fluid" src="./images/1.jpg" alt="">
                    <div class="article-content px-2 py-1">
                        <h2 class="fs-3 fw-bold mb-1">My bootstrap theme</h2>
                        <div class="d-flex justify-content-between">
                            <p>20. Mars 2020</p>
                            <p>
                                <span class="badge bg-dark fs-5">php</span>
                            </p>
                        </div>
                    </div>
                </div>
            </article>
            <!-- Side Items -->
            <article class="w-100 py-0 mb-4">
                <div class="m-1 shadow">
                    <img class="img-fluid" src="./images/1.jpg" alt="">
                    <div class="article-content px-2 py-1">
                        <h2 class="fs-3 fw-bold mb-1">My bootstrap theme</h2>
                        <div class="d-flex justify-content-between">
                            <p>20. Mars 2020</p>
                            <p>
                                <span class="badge bg-dark fs-5">php</span>
                            </p>
                        </div>
                    </div>
                </div>
            </article>
            <!-- Side Items -->
            <article class="w-100 py-0 mb-4">
                <div class="m-1 shadow">
                    <img class="img-fluid" src="./images/1.jpg" alt="">
                    <div class="article-content px-2 py-1">
                        <h2 class="fs-3 fw-bold mb-1">My bootstrap theme</h2>
                        <div class="d-flex justify-content-between">
                            <p>20. Mars 2020</p>
                            <p>
                                <span class="badge bg-dark fs-5">php</span>
                            </p>
                        </div>
                    </div>
                </div>
            </article>
            </aside>
    </div>
    
    </main>
   
    <section class="hero2 py-3">
        <div class="d-flex container justify-content-center flex-wrap ">
                <a class="badge bg-dark fs-4 m-1 p-2 text-decoration-none" href="" >Bootstrap</a>
                <a class="badge bg-dark fs-4 m-1 p-2 text-decoration-none" href="" >HTML &amp; CSS</a>
                <a class="badge bg-dark fs-4 m-1 p-2 text-decoration-none" href="" >Javascript</a>
                <a class="badge bg-dark fs-4 m-1 p-2 text-decoration-none" href="" >REACT</a>
                <a class="badge bg-dark fs-4 m-1 p-2 text-decoration-none" href="" >MongoDB</a>
                <a class="badge bg-dark fs-4 m-1 p-2 text-decoration-none" href="" >NodeJS</a>
                <a class="badge bg-dark fs-4 m-1 p-2 text-decoration-none" href="" >Bootstrap</a>
                <a class="badge bg-dark fs-4 m-1 p-2 text-decoration-none" href="" >HTML &amp; CSS</a>
                <a class="badge bg-dark fs-4 m-1 p-2 text-decoration-none" href="" >Javascript</a>
                <a class="badge bg-dark fs-4 m-1 p-2 text-decoration-none" href="" >REACT</a>
                <a class="badge bg-dark fs-4 m-1 p-2 text-decoration-none" href="" >MongoDB</a>
                <a class="badge bg-dark fs-4 m-1 p-2 text-decoration-none" href="" >NodeJS</a>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <h2 class="fw-bold">MyBlog</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus neque, quaerat, beatae commodi sunt deserunt nesciunt earum adipisci aliquam dolor tempore dolore? Id consequuntur rerum odit quis facilis doloribus qui?</p>
        </div>
        <div class="d-flex flex-wrap justify-content-center">
            <a class="badge bg-secondary fs-4 p-2 m-2 text-decoration-none" href="">Privacy polivy</a>
            <a class="badge bg-secondary fs-4 p-2 m-2 text-decoration-none" href="">Privacy polivy</a>
            <a class="badge bg-secondary fs-4 p-2 m-2 text-decoration-none" href="">Privacy polivy</a>
            <a class="badge bg-secondary fs-4 p-2 m-2 text-decoration-none" href="">Privacy polivy</a>
            <a class="badge bg-secondary fs-4 p-2 m-2 text-decoration-none" href="">Privacy polivy</a>

        </div>
        <div class="credits text-center mt-4"> 
            <p>Made by Andres Parra &copy; 2021. All right reserved</p> 
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>