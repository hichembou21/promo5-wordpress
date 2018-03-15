<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

                $img = get_field('image');
                echo '<img class="right-side" alt="'.$img['alt'].'" src="'.$img['url'].'"/>';
    
				echo '<h1>';
                the_field("nom");
                echo '</h1>';
                echo '<h5>';
				the_field("prix");
				echo '</h5>';
                echo '<p>';
                the_field("ingredients");
                echo '</p>';

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
