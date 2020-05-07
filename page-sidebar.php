<?php 
/*
Template Name: page avec sidebar
*/
?>

<?php get_header(); ?>

	<section class="page-sidebar">

		<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
		<article>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</article>
		<?php endwhile; else: ?>
		<p>Il n'y pas de contenu.</p>
		<?php endif; ?>

		<aside>
		<?php dynamic_sidebar('Main Sidebar'); ?>
		</aside>

	</section>

	<a id="backtotop" title="Back to top" href="#"></a>

<?php get_footer(); ?>