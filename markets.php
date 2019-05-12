<?php /* Template Name: Markets */ ?>

<?php get_header() ?>

<!-- hero-section -->
<div class='container-fluid hero' style='background-image:url("<?php bloginfo('url');?>/wp-content/uploads/2019/05/marketThree.jpg"); background-size: cover; background-position:center;'>
</div>

<!-- welcome section -->
<div class="container markets">
  <div class="row">
    <div class="col-12 markets__title">
      <h1>Förssäljningställen</h1>
      <h2>This is where you find us</h2>
    </div>
  </div>
</div>

<!-- faq section -->
<div class="container markets">
    <div class="row">
        <?php 
        $args = array( 
            'post_type' => 'market'
            );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="col-md-6">
            <div class="card">
              <img class="card-img-top" src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id( get_the_id() ), 'single-post-thumbnail' ); ?>" alt="Card image cap">
              <div class="card-body markets__card-body">
                <h5 class="card-title">		
                    <?php the_title(); ?>
                </h5>
                <p class="card-text">	<?php the_content(); ?></p>
                <a href="<?php echo get_post_meta($post->ID, 'external_url', true); ?>" target='_blank'>See More</a>
              </div>
            </div>
          </div>
      <?php endwhile; else: ?>
      <p>There no posts to show</p>
      <?php endif; ?>

    </div>
</div>

<!-- footer -->

<?php get_footer() ?>