<?php /* Template Name: Contact */ ?>

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
<div class="container contact">
  <div class="row">
    <div class="col-12">
      <h1>Kontakt</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
        <div class="contact__info">
            <h3>Knaltens Ekologiska Grönsaker</h3>
            <ul>
                <li>Sonia och Pierre</li>
                <li>Knalten Salunda 109</li>
                <li>523 99 Hökerum</li>
                <li>0703-027303</li>
            </ul>
        </div>
    </div>
  </div>

</div>

<!-- faq section -->
<section class='latest-news-wrapper'>
  <div class="container latest-news">
    <div class="row">
        <div class="col-12">
          <h2>Vanliga Frågor</h2>

          <!-- accordion -->
          <div class="accordion" id="accordionExample">
          <!-- the loop -->
          <?php 
            $args = array( 
              'post_type' => 'question'
            );
          $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="card">
              <div class="card-header" id="heading<?php the_id(); ?>">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php the_id(); ?>" aria-expanded="true" aria-controls="collapse<?php the_id(); ?>">
                    <?php the_title(); ?>
                  </button>
                </h2>
              </div>

              <div id="collapse<?php the_id(); ?>" class="collapse show" aria-labelledby=""heading<?php the_id(); ?>" data-parent="#accordionExample">
                <div class="card-body">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
      <?php endwhile; else: ?>
      <p>There no posts to show</p>
      <?php endif; ?>
          </div>
        </div>
    </div>
  </div>
</section>

<!-- contact form -->
<div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Vill Veta Mer</h2>
        <h3>Skicka oss et e-mail</h3>
      </div>
    </div>
    <div class="row">
            <div class="col">
              <?php echo do_shortcode( '[contact-form-7 id="39" title="Contact form 1"]' ); ?>
            </div>
    </div>
</div>


<!-- footer -->

<?php get_footer() ?>