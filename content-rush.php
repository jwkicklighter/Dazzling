<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package dazzling
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content col-sm-12 col-md-7">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'dazzling' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<div class="col-sm-12 col-md-5">
		<?php if (has_post_thumbnail( get_the_id() ) ): ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'single-post-thumbnail' ); ?>
			<a href="<?php echo $image[0]; ?>" target="_blank">
				<img src="<?php echo $image[0]; ?>" />
			</a>
		<?php endif; ?>
	</div>
	<?php edit_post_link( __( 'Edit', 'dazzling' ), '<footer class="entry-meta"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
