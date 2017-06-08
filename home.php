<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="post_container" itemscope itemtype="http://schema.org/Article">
<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><span itemprop="headline"><?php the_title(); ?></span></a></h2>
<small><time itemprop="datePublished" content="<?php the_time('Y-m-d') ?>"><?php the_time('F jS, Y') ?></time> by <span itemprop="author"><?php the_author_posts_link(); ?></span></small>
<?php if( has_post_thumbnail() ) : ?>
<?php the_post_thumbnail( 'thumbnail' ); ?>
<span itemprop="description" content="excerpt from post"><?php the_excerpt(); ?></span>
<?php else : ?>
<span itemprop="description" content="excerpt from post"><?php the_excerpt(); ?></span>
<?php endif; ?>
</div>

<?php endwhile; ?>

<?php $count_posts = wp_count_posts(); $published_posts = $count_posts->publish; ?>
<?php $maxposts = get_option('posts_per_page'); ?>
<?php if( $published_posts > $maxposts ) : ?>

<div class="search_container">
<p><?php get_search_form( true ); ?></p>
</div>

<div class="navigation_container">
<div class="align_center"><?php echo paginate_links( array( 'prev_next' => false ) ); ?></div>
<div class="align_left"><?php if(get_previous_posts_link()) { previous_posts_link('&laquo; Newer Entries'); } else { echo '&laquo; Newer Entries'; } ; ?></div>
<div class="align_right"><?php if(get_next_posts_link()) { next_posts_link('Older Entries &raquo;'); } else { echo 'Older Entries &raquo;'; } ; ?></div>
</div>

<?php endif; ?>

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