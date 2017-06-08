<?php get_header(); ?><?php $es_post_permalink = get_permalink() ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="post_container" itemscope itemtype="http://schema.org/Article">
<?php if ( function_exists('yoast_breadcrumb') ) 
{yoast_breadcrumb('<small id="breadcrumbs">','</small>');} ?>

<h2 id="post-<?php the_ID(); ?>"><span itemprop="headline"><?php the_title(); ?></span></h2>

<small><time itemprop="datePublished" content="<?php the_time('Y-m-d') ?>"><?php the_time('F jS, Y') ?></time> by <span itemprop="author"><?php the_author_posts_link(); ?></span></small>

<?php if( has_post_thumbnail() ) : ?>
<div style="float: left;"><?php the_post_thumbnail( 'medium', array( 'itemprop' => 'image' ) ); ?></div>
<div style="float: left;"><span itemprop="text"><?php the_content(); ?></span></div>
<?php else : ?>
<div style="float: left;"><span itemprop="text"><?php the_content(); ?></span></div>
<?php endif; ?>
</div>

<div class="navigation_container">
  <div class="align_left"><?php previous_post_link(); ?></div>
  <div class="align_right"><?php next_post_link(); ?></div>
</div>

<div class="search_container">
<p><?php get_search_form( true ); ?></p>
</div>

<?php comments_template(); ?>

<?php endwhile; ?>

<?php else : ?>
<div class="post_container">
  <h2>Not Found</h2>
  <p><?php _e("Sorry, there're no pages or posts to show for this url.  Try a search in the box above."); ?></p>
</div>
<?php endif; ?>

<?php get_footer(); ?>