<?php
/**
 * The template for displaying posts in the Image post format
 *
 * @category  Theme
 * @package   [starter]
 * @author    [Your Name]
 * @copyright 2012 [Your Name]
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading', 'starter' ) ); ?>
		</div>

		<footer class="entry-meta">
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'starter' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
				<h5><?php the_title(); ?></h5>
				<h6><time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo get_the_date(); ?></time></h6>
			</a>
			<?php if ( comments_open() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'starter' ) . '</span>', __( '1 Reply', 'starter' ), __( '% Replies', 'starter' ) ); ?>
			</div>
			<?php endif; // comments_open() ?>
			<?php edit_post_link( __( 'Edit', 'starter' ), '<span class="edit-link">', '</span>' ); ?>
		</footer>
	</article>
