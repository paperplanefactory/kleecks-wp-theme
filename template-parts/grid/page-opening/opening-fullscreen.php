<?php
if ( $opening_fullscreen_image != '' || $page_opening_video === 'si' ) {
  //$box_colors_scheme_classes = 'bg-1 txt-4';
  //$box_h1_color = 'txt-4';
  //$page_opening_opacity_level = get_field( 'page_opening_opacity_level' );
}
else {
  //$box_colors_scheme_classes = get_field( 'page_opening_color_scheme' );
  //$box_h1_color = 'txt-8';
}
$box_colors_scheme_classes = get_field( 'page_opening_color_scheme' );
 ?>

<div class="wrapper page-opening <?php echo $box_colors_scheme_classes; ?>">
  <?php if ( $opening_fullscreen_image != '' ) : ?>
    <div class="<?php echo $page_opening_layout_size; ?> fullscreen-cta fullscreen-cta-center lazy coverize" data-bg="<?php echo $thumb_url_desktop; ?>" data-bg-hidpi="<?php echo $thumb_url_desktop_hd; ?>" data-aos="fade">
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
     <?php if ( $page_opening_opacity_level === 'si' && ( $opening_fullscreen_image != '' || $page_opening_video === 'si' ) ) : ?>
       <div class="above-image-opacity"></div>
     <?php endif; ?>

      <div class="fullscreen-cta-aligner">
        <div class="wrapper">
          <div class="wrapper-padded">
            <div class="wrapper-padded-container">
              <div class="fullscreen-cta-safe-padding alignleft default-button-default-colors" data-aos="fade-in">
                <div class="last-child-no-margin">
                  <?php if ( $page_breadcrumbs === 'yes' && function_exists( 'bcn_display' ) ) : ?>
                    <div class="breadcrumbs-holder undelinked-links" typeof="BreadcrumbList" vocab="http://schema.org/">
                      <?php bcn_display(); ?>
                    </div>
                  <?php endif; ?>
                  <div class="mobile-only">
                    <?php if ( get_field( 'page_opening_title_mobile' ) ) : ?>
                      <h1 class=""><?php the_field( 'page_opening_title_mobile' ); ?></h1>
                    <?php elseif ( get_field( 'page_opening_title' ) ) : ?>
                      <h1 class=""><?php the_field( 'page_opening_title' ); ?></h1>
                    <?php else : ?>
                      <h1 class=""><?php the_title(); ?></h1>
                    <?php endif; ?>
                    <?php if ( get_field( 'page_opening_subtitle' ) ) : ?>
                      <p><?php the_field( 'page_opening_subtitle' ); ?></p>
                    <?php endif; ?>
                  </div>
                  <div class="desktop-only">
                    <?php if ( get_field( 'page_opening_title' ) ) : ?>
                      <h1 class="<?php echo $box_h1_color; ?>"><?php the_field( 'page_opening_title' ); ?></h1>
                    <?php else : ?>
                      <h1 class="<?php echo $box_h1_color; ?>"><?php the_title(); ?></h1>
                    <?php endif; ?>
                    <?php if ( get_field( 'page_opening_subtitle' ) ) : ?>
                      <p><?php the_field( 'page_opening_subtitle' ); ?></p>
                    <?php endif; ?>
                  </div>

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
