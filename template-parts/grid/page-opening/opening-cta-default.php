<?php
// recupero le informazioni per la CTA del modulo
$cta_text_data = get_field( 'page_opening_cta_text' );
if ( $cta_text_data != '' ) :
  $cta_type_data = get_field( 'page_opening_cta_target' );
  global $cta_url_modal_array;
  switch ( $cta_type_data ) {
    case 'cta-target-internal' :
    $cta_url_data = get_field( 'page_opening_cta_target_internal' );
    $cta_url_data = get_permalink( $cta_url_data[0] );
    $cta_url_target = '_self';
    $cta_url_modal_class = '';
    $cta_url_parameter_data = get_field( 'module_additional_elements_cta_target_internal_parameter' );
    if ( $cta_url_parameter_data != '' ) {
      $cta_url_data = $cta_url_data . $cta_url_parameter_data;
    }
    break;
    case 'cta-target-external' :
    $cta_url_data = get_field( 'page_opening_cta_target_external' );
    $cta_url_target = '_blank';
    $cta_url_modal_class = '';
    $cta_url_modal_id = '';
    break;
    case 'cta-target-file' :
    $cta_url_data = get_field( 'page_opening_cta_target_file' );
    $cta_url_target = '_blank';
    $cta_url_modal = '';
    $cta_url_modal_id = '';
    break;
    case 'cta-target-modal' :
    $cta_url_data = '#';
    $cta_url_target = '_self';
    $cta_url_modal_class = 'modal-open-js';
    $cta_url_modal_id = get_field( 'page_opening_cta_modal' );
    $cta_url_modal_array[] = get_field( 'page_opening_cta_modal' );
    break;
  }
  $cta_appearence = get_field( 'page_opening_cta_appearence' );
  ?>
   <div class="cta-holder text-module-cta-align-js" data-aos="fade-in" data-aos-delay="200">
     <a href="<?php echo $cta_url_data; ?>" target="<?php echo $cta_url_target; ?>" class="<?php echo $cta_appearence; ?> <?php echo $cta_url_modal_class; ?> allupper" data-modal-open-id=".paperplane-modal-js-<?php echo $cta_url_modal_id; ?>"><?php echo $cta_text_data; ?></a>
   </div>
 <?php endif; ?>
