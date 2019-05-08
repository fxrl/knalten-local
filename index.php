<?php get_header() ?>

<!-- hero-section -->
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <img src='https://via.placeholder.com/1000x700'>
      </div>
    </div>
</div>

<!-- welcome section -->
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h1>Knalten</h1>
	    <p>I våra 14 tegar odlar vi ett sortiment av ca 40 olika ekologiska grönsaker. Våra hästar är ett stort stöd i förberedelsearbetet,
		    men vi gör det mesta av arbetet manuellt. För att underlätta detta arbete använder vi ett magiskt redskap: Bredgrepen.
		  <p>
      <button class='btn btn-primary'>Hitta Hit</button>

    </div>
  </div>

</div>

<!-- latest news section -->
<div class="container">
<div class="row">
    <div class="col"> 
      <?php if ( have_posts() ) : while ( have_posts() ) :   the_post(); ?>
        <div class="card mb-3">
          <img class="card-img-top" src="https://via.placeholder.com/100" alt="Card image cap">
          <div class="card-body">
          <h5 class="card-title">		
            <a href="<?php the_permalink() ?>">
			        <?php the_title(); ?>
            </a>
          </h5>
          <p class="card-text">	<?php the_content(); ?></p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
	<?php endwhile; else: ?>
	<p>There no posts to show</p>
	<?php endif; ?>
</div>

    </div>
  </div>

</div>



<!-- footer -->

<?php get_footer() ?>
