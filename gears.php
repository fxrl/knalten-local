<?php /* Template Name: Gears */  ?>
<?php get_header() ?>

<!-- hero-section -->
<div class="container-fluid hero">
	<div class="row">
		<div class="col-12">
			<img src='https://via.placeholder.com/1000x700'>
		</div>
	</div>
</div>

<!-- gears general info section -->
<div class="container welcome">
	<div class="row">
		<div class="col-md-6">
			<h1> Våra Redskap</h1>
			<h2> BREDGREP</h2>
			<h3> Att ta vara på de traditionella metoderna
			</h3>
			<div class="container-fluid hero">
				<div class="row">
					<div class="col-12">
						<img src='https://via.placeholder.com/1000x700'>
					</div>

				</div>

			</div>
			<button class='btn btn-primary'>Beställa</button>

		</div>
	</div>

</div>


<!-- Gears general info part two section -->
<div class="container welcome">
	<div class="row">
		<div class="col-md-6">


			<p>På Knalten användar vi ett gammalt Franskt redskap som heter Grelinette eller Bredgrep på Svenska. När vi kom från Frankrike
				tog vi med oss en grelinette när vi packade väskan till Sverige. Fördelen med en bredgrep är att man inte behöver vända
				jorden när man förbereder såbädden. Det gör det möjligt att lufta och luckra upp jorden utan att förstöra ekosystemet.
				Här på Knalten använder vi verktyget varje dag under säsong!
			</p>
			<p>Med en bredgrep kan man arbeta marken utan att böja ryggen och benen. Det är jättebra! Utöver att lufta och luckra upp
				jorden kan man göra många andra moment med detta redskap för att spara leder, muskler och senor. Vi använder bredgrepen
				inte bara till att rensa ogräs och skörda potatis och morötter utan också till att ventilera jorden och skapa en bättre
				vattenströmning.
			</p>

		</div>
	</div>

</div>

<!-- gear carts  section -->
<section class='latest-news-wrapper'>
	<div class="container latest-news">
		<div class="row">
			<div class="col-12">
				<h2>Vi erbjuder 4 olika storlekar</h2>
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

<!-- Gears general info part three section -->
<div class="container welcome">
	<div class="row">
		<div class="col-md-6">
			<p>Bredgrep finns att köpa i Knaltens gårdsbutik eller på webbplatsen (se nedan). Du kan antingen hämta din bredgrep direkt
				från Knalten, eller om du föredrar få den skickad med DHL.</p>
			<h4>Frakten kostar 200 kronor i Sverige.</h4>
		</div>
	</div>

</div>

<!--Gears list of marketing quotes -->
<div class="container welcome">
	<div class="row">
		<div class="col-md-6">
			<ul class="list-group">
				<li class="list-group-item">Vår Bredgrep är tillverkat i Lyon, Frankrike av Fourches à Bêcher Ducoterre</li>
				<li class="list-group-item">Varje verktyg kommer med 5 års garanti.</li>
				<li class="list-group-item">Priserna varierar från 1250 kronor utan frakt till 1990 kronor.
				</li>
				<li class="list-group-item">Arbetsdjupet är 25 cm</li>
				<li class="list-group-item">Handtagen mäter ca 110 cm och är tillverkad av hårda träslag som ask.
				</li>
				<li class="list-group-item">Avståndet mellan tänderna är cirka 11 cm
				</li>
				<li class="list-group-item">Rätt använd så utvecklar en bredgrep cirka 130 kg kraft i slutet av tänderna.
				</li>


			</ul>
		</div>
	</div>

</div>

<!-- gears press info section -->
<div class="container welcome">
	<div class="row">
		<div class="col-md-6">

			<h2> Press</h2>
			<div class="container-fluid hero">
				<div class="row">
					<div class="col-12">
						<img src='https://via.placeholder.com/300' alt='cert'>
					</div>

				</div>

			</div>

		</div>
	</div>

</div>

<!-- contact from for ordering gears -->
<div class="container welcome">
	<div class="row">
		<div class="col-md-6">

			<h2> Beställa din bredgrep</h2>
			<div class="container-fluid hero">
				<div class="row">
					<div class="col-12">
						<form>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="fullname">Namn</label>
									<input type="name" class="form-control" id="fullname" placeholder="Namn">
								</div>
								<div class="form-group col-md-6">

									<label for="inputEmail4">E-post</label>
									<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
								</div>

							</div>
							<div class="form-group">
								<label for="inputAddress">Address</label>
								<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
							</div>

							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputCity">City</label>
									<input type="text" class="form-control" id="inputCity">
								</div>
								<div class="form-group col-md-4">
									<label for="bredgrepType">Choose Bredgrep Type</label>
									<select id="bredgrepType" class="form-control">
										<option selected>Bredgrep type one</option>
										<option>Bredgrep type Two</option>
										<option>Bredgrep type Three</option>
									</select>
								</div>
								<div class="form-group col-md-2">
									<label for="inputZip">Zip</label>
									<input type="text" class="form-control" id="inputZip">
								</div>
							</div>
							<div class="form-group">
								<div class="form-group">
									<label for="exampleFormControlTextarea1">Example textarea</label>
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
								</div>
							</div>
							<button type="submit" class="btn btn-primary">Beställ</button>
						</form>
					</div>

				</div>

			</div>

		</div>
	</div>

</div>

<!-- footer -->

<?php get_footer(); 