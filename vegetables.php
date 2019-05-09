<?php /* Template Name: Vegetables */  ?>

<?php get_header() ?>

<!-- hero-section -->
<div class="container-fluid hero">
	<div class="row">
		<div class="col-12">
			<img src='https://via.placeholder.com/1000x700'>
		</div>
	</div>
</div>

<!-- vegetables general info section -->
<div class="container welcome">
	<div class="row">
		<div class="col-md-6">
			<h1> GRÖNSAKER</h1>
			<h3> Från trädgården till tallriken! Vi skördar på morgonen, ni har dem på tallriken på kvällen!</h3>
			<p>I våra 14 tegar odlar vi ett sortiment av ca 40 olika ekologiska grönsaker. Våra hästar är ett stort stöd i förberedelsearbetet,
				men vi gör det mesta av arbetet manuellt. För att underlätta detta arbete använder vi ett magiskt redskap: Bredgrepen.
				<p>
					<button class='btn btn-primary'>Försäljningställen</button>
		</div>
	</div>
	<div class="row welcome__certificates">
		<div class="col-xs-6">
			<img src='https://via.placeholder.com/50' alt='cert'>
		</div>
		<div class="col-xs-6">
			<img src='https://via.placeholder.com/50' alt='cert'>
		</div>
	</div>
</div>

<!-- monthly vegetable section -->
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
						<p class="card-text">
							<?php the_content(); ?>
						</p>
						<a href="<?php the_permalink() ?>">Read More</a>
						<p class="card-text">
							<small class="text-muted">Last updated 3 mins ago</small>
						</p>
					</div>
				</div>
			</div>
			<?php endwhile; else: ?>
			<p>There no posts to show</p>
			<?php endif; ?>
		</div>
	</div>
</section>

<!-- vegetables general info part two section -->
<div class="container welcome">
	<div class="row">
		<div class="col-md-6">

			<h3> Vårt motto är närodlat, nyskördat och smakrikt!</h3>
			<p>Grönsaksodlingarna är både ekologiska- och KRAV-certifierade (HS Certifiering AB, SE-EKO-04) och omfattar ca en halv hektar
				mark.
			</p>
			<p>Under säsongen har du möjlighet att njuta av våra nyskördade, näringsrika och mycket smakfulla grönsaker varje vecka.
			</p>
			<p>Precis som i Frankrike där grönsakshandlaren alltid gav Sonias mormor det bästa han hade för dagen, kan ni alltid lita
				på att vi på Knalten ger er det bästa vi har för dagen och säsong.
			</p>

		</div>
	</div>

</div>

<!-- footer -->

<?php get_footer(); 