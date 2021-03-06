<?php
/**
 * The template for displaying all single posts.
 *
 * @package gridsby
 */

get_header(); ?>

<div class="grid grid-pad">

	<?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_single_post_full' ) ) ) : ?>

		<div class="col-9-12 content-wrapper">
	
	<?php else : ?>
    
    	<div class="col-1-1 content-wrapper">
        
    <?php endif; ?>
    
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
            
    
            <?php while ( have_posts() ) : the_post(); ?>
    
                <?php get_template_part( 'content', 'single' ); ?>
                 
                <?php the_post_navigation( ); ?> 
              
                <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || '0' != get_comments_number() ) :
                        comments_template();
                    endif;
                ?>
    
            <?php endwhile; // end of the loop. ?>
    
            </main><!-- #main -->
        </div><!-- #primary -->
	
    <?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_single_post_full' ) ) ) : ?>

		</div>
	
	<?php else : ?>
    
    	</div>
        
    <?php endif; ?>
    
    
	
	
	<?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_single_post_full' ) ) ) : ?>

		<?php get_sidebar(); ?>
	
	<?php else : ?>
    
   
        
    <?php endif; ?>
    

</div>
<?php get_footer(); ?>