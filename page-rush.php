<?php
/**
 * Template Name: Rush Info
 *
 * This is the template that displays full width page without sidebar
 *
 * @package dazzling
 */

get_header(); ?>
<div id="content" class="site-content container rush-content">
	<header class="entry-header page-header">
		<h1 class=""><?php the_title(); ?></h1>
	</header>

	<!-- The actual calendar -->
	<div id="primary" class="content-area col-sm-12 col-md-12">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'rush' ); ?>
			<?php endwhile; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
