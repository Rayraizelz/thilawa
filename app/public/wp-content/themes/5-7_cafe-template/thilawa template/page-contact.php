<?php get_header(); ?>

<main>
<?php
    if(have_posts()):
      while(have_posts()) : the_post();
  ?>
  <?php the_content(); ?>
  <?php
      endwhile;
    else:
  ?>
  <p>The page you were looking for was not found.</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>