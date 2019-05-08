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
    <div class="col-md-6">
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

<!-- latest news section -->
<section class='latest-news-wrapper'>
  <div class="container latest-news">
    <div class="row">
        <div class="col-12">
          <h2>Latest News</h2>
        </div>
          <!-- the loop -->
          <?php if ( have_posts() ) : while ( have_posts() ) :   the_post(); ?>
          <div class="col-md-4">
            <div class="card">
              <img class="card-img-top" src="https://via.placeholder.com/100" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">		
                    <?php the_title(); ?>
                </h5>
                <p class="card-text">	<?php the_content(); ?></p>
                <a href="<?php the_permalink() ?>">Read More</a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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