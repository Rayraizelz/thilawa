<?php get_header(); ?>

<main>
  
<div class = "kv">
  <img src="<?php echo get_template_directory_uri(); ?>/images/top-logo.png" srcset="<?php echo get_template_directory_uri(); ?>/images/top-logo.png 1x,<?php echo get_template_directory_uri(); ?>/images/top-logo@2x.png 2x">
</div>

<article class="top-news">
    <h2 class="text-center font-serif">NEWS</h2>
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
  
<article class="top-feature">
  <section class="top-feature-list-item">
    <img src="<?php echo get_template_directory_uri(); ?>/images/top1.png" srcset="<?php echo get_template_directory_uri(); ?>/images/top1.png 1x,<?php echo get_template_directory_uri(); ?>/images/top1@2x.png 2x">
    <h3>Deep taste, discerning espresso</h3>
    <p>Our espresso is carefully extracted one by one after receiving an order from the customer. Enjoy in Seattle style with plenty of milk。</p>
  </section>
  <section class="top-feature-list-item">
    <img src="<?php echo get_template_directory_uri(); ?>/images/top2.png" srcset="<?php echo get_template_directory_uri(); ?>/images/top2.png 1x,<?php echo get_template_directory_uri(); ?>/images/top2@2x.png 2x">
    <h3>High-speed Wi-Fi, power supply for all seats</h3>
    <p>A high-speed internet environment is available in the store. In addition, all seats are equipped with a power supply. We also have various charging cables for rent, so please feel free to ask the staff。</p>
  </section>
  <section class="top-feature-list-item">
    <img src="<?php echo get_template_directory_uri(); ?>/images/top3.png" srcset="<?php echo get_template_directory_uri(); ?>/images/top3.png 1x,<?php echo get_template_directory_uri(); ?>/images/top3@2x.png 2x">
    <h3>The inside of the store is completely non-smoking</h3>
    <p>Our shop is completely non-smoking.<br>※Please use the ashtray outside the store when smoking。</p>
  </section>
</article>

<article class="top-menu">
    <h2 class="font-serif">MENU</h2>
    <a href="/menu/" class="arrow-right pc-only top-menu-more">See more</a>
    <ul class="top-menu-list">
    <?php
      $args = array(
        'post_type' => 'menu', 
        'posts_per_page' => 6,
     );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      while ($the_query->have_posts()) : $the_query->the_post();
      ?>
        <li class="top-menu-list-item">
          <img src="<?php the_field('image'); ?>" width=154 height=154><br>
          <?php the_title(); ?>
        </li>
      <?php
          endwhile;
        else:
      ?>
        <li>The article you were looking for was not found</li>
      <?php endif; ?>
  </ul>
  <div class="text-center">
    <a href="/menu/" class="arrow-right sp-only top-menu-more">See more</a>
  </div>
  </article>

<article class="top-special">
    <h2 class="text-center font-serif">SPECIAL CONTENTS</h2>
    <ul class="top-special-list">
      <li class="top-special-list-item">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/sp1.png" srcset="<?php echo get_template_directory_uri(); ?>/images/sp1.png 1x,<?php echo get_template_directory_uri(); ?>/images/sp1@2x.png 2x"></a>
      </li>
      <li class="top-special-list-item">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/sp2.png" srcset="<?php echo get_template_directory_uri(); ?>/images/sp2.png 1x,<?php echo get_template_directory_uri(); ?>/images/sp2@2x.png 2x"></a>
      </li>
      <li class="top-special-list-item">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/sp3.png" srcset="<?php echo get_template_directory_uri(); ?>/images/sp3.png 1x,<?php echo get_template_directory_uri(); ?>/images/sp3@2x.png 2x"></a>
      </li>
    </ul>
  </article>

</main>

<?php get_footer(); ?>