<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage glitterbrains_wp_theme
 * @since glitterbrains_wp_theme 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h4 class="comments-title">
			<?php
			printf(
				_nx(
					'Ein wenig Glitter zu "%2$s"',
					'Ein wenig Glitter zu "%2$s"',
					get_comments_number(),
					'comments title',
					'glitterbrains_wp_theme'
				),
				number_format_i18n( get_comments_number() ),
				'<span>' . get_the_title() . '</span>'
			);
			?>
		</h4>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'       => 'div',
				'short_ping'  => true,
				'avatar_size' => 40,
			) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav class="navigation comment-navigation" role="navigation">

				<h1 class="screen-reader-text section-heading"><?php _e( 'Kommentarnavigation', 'glitterbrains_wp_theme' ); ?></h1>
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Ältere Kommentare', 'glitterbrains_wp_theme' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Neuere Kommentare &rarr;', 'glitterbrains_wp_theme' ) ); ?></div>
			</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
			<p class="no-comments"><?php _e( 'Kommentare sind geschlossen.', 'glitterbrains_wp_theme' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>

</div><!-- #comments -->
