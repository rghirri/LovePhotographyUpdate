<?php //$uploads = wp_upload_dir();  ?>
<?php //echo esc_url( $uploads['baseurl'] . '/2021/04/photologo.png') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body>
  <!-- Begin Header-Nav -->
  <header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container">
        <a href="#" class="navbar-brand">
          <img src="<?php echo get_template_directory_uri() .'/resources/images/logo/logo-last.svg'; ?>" alt="logo"
            class="img-fluid" />
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item pr-5" <?php if (is_page(5)) echo 'id="current-menu-item"'; ?>>
              <a href="<?php echo site_url() ?>" class="nav-link">home</a>
            </li>
            <li class="nav-item pr-5" <?php if (get_post_type() == 'post') echo 'id="current-menu-item"'; ?>>
              <a href="<?php echo site_url('/blog') ?>" class="nav-link">blog</a>
            </li>
            <li class="nav-item pr-5" <?php if (is_page(258)) echo 'id="current-menu-item"' ?>>
              <a href="<?php echo site_url('/about-us') ?>" class="nav-link">About Us</a>
            </li>
            <li class="nav-item pr-5">
              <a href="#newsletter" class="nav-link">Contact me</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- End Header-Nav -->