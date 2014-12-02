<?php

/**
 * Single page of Bedrock
 */

get_header();

?>

<div class="content">
    <div class="row">
        <div class="large-12 columns">

            <?php if ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endif; ?>

        </div>
    </div>
</div>

<?php get_footer();

