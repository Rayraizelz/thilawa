<?php get_header(); ?>

<main>
  
<div class = "kv">
  <img src="<?php echo get_template_directory_uri(); ?>/images/top-logo.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/top-logo.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/top-logo@2x.jpg 2x">
</div>

<article class="top-What's New">
    <h2 class="text-center font-serif">What's New</h2>
    <ul class="top-news-list column-center">
      <?php
      $args = array(
        'post_type' => 'post', 
        'posts_per_page' => 3,
     );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      while ($the_query->have_posts()) : $the_query->the_post();
      ?>
        <li class="top-news-list-item"><a href="<?php the_permalink(); ?>"><?php the_time('Y/n/j'); ?>　<?php the_title(); ?></a></li>
      <?php
          endwhile;
        else:
      ?>
        <li>The article you were looking for was not found</li>
      <?php endif; ?>
    </ul>
  </article>
  
<article class="top-Project Overview">
    <h2 class="text-center font-serif">Project Overview</h2>
    <ul class="top-project overviews-list column-center">
      <?php
      $args = array(
        'post_type' => 'post', 
        'posts_per_page' => 3,
     );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      while ($the_query->have_posts()) : $the_query->the_post();
      ?>
        <li class="top-project overviews-list-item"><a href="<?php the_permalink(); ?>"><?php the_time('Y/n/j'); ?>　<?php the_title(); ?></a></li>
      <?php
          endwhile;
        else:
      ?>
        <li>The article you were looking for was not found</li>
      <?php endif; ?>
    </ul>
  </article>

  <article class="top-Our Work">
    <h2 class="text-center font-serif">Our Work</h2>
    <ul class="top-our work-list column-center">
      <?php
      $args = array(
        'post_type' => 'post', 
        'posts_per_page' => 3,
     );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      while ($the_query->have_posts()) : $the_query->the_post();
      ?>
        <li class="top-our work-list-item"><a href="<?php the_permalink(); ?>"><?php the_time('Y/n/j'); ?>　<?php the_title(); ?></a></li>
      <?php
          endwhile;
        else:
      ?>
        <li>The article you were looking for was not found</li>
      <?php endif; ?>
    </ul>
  </article>

  <article class="top-Social Performance">
    <h2 class="text-center font-serif">Social Performance</h2>
    <ul class="top-social Performance-list column-center">
      <?php
      $args = array(
        'post_type' => 'post', 
        'posts_per_page' => 3,
     );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      while ($the_query->have_posts()) : $the_query->the_post();
      ?>
        <li class="top-social Performance-list-item"><a href="<?php the_permalink(); ?>"><?php the_time('Y/n/j'); ?>　<?php the_title(); ?></a></li>
      <?php
          endwhile;
        else:
      ?>
        <li>The article you were looking for was not found</li>
      <?php endif; ?>
    </ul>
  </article>

</main>

<?php get_footer(); ?>