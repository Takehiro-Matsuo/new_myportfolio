<?php get_header(); ?>
<div class="contetns">
<?php
  if(have_posts()):
    while (have_posts()) : the_post();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
  <?php the_content(); ?>
</article>
<?php endwhile;
endif;?>
</div>
<?php get_footer(); ?>
