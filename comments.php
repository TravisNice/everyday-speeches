<?php
/*
 * @package WordPress
 * @subpackage simplicity
 * @since Simplicity 1.0
 */
if ( post_password_required() )
return;
?>

<div id="comments" class="comments-area">
<?php if ( have_comments() ) : ?>
<h2>
<?php
printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'simplicity' ),
number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
?>
</h2>

<ul class="comment-list">
<?php
wp_list_comments( array(
'style'       => 'ul',
'short_ping'  => true,
'avatar_size' => 74,
) );
?>
</ul><!-- .comment-list -->

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
<nav class="navigation comment-navigation" role="navigation">
<h1 class=<screen-reader-text section-heading"><?php _e( 'Comment navigation', 'simplicity' ); ?></h1>
<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'simplicity' ) ); ?></div>
<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'simplicity' ) ); ?></div>
</nav><!-- .comment-navigation -->
<?php endif; ?>

<?php if ( ! comments_open() && get_comments_number() ) : ?>
<p class="no-comments"><?php _e( 'Comments are closed.' , 'simplicity' ); ?></p>
<?php endif; ?>

<?php endif; // have_comments() ?>
 
<?php comment_form( array( 'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>' ) ); ?>

</div><!-- #comments -->