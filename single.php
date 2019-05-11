<?php
/*
 * Template Name: Single Post
 * Template Post Type: post
 */ 
 get_header();  ?>

<?php
    if(have_posts()){
        while(have_posts()){
            the_post();
        }
    }

    $slides = $dynamic_featured_image->get_featured_images([get_the_id()]);
?>
<div class="container">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
        <?php 
            foreach ($slides as $slide) {
                $image = $slide['full'];
                echo "
                <div class='carousel-item'>
                    <img class='d-block w-100' src='$image' alt='First slide'>              
                </div>
                ";
            }
        ?>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>


  </div>
</div>

</div>


<!-- Post content -->
<div class='container news_content'>
    <div class='row'>
        <div class='col-12'>
            <?php
                the_title('<h1>','</h1>');
                the_content();
            ?>
            <span class="badge badge-success">
                <?php the_date(); ?>
            </span>
            <span class="badge badge-success">
                Author:
                <?php  the_author(); ?>
            </span>
        </div>
    </div>
</div>

<!-- footer -->
<?php get_footer() ?>