<?php get_header(); ?>

<div class="search_container">
<h1><?php printf( __( 'Search Results for: %s' ), get_search_query() ); ?></h1>
</div>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="post_container">
<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link(); ?></small>
<?php if( has_post_thumbnail() ) : ?>
<?php the_post_thumbnail( 'thumbnail' ); ?>
<?php the_excerpt(); ?>
<?php else : ?>
<?php the_excerpt(); ?>
<?php endif; ?>
</div>

<?php endwhile; ?>

<?php $count_posts = wp_count_posts(); $published_posts = $count_posts->publish; ?>
<?php $maxposts = get_option('posts_per_page'); ?>
<?php if( $published_posts > $maxposts ) : ?>
<div class="navigation_container">
<div class="aligncenter"><?php echo paginate_links( array( 'prev_next' => false ) ); ?></div>
<div class="align_left"><?php if(get_previous_posts_link()) { previous_posts_link('&laquo; Newer Entries'); } else { echo '&laquo; Newer Entries'; } ; ?></div>
<div class="align_right"><?php if(get_next_posts_link()) { next_posts_link('Older Entries &raquo;'); } else { echo 'Older Entries &raquo;'; } ; ?></div>
</div>
<?php endif; ?>

<?php else : ?>
<div class="post_container">
<h2>Not Found</h2>
<p><?php _e("Sorry, there's nothing to show for that query."); ?></p>
</div>
<?php endif; ?>

<?php get_footer(); ?>
