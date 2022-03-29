<!-- module-banner -->
<?php
$module_banner_color = get_sub_field( 'module_banner_color' );
if ( $module_banner_color === 'bg-5' ) {
  $banner_colors_class = 'bg-5 txt-4';
  $banner_cta_colors = 'default-button-yellow-b';
}
else {
  $banner_colors_class = 'bg-3 txt-8';
  $banner_cta_colors = 'default-button-yellow';
}
$banner = get_sub_field( 'module_banner_object' );
if( $banner ) :
  $post = $banner;
  setup_postdata( $post );
  // recupero le informazioni per la CTA del modulo
  $cta_banner_text_data = get_field( 'banner_cta_text' );
  if ( $cta_banner_text_data != '' ) {
    $cta_banner_type_data = get_field( 'banner_cta_target' );
    global $cta_url_modal_array;
    switch ( $cta_banner_type_data ) {
      case 'cta-target-internal' :
      $cta_banner_url_data = get_field( 'banner_cta_target_internal' );
      $cta_banner_url_data = get_permalink( $cta_banner_url_data[0] );
      $cta_banner_url_target = '_self';
      $cta_url_modal_class = '';
      $cta_banner_url_parameter_data = get_field( 'banner_cta_target_internal_parameter' );
      if ( $cta_banner_url_parameter_data != '' ) {
        $cta_banner_url_data = $cta_banner_url_data . $cta_url_parameter_data;
      }
      break;
      case 'cta-target-external' :
      $cta_banner_url_data = get_field( 'banner_cta_target_external' );
      $cta_banner_url_target = '_blank';
      $cta_url_modal_class = '';
      break;
      case 'cta-target-file' :
      $cta_banner_url_data = get_field( 'banner_cta_target_file' );
      $cta_banner_url_target = '_blank';
      $cta_url_modal_class = '';
      break;
      case 'cta-target-modal' :
      $cta_url_data = '#';
      $cta_url_target = '_self';
      $cta_url_modal_class = 'modal-open-js';
      $cta_url_modal_id = get_field( 'banner_cta_modal' );
      $cta_url_modal_array[] = get_field( 'banner_cta_modal' );
      break;
    }
    $cta_banner_appearence = get_field( 'banner_cta_appearence' );
  }
?>
<div class="wrapper module-banner">
  <a name="section-<?php echo $module_count; ?>" class="section-anchor"></a>
  <div class="<?php the_sub_field( 'module_vertical_top_space' ); ?> <?php the_sub_field( 'module_vertical_bottom_space' ); ?>">
    <div class="wrapper-padded">
      <div class="wrapper-padded-more-1230">
        <div class="banner-space">
          <div class="banner-content <?php echo $banner_colors_class; ?>">
            <div class="flex-hold flex-hold-banner verticalize">
              <div class="banner-texts">
                <div class="last-child-no-margin">
                  <h2><?php the_title(); ?></h2>
                </div>
              </div>
              <div class="banner-cta">
                <?php
                // se è impostata la CTA la inserisco
                if ( $cta_banner_text_data != '' ) :
                  ?>
                  <div class="cta-holder">
                    <a href="<?php echo $cta_banner_url_data; ?>" target="<?php echo $cta_banner_url_target; ?>" class="default-button <?php echo $banner_cta_colors; ?>  <?php echo $cta_url_modal_class; ?> allupper" data-modal-open-id=".paperplane-modal-js-<?php echo $cta_url_modal_id; ?>"><?php echo $cta_banner_text_data; ?></a>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- module-banner -->
<?php wp_reset_postdata(); endif; ?>
