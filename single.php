// single.php 

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
?>

<!-- hero-section -->
<div class="container-fluid hero"> 
    <div class="row">
        <div class="col-12">
            <img src='https://via.placeholder.com/1000x700'>
        </div>
    </div>
</div>

<!-- Post content -->
<div class='container news_content'>
    <!-- date of the post -->
    <div class="col-12">
        <span class="badge badge-success">
            <?php the_date(); ?>
        </span>
    </div>
    <div class='row'>
        <div class='col-12'>
            <?php
                the_title('<h1>','</h1>');
                the_content();
            ?>
        </div>
    </div>
</div>

<!-- footer -->
<?php get_footer() ?>