<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package dazzling
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- <header class="entry-header page-header"> -->
		<!-- <h1 class="entry-title calendar-title"><?php the_title(); ?></h1> -->
	<!-- </header> --><!-- .entry-header -->

	<div id="calendar" class="fc fc-ltr fc-unthemed calendar-embed"></div>
		<div id="calendar-mini" class="calendar-embed-mini">
			<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=400&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=kkyetasigma%40gmail.com&amp;color=%23182C57&amp;ctz=America%2FNew_York" style=" border-width:0 " width="100%" height="400" frameborder="0" scrolling="no"></iframe>
		</div>

	<?php //edit_post_link( __( 'Edit', 'dazzling' ), '<footer class="entry-meta"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
