<?php
/**
 * Template Name: Calendar
 *
 * This is the template that displays full width page without sidebar
 *
 * @package dazzling
 */

get_header(); ?>
<div id="content" class="site-content container">
<h1 class="calendar-title"><?php the_title(); ?></h1>
<hr class="calendar-divider">

	<!-- Sidebar with editable content -->
	<div id="secondary" class="widget-area col-sm-12 col-md-3 calendar-sidebar" role="complementary">
		<?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
	</div>

	<!-- The actual calendar -->
	<div id="primary" class="content-area col-sm-12 col-md-9">
		<main id="main" class="site-main" role="main">
			<?php get_template_part( 'content', 'calendar' ); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
