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
<div class="container introProducts">
	<div class="row">
		<div class="col-sm">
			<h1> GRÖNSAKER</h1>
			<h2> Från trädgården till tallriken!</h2>
			<h2> Vi skördar på morgonen, ni har dem på tallriken på kvällen!</h2>
			<div class="mobileText">
				<p>I våra 14 tegar odlar vi ett sortiment av ca 40 olika ekologiska grönsaker. Våra hästar är ett stort stöd i förberedelsearbetet,
					men vi gör det mesta av arbetet manuellt. För att underlätta detta arbete använder vi ett magiskt redskap: Bredgrepen.
				</p>
				<button class='btn btn-primary'>Försäljningställen</button>

			</div>
		</div>
		<div class="desktopText">
			<div class="row">
				<div class="col-md-6">
					<p>I våra 14 tegar odlar vi ett sortiment av ca 40 olika ekologiska grönsaker. Våra hästar är ett stort stöd i förberedelsearbetet,
						men vi gör det mesta av arbetet manuellt. För att underlätta detta arbete använder vi ett magiskt redskap: Bredgrepen.
					</p>
					<button class='btn btn-primary'>Försäljningställen</button>
					<h3> Vårt motto är närodlat, nyskördat och smakrikt!</h3>
					<p>Grönsaksodlingarna är både ekologiska- och KRAV-certifierade (HS Certifiering AB, SE-EKO-04) och omfattar ca en halv
						hektar mark.
					</p>


				</div>
				<div class="col-md-6">
					<p>Under säsongen har du möjlighet att njuta av våra nyskördade, näringsrika och mycket smakfulla grönsaker varje vecka.
					</p>
					<p>Precis som i Frankrike där grönsakshandlaren alltid gav Sonias mormor det bästa han hade för dagen, kan ni alltid lita
						på att vi på Knalten ger er det bästa vi har för dagen och säsong.
					</p>
					<div class="row deskCertificate ">
						<div class="col-xs-6">
							<img src='https://via.placeholder.com/50' alt='cert'>
						</div>
						<div class="col-xs-6">
							<img src='https://via.placeholder.com/50' alt='cert'>
						</div>
					</div>
				</div>


			</div>


		</div>
	</div>
</div>
<div class="row welcome__certificates mobileCertificate">
	<div class="col-xs-6">
		<img src='https://via.placeholder.com/50' alt='cert'>
	</div>
	<div class="col-xs-6">
		<img src='https://via.placeholder.com/50' alt='cert'>
	</div>
</div>
</div>

<!-- monthly vegetable section -->

<section class='monthly-vegetable-wrapper'>
	<div class="container monthly-vegetable">
		<div class="row">
			<div class="col-sm-12 ">
				<h2>Monthly Vegetables</h2>
			</div>

			<!-- the loop -->

			<?php 
            $args = array( 
              'post_type' => 'Monthly-Vegetable'
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

						<div id="collapse<?php the_id(); ?>" class="collapse show" aria-labelledby=""
						 heading<?php the_id(); ?>" data-parent="#accordionExample">

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

<!-- vegetables general info part two section -->
<div class="container introProducts">
	<div class="row">
		<div class="col-md">
			<div class="mobileText">
				<h3> Vårt motto är närodlat, nyskördat och smakrikt!</h3>
				<p>Grönsaksodlingarna är både ekologiska- och KRAV-certifierade (HS Certifiering AB, SE-EKO-04) och omfattar ca en halv
					hektar mark.
				</p>
				<p>Under säsongen har du möjlighet att njuta av våra nyskördade, näringsrika och mycket smakfulla grönsaker varje vecka.
				</p>
				<p>Precis som i Frankrike där grönsakshandlaren alltid gav Sonias mormor det bästa han hade för dagen, kan ni alltid lita
					på att vi på Knalten ger er det bästa vi har för dagen och säsong.
				</p>
			</div>
		</div>
	</div>

</div>

<!-- footer -->

<?php get_footer(); 