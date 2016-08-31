<!--Sidebar-->
          <div class="col-md-3 sidebar right-sidebar">

            <!-- Search Widget -->
            <div class="widget widget-search">
              <?php get_search_form(); ?>
            </div>

            <!-- Categories Widget -->
            <div class="widget widget-categories">
              <h4>Categorias <span class="head-line"></span></h4>
              <ul>
                <?php wp_list_categories('title_li=&hide_empty=0&orderby&depth=2'); ?>
              </ul>
            </div>

            <!-- Popular Posts widget -->
            <div class="widget widget-popular-posts">
              <h4>Últimos Posts<span class="head-line"></span></h4>
              <ul>
                  <?php
                  $sticky = get_option('sticky_posts');
                  rsort($sticky);
                  $sticky = array_slice($sticky, 0, 5);
                  query_posts(array('post_in' => $sticky, 'caller_get_posts' => 0) );
                  ?>
                <li>
                 <div class="widget-thumb">
                    <a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                  </div>
                  <div class="widget-content">
                    <h5><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h5>
                    <span><?php the_date('d/m/Y'); ?></span>
                  </div>
                  <div class="clearfix"></div>
                </li>
                
              </ul>
            </div>

          </div>
          <!--End sidebar-->
