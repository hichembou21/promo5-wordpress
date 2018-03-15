<?php
/*
Template Name: accueil
*/
get_header();
while ( have_posts() ) : the_post();

    echo '<h1 class="titre"> Bienvenue </h1>';
    echo '';


    the_content();

endwhile;

get_footer();
?>