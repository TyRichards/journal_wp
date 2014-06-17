<?php
/*
Template Name: Single Column
*/
?>

<?php get_header(); ?>

<section class="masthead">
    <div class="background">&nbsp;</div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="text-center"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title('') ?></a></h1>            
            </div>
        </div>
    </div>
</section>  

<section class="primary-content">
    <div class="container">    
        <div class="row">    
            <article class="main-col col-sm-8 col-sm-offset-2 page-content">                                
                <?php 
                while (have_posts()) {
                  the_post();

                  get_template_part('content', 'page');

                  echo "\n\n";
                  
                  // If comments are open or we have at least one comment, load up the comment template
                  if (comments_open() || '0' != get_comments_number()) {
                    comments_template();
                  }

                  echo "\n\n";

                } //endwhile;
                ?>             
            </article>  
        </div> <!-- .row -->             
    </div> <!-- .container -->
</section> <!-- .primary-content -->

<?php get_footer(); ?> 
