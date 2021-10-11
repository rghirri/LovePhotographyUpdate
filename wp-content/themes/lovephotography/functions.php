<?php 

    function photography_files() {
            //js
            wp_enqueue_script('jquery', get_template_directory_uri() .'/vendors/jquery/jquery.min.js', NULL, '1.0', true);
            wp_enqueue_script('bootstrap-js', get_template_directory_uri() .'/vendors/bootstrap/js/bootstrap.min.js', NULL, '1.0', true);
            wp_enqueue_script('Owl-Carousel-js', get_template_directory_uri() .'/vendors/OwlCarousel/owl-carousel/owl.carousel.js', NULL, '1.0', true);
            wp_enqueue_script('fotorama-js', get_template_directory_uri() .'/vendors/fotorama/fotorama.js', NULL, '1.0', true);
            wp_enqueue_script('fontawesome-js', get_template_directory_uri() .'/vendors/fontawesome/js/all.js', NULL, '1.0', true);
            wp_enqueue_script('js', get_template_directory_uri().'/scripts.js', NULL, '1.0', true);
            // // css
            wp_enqueue_style('font-awesome-css', get_template_directory_uri() .'/vendors/fontawesome/css/all.css');
            wp_enqueue_style('normalize-css', get_template_directory_uri() .'/vendors/css/normalize.css');
            wp_enqueue_style('bootstrap-css', get_template_directory_uri() .'/vendors/bootstrap/css/bootstrap.min.css');
            wp_enqueue_style('Owl-Carousel-css', get_template_directory_uri() .'/vendors/OwlCarousel/owl-carousel/owl.carousel.css');
            wp_enqueue_style('Owl-Carousel-theme-css', get_template_directory_uri() .'/vendors/OwlCarousel/owl-carousel/owl.theme.css');
            wp_enqueue_style('Owl-Carousel-transitions-css', get_template_directory_uri() .'/vendors/OwlCarousel/owl-carousel/owl.transitions.css');
            wp_enqueue_style('fotorama-css', get_template_directory_uri() .'/vendors/fotorama/fotorama.css');
            wp_enqueue_style('photography_styles', get_template_directory_uri().'/style.css');
        
    }
    add_action('wp_enqueue_scripts','photography_files');
    
//*****************************************
    function ourHeaderUrl(){
        return esc_url(site_url('/'));
    }
    add_filter('login_headerurl','ourHeaderUrl');

    //*****************************************
    
    function ourLoginCSS(){
      wp_enqueue_style('photography_styles', get_stylesheet_uri(),'style.css');  
    }
    add_action('login_enqueue_scripts','ourLoginCSS');

//*****************************************
function photography_features(){
        add_theme_support('title-tag');
        add_image_size('slideBanner', 1905, 700, true);
        add_image_size('serviceImage', 50, 50, true);
        add_image_size('specialityImage', 338, 225, true);
        add_image_size('sponsorImage', 170, 100, true);
        add_image_size('blogImage', 350, 270, true);
        add_image_size('blogThumb', 75, 75, true);
        add_image_size('blogSingle', 725, 400, true);
        add_image_size('aboutImage', 350, 250, true);
    }
    add_action('after_setup_theme', 'photography_features');

// Pagination
function pagainate_link_function(){
    global $wp_query;
    $pages = paginate_links(array(
        'current'=>max(1,get_query_var('paged')),
        'total'=>$wp_query->max_num_pages,
        'prev_text' => '&laquo;',
        'next_text' => '&raquo;',
        'type'=>'array', //default it will return anchor
    ));
    
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');

        foreach ( $pages as $page ) {
            
                echo "<li>$page</li>";
        }

        }
    
}

// Number of views
function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}
  