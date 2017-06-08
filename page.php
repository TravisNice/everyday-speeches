<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="post_container">
<h1 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>
<?php if( has_post_thumbnail() ) : ?>
<?php the_post_thumbnail( 'medium' ); ?>
<?php the_content(); ?>
<?php else : ?>
<?php the_content(); ?>
<?php endif; ?>
</div>

<?php endwhile; ?>

<?php else : ?>
<div class="post_container">
<h2>Not Found</h2>
<p><?php _e("Sorry, there're no pages or posts to show for this url.  Try a search in the box below."); ?></p>
</div>
<div class="search_container">
<p><?php get_search_form( true ); ?></p>
</div>
<?php endif; ?>

<?php get_footer(); ?>