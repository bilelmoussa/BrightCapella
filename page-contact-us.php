<?php 
/* 

@package brightcapella

    ===============================
            CONTACT PAGE
    ===============================

*/

/* Template Name: Contact Us */ 
get_header(); 
?>

<div class="container brc_pages_container" id="brc_contact_us">
    <div class="d-flex flex-column p-3 brc_pages_content">
        <h1 class="align-self-center brc_pages_titles"><?php the_title(); ?></h1>
        <?php
            // TO SHOW THE PAGE CONTENTS
            while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                <div class="entry-content-page my-3">
                    <?php the_content(); ?> <!-- Page Content -->
                </div><!-- .entry-content-page -->

            <?php
            endwhile; //resetting the page loop
            wp_reset_query(); //resetting the page query
        ?>

        
    </div>
</div>

<?php get_footer(); ?>