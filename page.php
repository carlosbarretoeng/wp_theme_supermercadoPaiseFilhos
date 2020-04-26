<?php get_header(); ?>

<main id="main" class="my-3" role="main">
<?php while ( have_posts() ) { the_post(); get_template_part( 'content', 'page' ); } ?>
</main>

<?php get_footer();
