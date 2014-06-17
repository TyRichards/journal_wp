<?php
/**
 * The main template file
 * 
 * @package bootstrap-basic
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
            <article class="main-col col-md-8 col-md-offset-2 page-content">  								
				<?php if (have_posts()) { ?> 
				<?php 
				// start the loop
				while (have_posts()) {
					the_post();
					
					/* Include the Post-Format-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Format name) and that will be used instead.
					*/
					get_template_part('content', get_post_format());

				}// end while
				
				bootstrapBasicPagination();
				?> 
				<?php } else { ?> 
				<?php get_template_part('no-results', 'index'); ?>
				<?php } // endif; ?> 					
			</article>
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .primary-content -->
<?php get_footer(); ?> 