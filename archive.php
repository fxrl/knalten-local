<?php /* Template Name: News */ ?>

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