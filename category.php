<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<!-- Start Page Banner -->
    <div class="page-banner" style="padding:50px 0; background: url(<?php bloginfo('template_url');?>/images/slide-01-bg.jpg) center #f9f9f9;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2><?php single_cat_title(); ?></h2>
            <p>Fique por dentro das novidades</p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="<?php bloginfo('home'); ?>">Home</a></li>
              <li><?php single_cat_title(); ?></li>   
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->
    
    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row blog-page">

          <!-- Start Blog Posts -->
          <div class="col-md-9 blog-box">

            <!-- Start Post -->
            <div class="blog-post image-post">
              <!-- Post Thumb -->
                <ul>
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <li>
                        <?php the_post_thumbnail(); ?>
                        <h1><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h1>
                        <p><?php the_excerpt_rereloaded(50, ''); ?></p>
                <a class="main-button" href="<?php the_Permalink(); ?>">Continue lendo <i class="fa fa-angle-right"></i></a>
                         <hr/>
                    </li>
                    <?php endwhile; else: ?>
                    <?php endif ?>
                </ul>
            <!-- End Post -->

           

          </div>
            </div>
          <!-- End Blog Posts -->


          
<?php get_sidebar(); ?>

        </div>
      </div>
    </div>
    <!-- End Content -->
<?php get_footer(); ?>