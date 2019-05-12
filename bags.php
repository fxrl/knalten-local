<?php /* Template Name: VegetableBags */  ?>
<?php get_header() ?>

<!-- hero-section -->
<div class='container-fluid hero' style='background-image:url("<?php bloginfo('url');?>/wp-content/uploads/2019/05/unnamed-file.jpeg"); background-size: cover; background-position:top;'>

</div>

<!-- vegetables general info section -->
<div class="container introProducts">
	<div class="row">
		<div class="col-sm">
			<h1> Grönsakkskasse</h1>
			<div class="mobileText">
				<p>Vi säljer våra grönsaker hemma hos oss på gårdsbutiken som är öppen varje vecka, på marknaden i Ulricehamn varje lördag,
					samt hos Reko-Ring där ni kommer att kunna köpa våra fantastiska grönsakskassar. Precis som i Frankrike där grönsakshandlaren
					alltid gav Sonias mormor det bästa han hade för dagen, kan ni alltid lita på att vi på Knalten ger er det bästa vi har
					för dagen och säsong.
					<p>
						<p>Du har möjlighet att hämta kassen via reko ring Borås eller Ulricehamn varje torsdag kl 18 men det går även att hämta
							den hos oss på Knalten efter överenskommelse.</p>
			</div>
		</div>
		<div class="desktopText">
			<div class="row">
				<div class="col-md-6">
					<p>Vi säljer våra grönsaker hemma hos oss på gårdsbutiken som är öppen varje vecka, på marknaden i Ulricehamn varje lördag,
						samt hos Reko-Ring där ni kommer att kunna köpa våra fantastiska grönsakskassar. Precis som i Frankrike där grönsakshandlaren
						alltid gav Sonias mormor det bästa han hade för dagen,</p>
				</div>
				<div class="col-md-6">
					<p>kan ni alltid lita på att vi på Knalten ger er det bästa vi har för dagen och säsong. Du har möjlighet att hämta kassen
						via reko ring Borås eller Ulricehamn varje torsdag kl 18 men det går även att hämta den hos oss på Knalten efter överenskommelse.</p>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- monthly vegetable bag section -->
<section class='monthly-vegetable-wrapper'>
	<div class="container monthly-vegetable">
		<div class="row">
			<div class="col-sm-12 ">
				<h2>Monthly Vegetables</h2>
			</div>

			<!-- the loop -->

			<?php 
            $args = array( 
              'post_type' => 'Vegetable-bag'
            );
          $the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<!-- accordion -->
			<div class="col-sm-12 col-md-6">
				<div class="accordion" id="accordionExample">
					<div class="card veggieCard">
						<div class="veggieCardHeader" id="heading<?php the_id(); ?>">
							<button class="btn btn-link veggieButton" type="button" data-toggle="collapse" data-target="#collapse<?php the_id(); ?>"
							 aria-expanded="true" aria-controls="collapse<?php the_id(); ?>">
								<?php the_title(); ?>
							</button>
						</div>

						<div id="collapse<?php the_id(); ?>" class="collapse show" aria-labelledby=" heading
						 <?php the_id(); ?>" data-parent="#accordionExample">

							<?php the_content(); ?>

						</div>
					</div>
				</div>

			</div>
			<?php endwhile; else: ?>
			<p>There no posts to show</p>
			<?php endif; ?>


		</div>
</section>


<!-- Contact form for ordering Vegetable Bag-->
<div class="container bagOrder">
	<div class="row">
		<div class="col-md-6 text">
			<h2>Skicka en förfråga om grönsakasse
			</h2>

			<p class="p-3">Om ni vill prenumerera på en grönsakasse under en period är det självklart också möjligt, allt ni behöver göra är att
				skicka oss en förfrågan.
			</p>
		</div>
		<div class="col-md-6 bagOrderForm">
			<?php echo do_shortcode('[contact-form-7 id="58" title="Grönskasse Förfråga"]'); ?>
		</div>

	</div>
</div>

<!-- footer -->

<?php get_footer(); 