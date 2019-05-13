<?php get_header() ?>

<!-- welcome section -->
<section id='start' style='background-image:url("<?php bloginfo( 'url' );?>/wp-content/uploads/2019/05/start.jpg"); background-size: cover;'>
  <div class="container welcome">
    <div class="row">
      <div class="col-12">
        <h1>Knalten</h1>
        <h2>Ekologiska Grönsaker</h2>
      </div>
    </div>
    </div>
    <div class="row welcome__certificates">
      <div class="col">
          <i class="fas fa-angle-down"></i>
      </div>
    </div>
  </div>
</section>

<div class="container">
<div class="row intro__text">
  <div class="col">
    <h2>Välkommen till vår trädgård!</h2>
    <p>På Knalten odlar vi ett 40-tal olika grönsaker för den lokala marknaden och reko-ringen i Ulricehamn och Borås. Dessutom är vi direktleverantör till ett antal lokal restauranger. Vi erbjuder ekologiska närodlade, nyskördade, smakrika grönsaker. Vi brinner för ekologisk odling och lokal mat producerad med omsorg om människor och miljö.
        På gården har vi delat upp vår trädgård i 14 olika tegar sorterat efter familj. Vi gör det mesta av arbetet manuellt. För att underlätta detta arbete använder vi ett magiskt redskap: <a id='bredgrep__link' href='<?php bloginfo('url')?>/gears'>Bredgrepen.</a> </p>
    <a href='<?php bloginfo( 'url' ); ?>/forsaljningstallen' class='btn btn-primary'>Hitta Hit</a>
  </div>
</div>
</div>

<!-- latest news section -->
<section class='latest-news-wrapper'>
  <div class="container latest-news">
    <div class="row">
        <div class="col-12">
          <h2>senaste nyheterna</h2>
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
            <?php echo get_the_post_thumbnail( get_the_id(), 'thumbnail', array( 'class' => 'card-img-top' )); ?>

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