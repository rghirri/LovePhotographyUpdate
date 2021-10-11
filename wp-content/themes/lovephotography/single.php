<?php get_header(); ?>
    <!--*****************************-->
        
<section id="blog-list">
      <div class="light-wrapper">
        <div class="container inner">
          <div class="row">
            <div class="col-lg-8 content">
              <div class="blog-posts grid-blog">
                <?php while(have_posts()) { the_post(); ?>    
          
                  <figure class="main icon-overlay">
                    <a href="<?php the_permalink(); ?>"><span class="icn-more"><img src="<?php echo get_field('blog_post_image')['sizes']['blogSingle']; ?>" alt="" /></a>
                  </figure>
                  
                          <div class="post-content">
                            <h3 class="post-title"><?php the_title(); ?></h3>
                            <div class="meta">
                              <span class="date"><?php the_time('n.j.y'); ?></span></span><span class="comments">By <a href="<?php the_permalink(); ?>"><?php the_author_posts_link(); ?></a></span>
                            </div>
                    
                            <p class="lead"><?php the_content(); ?></p>
                  </div>
               <?php } ?>
                <hr />
              </div>
              </div>
              <!-- /.blog-posts -->

              
            
        <?php get_sidebar(); ?>
        
        </div>
          <!-- /.row -->
        </div>
      </div>
    </section>
        
<?php get_footer(); ?>