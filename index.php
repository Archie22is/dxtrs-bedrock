<?php

/**
 * Index page of Bedrock
 */

get_header();

?>

<div class="content">
    <div class="row">
        <div class="large-12 columns">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="row">
                    <div class="large-8 columns">
                        <?php the_content(); ?>
                    </div>
                    <div class="large-4 columns">
                        <?php if ( dynamic_sidebar() ) : ; endif; ?>
                    </div>
                </div>
            <?php endwhile; endif; ?>

        </div>
    </div>
</div>

<?php get_footer();

