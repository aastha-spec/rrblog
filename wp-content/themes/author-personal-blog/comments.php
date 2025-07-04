<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Author Personal Blog
 */
/**
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="comments-area" role="region" aria-label="<?php esc_attr_e( 'Comments Section', 'author-personal-blog' ); ?>">
	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$author_personal_blog_comment_count = get_comments_number();
			if ( '1' === $author_personal_blog_comment_count ) {
				esc_html_e( '1 Comment', 'author-personal-blog' );
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $author_personal_blog_comment_count, 'comments title', 'author-personal-blog' ) ),
					number_format_i18n( $author_personal_blog_comment_count ),
					'<span>' . esc_html( get_the_title() ) . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->
		<?php the_comments_navigation(); ?>
		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 96,
					'callback'    => 'author_personal_blog_comment_list',
				)
			);
			?>
		</ol><!-- .comment-list -->
		<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'author-personal-blog' ); ?></p>
			<?php
		endif;
	endif; // Check for have_comments().
	comment_form( array( 'aria-label' => esc_attr__( 'Comment Form', 'author-personal-blog' ) ) );
	?>
</div><!-- #comments -->