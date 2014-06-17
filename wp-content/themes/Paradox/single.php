<?php
/**
 * Template for dispalying single post (read full post page).
 * 
 * @package bootstrap-basic
 */
?>

<?php get_header(); ?>

<section class="masthead">
    <div class="background">&nbsp;</div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h1 class="text-center"><?php the_title('') ?></h1>            
            </div>
        </div>
    </div>
</section>	

<section class="primary-content">
    <div class="container">    
        <div class="row">    
            <div class="main-col col-md-8 col-md-offset-2 page-content">              
				<?php 
				while (have_posts()) {
					the_post();

					get_template_part('content', get_post_format());

					echo "\n\n";
					
					bootstrapBasicPagination();

					echo "\n\n";
					
					// If comments are open or we have at least one comment, load up the comment template
					if (comments_open() || '0' != get_comments_number()) {
						comments_template();
					}

					echo "\n\n";

				} //endwhile;
				?> 
			</div> <!-- .main-col -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .primary-content -->

<?php get_footer(); ?> 