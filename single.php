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
            <h2><?php the_title(); ?></h2>
            <p>Fique por dentro das novidades</p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="<?php bloginfo('home'); ?>">Home</a></li>
              <li><a href="http://pluscityagencia.com.br/blog/">Blog</a></li>
              <li><?php the_title(); ?></li>    
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
                  <?php the_post_thumbnail(); ?>
                
              <!-- Post Content -->
              <div class="post-content">
                <div class="post-date"><span class="day"><?php the_date('d'); ?></span></div>
                <h1><?php the_title(); ?></h1>
                <ul class="post-meta">
                  <li>Por <a href="https://www.facebook.com/Junioralvessantoss" target="_blank">Junior Alves</a></li>
                  <li><?php the_date('d/m/Y'); ?></li>
                </ul>
                  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <p><?php the_content(); ?></p>
                  <?php endwhile; else: ?>
                <?php endif ?>
                  
                  <br>
                  <!-- Compartilhar -->
                  <div class="post-share">
                    <span>Compartilhe esse post:</span>
                    <div class="fb-like" data-href="<?php the_Permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                  
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://pluscityagencia.com.br/branding/design-e-branding/" data-text="Design e Branding" data-via="pluscityagencia">Tweet</a>

                    <div class="g-plusone" data-annotation="inline" data-width="300" data-href="<?php the_Permalink(); ?>"></div>
                  </div>
                  <br>
                                    <br>
                  <div class="fb-comments" data-href="<?php the_Permalink(); ?>" data-width="data-width" data-numposts="5"></div>
              </div>
            </div>
            <!-- End Post -->

            

          </div>
          <!-- End Blog Posts -->


          
<?php get_sidebar(); ?>

        </div>
      </div>
    </div>
    <!-- End Content -->
<?php get_footer(); ?>
