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
<section class='monthly-vegetable-wrapper'>
	<div class="container monthly-vegetable">
		<div class="row">
			<div class="col-12">
				<h2>Monthly Vegetables</h2>
			</div>
			<div class="col-12">
				<!-- accordion -->
				<div class="accordion" id="accordionExample">
					<!-- the loop -->
					<?php 
            $args = array( 
              'post_type' => 'Vegetable-Bag'
            );
          $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="card">
						<div class="veggie" id="heading<?php the_id(); ?>">
							<button class="btn btn-link veggieButton" type="button" data-toggle="collapse" data-target="#collapse<?php the_id(); ?>"
							 aria-expanded="true" aria-controls="collapse<?php the_id(); ?>">
								<?php the_title(); ?>
							</button>
						</div>

						<div id="collapse<?php the_id(); ?>" class="collapse show" aria-labelledby=""
						 heading<?php the_id(); ?>" data-parent="#accordionExample">

							<?php the_content(); ?>

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
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h2>Skicka en förfråga om grönsakasse
			</h2>
			<?php echo do_shortcode('[contact-form-7 id="58" title="Grönskasse Förfråga"]'); ?>

		</div>
	</div>

</div>

<!-- footer -->

<?php get_footer(); 