<?php
if ( get_field( 'page_opening_arrow_top_left' ) ) {
  $page_opening_arrow_top_left_class = 'space-opening-arrow-top-left';
}
else {
  $page_opening_arrow_top_left_class = '';
}
if ( get_field( 'page_opening_arrow_top_right' ) ) {
  $page_opening_arrow_top_right_class = 'space-opening-arrow-top-right';
}
else {
  $page_opening_arrow_top_right_class = '';
}
 ?>
<div class="wrapper opening-kleecks">
  <div class="wrapper-padded">
    <div class="wrapper-padded-container-">
      <div class="flex-hold flex-hold-opening-kleecks verticalize">
        <div class="flex-hold-opening-kleecks-texts">
          <div class="texts-area txt-8 default-button-default-colors" data-aos="fade-left">
            <div class="title-arrows-area-top <?php echo $page_opening_arrow_top_left_class; ?> <?php echo $page_opening_arrow_top_right_class; ?>">
              <?php if ( get_field( 'page_opening_arrow_top_left' ) ) : ?>
                <div class="title-arrow-top-left" data-aos="fade-in" data-aos-delay="500">
                  <span class="text-handwritten txt-5"><?php the_field( 'page_opening_arrow_top_left' ); ?></span>
                </div>
              <?php endif; ?>
              <?php if ( get_field( 'page_opening_arrow_top_right' ) ) : ?>
                <div class="title-arrow-top-right" data-aos="fade-in" data-aos-delay="700">
                  <span class="text-handwritten txt-5"><?php the_field( 'page_opening_arrow_top_right' ); ?></span>
                </div>
              <?php endif; ?>
            </div>
            <?php if ( $page_breadcrumbs === 'yes' && function_exists( 'bcn_display' ) ) : ?>
              <div class="breadcrumbs-holder undelinked-links" typeof="BreadcrumbList" vocab="http://schema.org/">
                <?php bcn_display(); ?>
              </div>
            <?php endif; ?>
            <div class="mobile-only">
              <?php if ( get_field( 'page_opening_title_mobile' ) ) : ?>
                <h1><?php the_field( 'page_opening_title_mobile' ); ?></h1>
              <?php elseif ( get_field( 'page_opening_title' ) ) : ?>
                <h1><?php the_field( 'page_opening_title' ); ?></h1>
              <?php else : ?>
                <h1><?php the_title(); ?></h1>
              <?php endif; ?>
            </div>
            <div class="desktop-only">
              <?php if ( get_field( 'page_opening_title' ) ) : ?>
                <h1><?php the_field( 'page_opening_title' ); ?></h1>
              <?php else : ?>
                <h1><?php the_title(); ?></h1>
              <?php endif; ?>
            </div>
            <?php if ( get_field( 'page_opening_arrow_bottom_right' ) ) : ?>
              <div class="title-arrows-area-bottom">
                <div class="title-arrow-bottom-right" data-aos="fade-in" data-aos-delay="900">
                  <span class="text-handwritten txt-5"><?php the_field( 'page_opening_arrow_bottom_right' ); ?></span>
                </div>
              </div>
            <?php endif; ?>
            <?php if ( get_field( 'page_opening_subtitle' ) && !get_field( 'page_opening_arrow_bottom_right' ) ) : ?>
              <p class="as-h4"><?php the_field( 'page_opening_subtitle' ); ?></p>
            <?php endif; ?>
            <?php include( locate_template( 'template-parts/grid/page-opening/opening-cta-default.php' ) ); ?>
            <?php if ( get_field( 'page_opening_arrow_bottom_right' ) ) : ?>
              <div class="after-title-arrows-area-bottom"></div>
            <?php endif; ?>
            <?php
            $page_opening_utilizzare_slideshow_loghi = get_field( 'page_opening_utilizzare_slideshow_loghi' );
            if ( $page_opening_utilizzare_slideshow_loghi === 'si' ) : ?>
              <div class="logos-slideshow-box" data-aos="fade-in" data-aos-delay="500">
                <?php if ( get_field( 'page_opening_titolo_slideshow' ) ) : ?>
                  <h5><?php the_field( 'page_opening_titolo_slideshow' ); ?></h5>
                <?php endif; ?>
                <?php $page_opening_scegli_slide = get_field('page_opening_scegli_slide');
                if( $page_opening_scegli_slide ) {
                  $slide_behaviour = 'compact';
                  include( locate_template( 'template-parts/grid/logos-slideshow.php' ) );
                }
                ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="flex-hold-opening-kleecks-image" data-aos="fade-right" data-aos-delay="200">
          <?php
          $image_data = array(
              'image_type' => 'acf_field', // options: post_thumbnail, acf_field, acf_sub_field
              'image_value' => 'opening_kleecks_image_desktop', // se utilizzi un custom field indica qui il nome del campo
              'size_fallback' => 'column'
          );
          $image_sizes = array( // qui sono definiti i ritagli o dimensioni. Devono corrispondere per numero a quanto dedinfito nella funzione nei parametri data-srcset o srcset
              'desktop_default' => 'column',
              'desktop_hd' => 'column_hd',
              'mobile_default' => 'column',
              'mobile_hd' => 'column_hd',
              'lazy_placheholder' => 'micro'
          );
          print_theme_image( $image_data, $image_sizes );
          ?>
        </div>
      </div>
      <?php
      if ( get_field( 'opening_kleecks_image_mobile' ) || get_field( 'opening_kleecks_image_desktop' ) ) :
        if ( get_field( 'opening_kleecks_image_mobile' ) ) {
          $set_image = 'opening_kleecks_image_mobile';
        }
        else {
          $set_image = 'opening_kleecks_image_desktop';
        }
        ?>
        <div class="mobile-only mobile-image" data-aos="fade-right" data-aos-delay="200">
          <?php
          $image_data = array(
              'image_type' => 'acf_field', // options: post_thumbnail, acf_field, acf_sub_field
              'image_value' => $set_image, // se utilizzi un custom field indica qui il nome del campo
              'size_fallback' => 'column'
          );
          $image_sizes = array( // qui sono definiti i ritagli o dimensioni. Devono corrispondere per numero a quanto dedinfito nella funzione nei parametri data-srcset o srcset
              'desktop_default' => 'column',
              'desktop_hd' => 'column_hd',
              'mobile_default' => 'column',
              'mobile_hd' => 'column_hd',
              'lazy_placheholder' => 'micro'
          );
          print_theme_image( $image_data, $image_sizes );
          ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
