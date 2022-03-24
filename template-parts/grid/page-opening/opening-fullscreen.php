<div class="wrapper page-opening">
  <?php if ( $thumb_id != '' ) : ?>
    <div class="<?php echo $page_opening_layout_size; ?> fullscreen-cta fullscreen-cta-center lazy coverize" data-bg="<?php echo $thumb_url_desktop[0]; ?>" data-bg-hidpi="<?php echo $thumb_url_desktop_hd[0]; ?>" data-aos="fade">
  <?php else : ?>
    <div class="<?php echo $page_opening_layout_size; ?> fullscreen-cta fullscreen-cta-center">
  <?php endif; ?>
    <?php if ( $page_opening_video === 'si' ) : ?>
      <div class="fullscreen-video">
        <video preload="metadata" class="lazy" data-autoplay autoplay loop muted playsinline>
         <source type="video/mp4" data-src="<?php the_field( 'page_opening_video_mp4' ); ?>">
       </video>
     </div>
     <?php endif; ?>
     <div class="above-image-opacity"></div>
      <div class="fullscreen-cta-aligner">
        <div class="wrapper">
          <div class="wrapper-padded">
            <div class="wrapper-padded-container">
              <div class="fullscreen-cta-safe-padding alignleft txt-4 default-button-default-colors" data-aos="fade-in">
                <div class="last-child-no-margin">
                  <?php if ( $page_breadcrumbs === 'yes' && function_exists( 'bcn_display' ) ) : ?>
                    <div class="breadcrumbs-holder undelinked-links" typeof="BreadcrumbList" vocab="http://schema.org/">
                      <?php bcn_display(); ?>
                    </div>
                  <?php endif; ?>
                  <?php if ( get_field( 'page_opening_title' ) ) : ?>
                    <h1><?php the_field( 'page_opening_title' ); ?></h1>
                  <?php else : ?>
                    <h1><?php the_title(); ?></h1>
                  <?php endif; ?>
                  <?php if ( get_field( 'page_opening_subtitle' ) ) : ?>
                    <p><?php the_field( 'page_opening_subtitle' ); ?></p>
                  <?php endif; ?>
                </div>
                <div class="clearer"></div>
                <?php get_template_part( 'template-parts/grid/page-opening/opening-cta-default' ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>
</div>
<div class="wrapper">
  <a name="below-the-fold" class="header-offset-anchor"></a>
</div>
