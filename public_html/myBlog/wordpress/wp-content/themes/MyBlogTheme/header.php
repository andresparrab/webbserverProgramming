<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
      <title>vår första tem</title>
   </head>
   <body>
      <div id="wrapper">
      <nav>
            <ul>
         <li class="page_item">
            <a href="<?php echo home_url();?>">Home</a>
         </li>       
            <?php wp_list_pages('&title_li=');?>
            </ul>
         </nav>
         <header>
            <div>
                <h1>MyBlog</h1>
            </div>
            <!-- <aside>
                <p>Eventuel sido informatioNss</p>
            </aside> -->
         </header>
