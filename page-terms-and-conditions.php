<?php 
/* 

@package brightcapella

    ======================================
            TERMS AND CONDITIONS PAGE
    ======================================

*/
/* Template Name: Terms And Conditions */ 
get_header(); 
?>

<div class="container brc_pages_container" id="brc_terms_and_conditions">
    <div class="d-flex flex-column p-3 brc_pages_content">
        <h1 class="align-self-center brc_pages_titles"><?php the_title(); ?></h1>
        <?php
            while ( have_posts() ) : the_post(); ?> 
                <div class="entry-content-page my-3">
                    <?php the_content(); ?> <!-- Page Content -->
                </div>
            <?php
            endwhile; 
            wp_reset_query(); 
        ?>

    </div>
</div>

<?php get_footer(); ?>