<?php 
/*
Template Name: Accueil
*/
?>

<?php get_header(); ?>

	<div id="masthead"><img src="<?php header_image(); ?>"></div>
	<div id="moto"><?php bloginfo('title'); ?></div>

	<section class="page-sidebar">

		<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
		<article>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</article>
		<?php endwhile; else: ?>
		<p>Il n'y pas de contenu.</p>
		<?php endif; ?>

	<?php get_sidebar(); ?>

	</section>

	<a id="backtotop" title="Back to top" href="#"></a>

<?php get_footer(); ?>

