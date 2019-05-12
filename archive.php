<?php
/*
Template Name: Archives
*/
?>
<?php get_header() ?>

<!-- hero-section -->
<div class="container-fluid hero">
    <div class="row">
      <div class="col-12">
        <img src='https://via.placeholder.com/1000x700'>
      </div>
    </div>
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
          <!-- the loop -->
          <?php 
            $args = array( 
              'post_type' => 'post',
            );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="col-md-6">
            <div class="card latest-post">
              <?php 
                $thumb = $dynamic_featured_image->get_featured_images([get_the_id()]);
              ?>
              <?php 
              if ($thumb[0]['full'])
                
                echo "
                  <img class='card-img-top' src='". $thumb[0]['full'] ."' alt='Card image cap'>                
                "
              
              ?>

              <div class="card-body">
                <h5 class="card-title">		
                    <?php the_title(); ?>
                </h5>
                <span class="badge badge-success">
                    <?php the_date(); ?>
                </span>
                <p class="card-text">	<?php the_excerpt(); ?></p>
                <a href="<?php the_permalink() ?>">Read More</a>
              </div>
            </div>
          </div>
      <?php endwhile; else: ?>
      <p>There no posts to show</p>
      <?php endif; ?>
    </div>
  </div>
</section>


<?php get_footer() ?>