<?php get_header(); ?>

    <!-- Begin about us -->
    <section id="about-us">
      <div class="container mt-5">
        <div class="row">
          <div class="ml-auto mr-auto">
            <h2 class="text-center"><?php echo get_field('about_main_title_first'); ?></h2>
            <p class="lead text-center"><?php echo get_field('about_subtitle'); ?></p>
          </div>
        </div>
        <div class="row mt-3">
          <div class="d-none d-lg-block col-lg-4">
            <figure>
              <img src="<?php echo get_field('about_image')['sizes']['aboutImage']; ?>" alt="" />
            </figure>
          </div>
          <div class="col-lg-8">
            <h5 ><?php echo get_field('about_main_title_second'); ?></h5>
            <p class="lead"><?php echo get_field('about_main_second_paragraph'); ?></p>
          </div>
        </div>
        <hr />
        <div class="row mt-3">
          <div class="col-lg-6 about-tab">
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><?php echo get_field('aboutus_first_tab_title'); ?></a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><?php echo get_field('aboutus_second_tab_title'); ?></a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><?php echo get_field('aboutus_third_tab_title'); ?></a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-fourth" role="tab" aria-controls="nav-fourth" aria-selected="false"><?php echo get_field('aboutus_fourth_tab_title'); ?></a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><?php echo get_field('aboutus_first_tab_paragraph'); ?></div>
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><?php echo get_field('aboutus_second_tab_paragraph'); ?></div>
              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"><?php echo get_field('aboutus_third_tab_paragraph'); ?></div>
              <div class="tab-pane fade" id="nav-fourth" role="tabpanel" aria-labelledby="nav-fourth-tab"><?php echo get_field('aboutus_fourth_tab_paragraph'); ?></div>
            </div>
          </div>
          <div class="col-lg-6 about-video mt-3">
            <figure class="player">
              <iframe src="<?php echo get_field('about_video_link'); ?>" width="550" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowfullscreen></iframe>
            </figure>
          </div>
        </div>
      </div>
    </section>
    <!-- End about us -->


<?php get_footer(); ?>