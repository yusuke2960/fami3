<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <div class="tab_panel_title"><?php the_title(); ?></div>

        <div class="tab_panel_header_title"></div>

        <p><?php the_content(); ?></p>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>