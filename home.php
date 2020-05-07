<?php get_header(); ?>

	<section>
	<h1>Blog</h1>
	</section>
	<section class="page-sidebar">
		<article>
			<?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 10,
					);
				$post_home = new WP_query($args);
			?>
			<?php while( $post_home->have_posts() ): $post_home->the_post(); ?>
			<?php $thumbnail = get_the_post_thumbnail_url(); ?>

				<a href="<?php the_permalink(); ?>"><div class="blog-entry" style="background:linear-gradient(360deg, rgba(0,0,0,0.35) 0%, rgba(0,0,0,0.35) 100%), url('<?php echo $thumbnail; ?>'); background-repeat:no-repeat; background-size:cover;">
					<div class="overlay">
						<h2><?php the_title(); ?></h2>
						<p class="category"><?php foreach((get_the_category()) as $category) {
						echo $category->cat_name . ' '; } ?></p>
					</div>
				</div></a>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</article>

		<aside>
		<?php dynamic_sidebar('Main Sidebar'); ?>
		</aside>
	</section>


	<a id="backtotop" title="Back to top" href="#"></a>

<?php get_footer(); ?>