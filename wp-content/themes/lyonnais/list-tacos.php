<?php

/*
Template Name: List tacos
*/

get_header(); ?>

<div class="wrap">
   <div id="primary" class="content-area">
       <main id="main" class="site-main" role="main">
           <?php
           /* Start the Loop */
           while ( have_posts() ) : the_post();
           
				get_template_part( 'template-parts/post/content', get_post_format() );
                
                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;
           endwhile; // End of the loop.
           ?>
           

           <section class="list-pizza">
           <?php
           $query = new WP_Query( array( 'post_type' => 'tacos',
        'posts_per_page' => -1 ));
           
           while ( $query->have_posts() ) : $query->the_post();
           
            echo '<article class="item-tacos">';
            $img = get_field('image');
            echo '<img class="img-pizza" alt="'.$img['alt'].'" src="'.$img['url'].'"/>';
       
            echo '<h1>';
            the_field('nom');
            echo '</h1>';
            
            echo '<h5>';
            the_field("prix");
            echo '</h5>';
            echo '<p>';
            the_field("ingredients");
            echo'</p>';
            echo '</article>';
            
           endwhile; // End of the loop.
           wp_reset_postdata();
           ?> 
           </section>

       </main><!-- #main -->
   </div><!-- #primary -->
</div><!-- .wrap -->
