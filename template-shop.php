<?php
/*
 * Template Name: Shop Page
 */

get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; else: endif; ?>
    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
?>
