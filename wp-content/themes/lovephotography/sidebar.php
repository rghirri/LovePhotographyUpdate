           <!--***************************************************-->
        <aside class="mt-5 mt-lg-0 col-lg-4 sidebar lp30">
              <div class="sidebox widget">
                <h3 class="widget-title section-title">Popular Posts</h3>
                <ul class="post-list">
                                    <?php 
                setPostViews(get_the_ID());
                 query_posts('meta_key=post_views_count&posts_per_page=5&orderby=meta_value_num&
                      order=DESC');
                      if (have_posts()) : while (have_posts()) : the_post();
                   ?>

                  <li>
                    <div class="icon-overlay">
                      <a href="<?php the_permalink(); ?>"><span class="icn-more"></span><img src="<?php echo get_field('blog_post_image')['sizes']['blogThumb']; ?>" alt=""/> </a>
                    </div>
                    <div class="meta">
                      <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                      <em><?php the_time('n.j.y'); ?></em>
                    </div>
                  </li>
                  <?php endwhile; endif;
                   wp_reset_query();
                   ?>

                </ul>
                <!-- /.post-list -->
              </div>
              <!-- /.widget -->
            </aside>
            <!-- /.col-sm-4 .sidebar -->
          
 

