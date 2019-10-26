<?php

/* 

@package brightcapella

    ==================================
            FAQ HTML PAGE
    ==================================

*/

$args = array(
    'posts_per_page' => -1,
    'post_type'      => 'brc-faq',
    'post_status'    => 'publish',
);

$faq_posts = new WP_Query( $args );

if ( $faq_posts->have_posts() ) :
    while ( $faq_posts->have_posts() ) : 
        $faq_posts->the_post();      
?>

<div class="card">

    <div class="card-header">
        <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#brc_<?php the_ID();?>" aria-expanded="false" aria-controls="brc_<?php the_ID();?>">
                <?php the_title(); ?>
            </button>
        </h2>
    </div>

    <div id="brc_<?php the_ID();?>" class="collapse">
        <div class="card-body">
            <?php the_content(); ?>
        </div>
    </div>

</div>

<?php 
endwhile;
endif;