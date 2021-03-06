<?php
$page_opening_layout = get_field( 'page_opening_layout' );
if ( is_archive() ) {
  include( locate_template( 'template-parts/grid/page-opening/opening-archive.php' ) );
}
else {
  $opening_fullscreen_image = get_field( 'opening_fullscreen_image' );
  $thumb_url_desktop = $opening_fullscreen_image['sizes']['full_desk'];
  $thumb_url_desktop_hd = $opening_fullscreen_image['sizes']['full_desk_hd'];
  $page_opening_video = get_field( 'page_opening_video' );
  $page_breadcrumbs = get_field( 'page_breadcrumbs' );
  $page_scroll_button = get_field( 'page_scroll_button' );
  switch ( $page_opening_layout ) {
    case 'opening-fullscreen' :
    $page_opening_layout_size = 'page-opening-fullscreen';
    break;
    case 'opening-almost-fullscreen' :
    $page_opening_layout_size = 'page-opening-fullscreen-less';
    break;
    case 'opening-text-image' :
    break;
  }
  $page_opening_image_shape = get_field( 'page_opening_image_shape' );
  $page_taxonomy_show = get_field( 'page_taxonomy_show' );

  if ( $page_opening_layout === 'opening-k' ) {
    include( locate_template( 'template-parts/grid/page-opening/opening-k.php' ) );
  }
  if ( $page_opening_layout === 'opening-fullscreen' ) {
    include( locate_template( 'template-parts/grid/page-opening/opening-fullscreen.php' ) );
  }
  elseif ( $page_opening_layout === 'opening-text' ) {
    include( locate_template( 'template-parts/grid/page-opening/opening-text.php' ) );
  }
}
?>
