<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nagrada
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$nagrada_comment_count = get_comments_number();
			if ( '1' === $nagrada_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'nagrada' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $nagrada_comment_count, 'comments title', 'nagrada' ) ),
					number_format_i18n( $nagrada_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
			) );
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'nagrada' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().


	// $args = array(
	// 	'id_form'           => 'commentform',
	// 	'class_form'      => 'comment-form bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4',
	// 	'id_submit'         => 'submit',
	// 	'class_submit'      => 'shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded',
	// 	'name_submit'       => 'submit',
	// 	'title_reply'       => __( 'Ostavite komentar' ),
	// 	'title_reply_to'    => __( 'Ostavite komentar na %s' ),
	// 	'cancel_reply_link' => __( 'Ponisti' ),
	// 	'label_submit'      => __( 'Posalji komentar' ),
	// 	'format'            => 'xhtml',
	  
	// 	'comment_field' =>  '<p class="comment-form-comment"><p class="comment-form-author"><label for="author" class="block text-gray-700 text-sm font-bold mb-2">' . __( 'Name', 'domainreference' ) .
	// 	( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
	// 	'<input id="author" name="author" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-5 bg-gray-200" value="' . esc_attr( $commenter['comment_author'] ) .
	// 	'" size="30"' . $aria_req . ' /></p><textarea id="comment" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="comment" cols="45" rows="8" aria-required="true">' .
	// 	  '</textarea></p>',
	// 	'must_log_in' => '<p class="must-log-in">' .
	// 	  sprintf(
	// 		__( 'Morate biti ulogovani <a href="%s">logged in</a> da bi ste ostavili komentar.' ),
	// 		wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
	// 	  ) . '</p>',
	  
	// 	'logged_in_as' => '<p class="logged-in-as">' .
	// 	  sprintf(
	// 	  __( 'Ulogovani ste kao <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
	// 		admin_url( 'profile.php' ),
	// 		$user_identity,
	// 		wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
	// 	  ) . '</p>',
	  
	// 	'comment_notes_before' => '<p class="comment-notes block text-gray-500 font-bold md:text-right mb-1 md:mb-0">' .
	// 	  __( 'Vasa email adressa nece biti objavljena' ) . ( $req ? $required_text : '' ) .
	// 	  '</p>',
	// 	'fields' => apply_filters( 'comment_form_default_fields', $fields ),


	//   );

	comment_form();
	?>

</div><!-- #comments -->
