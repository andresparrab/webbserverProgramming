
<?php get_header() ?>
<div class="main">
            <!-- <div id="content"> -->
               <article>
                  <!-- <section> -->
                     <?php
                        if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                        <section class="card">
                        <h1><?php the_title(); ?></h1>                                               
                        <p><?php the_content(); ?></p>
                        <h1><?php the_author(); ?></h1> 
                        <h1><?php the_date(); ?></h1>
                        </section>
                        <?php endwhile; endif;?>
                  <!-- </section> -->
               </article>
            <!-- </div> -->
<?php get_sidebar() ?>
<?php get_footer() ?>

