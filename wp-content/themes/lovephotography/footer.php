<?php $uploads = wp_upload_dir();  ?>
<!-- Begin Footer -->
    <footer id="footer_first" class="bg-dark pt-5">
      <h2 hidden>footer section</h2>
      <!-- This for screen readers -->
      <div class="container">
        <div class="row">
          <div class="col-md-4 d-none d-md-block">
            <div>
              <a href=""><img src="<?php echo get_template_directory_uri() .'/resources/images/logo/logo-last.svg'; ?>" alt="logo" class="img-fluid-footer" /></a>
            </div>
            <br />
          </div>
          <div class="col-12 col-sm-6 col-md-4 mt-3">
            <h6><i class="fas fa-map-marker-alt"></i> Address In America</h6>
            <small>New York Restaurant</small><br />
            <small>3926 Anmoore Road</small><br />
            <small>New York, NY 10014</small><br />
            <a class="contact" href=""><i class="fas fa-phone mr-2"></i><small>718-749-1714</small></a
            ><br />
            <a class="contact" href=""><i class="fas fa-envelope mr-2"></i><small>photography-us@lovephotography.com</small></a>
          </div>
          <div class="col-12 col-sm-6 col-md-4 mt-3">
            <h6><i class="fas fa-map-marker-alt"></i> Address In France</h6>
            <small>France Restaurant</small><br />
            <small>68, rue da le Couronne</small><br />
            <small>75002 PARIS</small><br />
            <a class="contact" href=""><i class="fas fa-phone mr-2"></i><small>02.94.23.69.56</small></a
            ><br />
            <a class="contact" href=""><i class="fas fa-envelope mr-2"></i><small>photography-fr@lovephotography.com</small></a>
          </div>
        </div>
      </div>
       <div class="container">
        <div class="row pt-5">
          <div class="col-6 offset-3 col-md-4 offset-md-8 col-lg-6 offset-lg-3 ml-auto mr-auto">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 offset-lg-3">
                  <div class="container">
                    <div class="row">
                      <div class="col-3 text-center">
                        <a class="social-media" href="#"><i class="fab fa-twitter-square"></i></a>
                      </div>
                      <div class="col-3 text-center">
                        <a class="social-media" href="#"><i class="fab fa-facebook-square"></i></a>
                      </div>
                      <div class="col-3 text-center">
                        <a class="social-media" href="#"><i class="fab fa-linkedin"></i></a>
                      </div>
                      <div class="col-3 text-center">
                        <a class="social-media" href="#"><i class="fab fa-instagram-square"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container ml-auto mr-auto">
        <div class="row pt-5">
          <div class="col-12 py-3 text-center">
            <small id="copy_text">&copy; <? echo date(Y);?> Lovephotography. All rights reserved. Theme by Rayaa Ghirri</small>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <?php wp_footer(); ?>
    </body>
</html>
