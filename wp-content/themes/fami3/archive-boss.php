<?php get_header(); ?>

<div class="wiki_top_body">
    <div class="wiki_body">
        <div class="flexbox_parent">
            <div class="flexbox_sidebar_left">
                <?php get_sidebar('left'); ?>
            </div>
            <div class="flexbox_center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/boss_image.png" />
                <ul>
                    <?php
                    $terms = get_terms('category_boss', 'hide_empty=0'); //空のタームも出力
                    foreach ($terms as $term) {
                        echo '<li><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="flexbox_right">
                <?php get_sidebar('right'); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>