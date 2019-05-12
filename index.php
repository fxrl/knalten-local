<?php get_header() ?>

<!-- welcome section -->
<section id='start' style='background-image:url("<?php bloginfo( 'url' );?>/wp-content/uploads/2019/05/start.jpg"); background-size: cover;'>
  <div class="container welcome">
    <div class="row">
      <div class="col-12">
        <h1>Knalten</h1>
        <p>I våra 14 tegar odlar vi ett sortiment av ca 40 olika ekologiska grönsaker. Våra hästar är ett stort stöd i förberedelsearbetet,
          men vi gör det mesta av arbetet manuellt. För att underlätta detta arbete använder vi ett magiskt redskap: Bredgrepen.
        <p>
        <a href='<?php bloginfo( 'url' ); ?>/forsaljningstallen' class='btn btn-primary'>Hitta Hit</a>
      </div>
    </div>
    <div class="row welcome__certificates">
      <div style="font-size: 3rem; color: white;" class="col">
          <i class="fas fa-angle-down"></i>
      </div>
    </div>
  </div>
</section>

<!-- latest news section -->
<section class='latest-news-wrapper'>
  <div class="container latest-news">
    <div class="row">
        <div class="col-12">
          <h2>Nyheter</h2>
        </div>
          <!-- the loop -->
          <?php 
            $args = array( 
              'post_type' => 'post',
              'posts_per_page' => 3,
            );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="col-md-4">
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




<!-- footer -->

<?php get_footer() ?>