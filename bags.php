<?php /* Template Name: VegetableBags */  ?>
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
			<h1> Grönsakkskasse</h1>
			<p>Vi säljer våra grönsaker hemma hos oss på gårdsbutiken som är öppen varje vecka, på marknaden i Ulricehamn varje lördag,
				samt hos Reko-Ring där ni kommer att kunna köpa våra fantastiska grönsakskassar. Precis som i Frankrike där grönsakshandlaren
				alltid gav Sonias mormor det bästa han hade för dagen, kan ni alltid lita på att vi på Knalten ger er det bästa vi har
				för dagen och säsong.
				<p>
					<p>Du har möjlighet att hämta kassen via reko ring Borås eller Ulricehamn varje torsdag kl 18 men det går även att hämta
						den hos oss på Knalten efter överenskommelse.</p>

		</div>
	</div>
</div>

<!-- monthly vegetable bag section -->
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

<!-- vegetable bags general info part two section -->
<div class="container welcome">
	<div class="row">
		<div class="col-md-6">
			<p>Om ni vill prenumerera på en grönsakasse under en period är det självklart också möjligt, allt ni behöver göra är att
				skicka oss en förfrågan.
			</p>

		</div>
	</div>

</div>
<!-- vegetable bags general info part two section -->
<div class="container welcome">
	<div class="row">
		<div class="col-md-6">
			<h2>Skicka en förfråga om grönsakasse
			</h2>
			<?php echo do_shortcode('[contact-form-7 id="45" title="soniasform"]'); ?>

		</div>
	</div>

</div>

<!-- footer -->

<?php get_footer(); 