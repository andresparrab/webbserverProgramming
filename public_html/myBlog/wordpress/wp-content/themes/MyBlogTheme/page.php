
<?php /* Template Name: Mall */ ?>
<?php get_header(); ?>
<div class="main">
            <div id="content">
               <article>
                  <section class="card2">
                        <?php
                            if ( have_posts() ) : while ( have_posts() ) : the_post();
                            get_template_part( 'content', get_post_format() );
                            endwhile; endif;
                            the_content(); ?>
                  </section>
               </article>
            </div>
<?php get_sidebar() ?>
<?php get_footer() ?>