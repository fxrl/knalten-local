<?php
/*
Template Name: Archives
*/
?>
<?php get_header() ?>

<!-- hero-section -->
<div class="container-fluid hero">
</div>

<!-- welcome section -->
<div class="container">
  <div class="row nyheter__title">
    <div class="col-12 ">
      <h1>Nyheter</h1>
      <h2>Stay up to Date</h2>
    </div>
  </div>
</div>

<!-- news section -->
<section class='latest-news-wrapper'>
  <div class="container latest-news">
    <div class="row">
    <?php 
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
  <?php // echo do_shortcode('[ajax_load_more container_type="div" post_type="post" posts_per_page="4"]') ?>
  <?php echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="4" scroll="false" images_loaded="true" button_label="Ladda mer" button_loading_label="Laddning"]') ?>
<?php endwhile; else: ?>
      <p>There no posts to show</p>
      <?php endif; ?>
    
    </div>
  </div>
</section>


<?php get_footer() ?>