<?php get_header(); ?>
<div class="wiki_top_body">
	<div class="wiki_body">
		<div class="flexbox_parent">
			<div class="flexbox_sidebar_left">
				<?php get_sidebar('left'); ?>
			</div>
			<div class="flexbox_center">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post() ?>
						<div class="news_archive">
							<div class="news_thumbnail">
								<?php the_post_thumbnail(); ?>
							</div>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<div class="course_price ml-auto"><a href="<?php the_permalink(); ?>">詳細を見る</a></div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="flexbox_right">
				<?php get_sidebar('right'); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>