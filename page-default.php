<?php 
/*
Template Name: Page par défaut
*/
?>

<?php get_header(); ?>

	<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
	<section class="page-default">
	<h1><?php the_title(); ?></h1>
	<article class="category-content">
	<?php the_content(); ?>
	</article>
	</section>
	<?php endwhile; else: ?>
	<p>Il n'y pas de contenu.</p>
	<?php endif; ?>

	<a id="backtotop" title="Back to top" href="#"></a>

<?php get_footer(); ?>