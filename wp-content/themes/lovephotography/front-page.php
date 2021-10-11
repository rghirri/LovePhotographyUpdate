<?php get_header(); ?>

<div class="fotorama" data-shuffle="true" data-keyboard="true" data-autoplay="true" data-loop="true" data-nav="thumbs"
  data-allowfullscreen="native" data-thumbwidth="90" data-thumbheight="50" data-transition="slide"
  data-clicktransition="crossfade">
  <?php 
          
          $bannerSlides = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'slide',
            'order' => 'ASC'
          ));

          while( $bannerSlides->have_posts()) {
             $bannerSlides->the_post();?>

  <a data-caption="<?php echo get_field('banner_slider_image_caption'); ?>" data-full="1_full.jpg" href="#">
    <img src="<?php echo get_field('banner_slider_image')['sizes']['slideBanner']; ?>" /></a>

  <?php } wp_reset_postdata();?>
</div>

<!-- Start Our Services section -->
<section id="our_services" class="mt-5">
  <h1 hidden>Our Services</h1>
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h1><?php echo get_field('services_main_title'); ?></h1>
      </div>
      <div class="col-lg-8 offset-lg-2">
        <p class="lead"><?php echo get_field('services_main_paragraph'); ?></p>
      </div>
    </div>
  </div>

  <div class="container my-5">
    <div class="row text-center">
      <?php 
          
          $serviceData = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'service',
            'order' => 'ASC'
          ));

          while( $serviceData->have_posts()) {
             $serviceData->the_post();?>

      <div class="mt-3 col-lg-4">
        <img src="<?php echo get_field('service_image')['sizes']['serviceImage']; ?>" alt="">
        <h3><?php echo get_field('service_title'); ?></h3>
        <p class="lead"><?php echo get_field('service_paragraph'); ?></p>
      </div>

      <?php } wp_reset_postdata();?>
    </div>
  </div>
</section>
<!-- End Our Services Section -->
<!--Start Our sepciality Section-->
<section id="our_speciality">
  <h1 hidden>Our Speciality</h1>
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h1><?php echo get_field('speciality_title'); ?></h1>
      </div>
      <div class="col-lg-8 offset-lg-2">
        <p class="lead"><?php echo get_field('speciality_paragraph'); ?></p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <?php   $specialityData = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'speciality',
            'order' => 'ASC'
          ));

          while( $specialityData->have_posts()) {
             $specialityData->the_post();?>

      <div class="mt-3 col-lg-4">
        <div class="card">
          <img class="card-img-top" src="<?php echo get_field('specialty_image')['sizes']['specialityImage']; ?>"
            alt="Card image cap" />
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <h5 class="card-title text-center"><?php echo get_field('specialty_title'); ?></h5>
            <p class="card-text text-center"><?php echo get_field('specialty_paragraph'); ?></p>
          </div>
        </div>
      </div>
      <?php } wp_reset_postdata();?>

    </div>
  </div>


</section>

<!-- End Our Speciality   -->

<!--Start Review-->
<section id="reviews">
  <div class="container">
    <div class="row text-center">
      <div class="col-12 mb-3">
        <h1>Customer Reviews</h1>
      </div>
    </div>
  </div>

  <div class="parallax parallax1">
    <div class="inner text-center">
      <div id="owl-demo-review" class="owl-carousel owl-theme">
        <?php   $reviewData = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'review',
            'order' => 'ASC'
          ));

          while($reviewData->have_posts()) {
             $reviewData->the_post();?>

        <div class="container">
          <div class="row">
            <div class="col-lg-8 offset-lg-2">
              <blockquote>
                <p><?php echo get_field('the_review'); ?></p>
                <small><?php echo get_field('review_author'); ?></small>
              </blockquote>
            </div>
          </div>
        </div>
        <?php } wp_reset_postdata();?>
      </div>
    </div>
  </div>
</section>
<!--End Review-->

<!--Start Our Sponsors-->
<!-- Start Sponsors Slider owl slider-->
<section id="our-sponsors">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h1>Our Sponsors</h1>
      </div>
    </div>

    <div id="owl-demo-sponsors" class="owl-carousel owl-theme">
      <?php   $sponsorData = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'sponsor',
            'order' => 'ASC'
          ));

          while($sponsorData->have_posts()) {
             $sponsorData->the_post();?>
      <div class="item"><img src="<?php echo get_field('sponsors_image')['sizes']['sponsorImage']; ?>"
          alt="Card image cap" /></div>
      <?php } wp_reset_postdata();?>
    </div>
  </div>
</section>
<!-- End Sponsors Slider -->

<!--End Our Sponsors-->





<?php get_footer(); ?>