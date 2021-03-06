<div class="modules-handler">
  <?php
  global $module_count;
  global $last_rep_color;
  $module_count = 0;
  if ( have_rows( 'new_module' ) ) : while ( have_rows( 'new_module' ) ) : the_row();
  $module_count++;
  $choose_module = get_sub_field( 'choose_module');
  $show_hide_module = get_sub_field( 'show_hide_module');
  // mostro o nascondo il modulo
  if ( $show_hide_module == 1 ) {
    //$bar = get_user_option( 'show_admin_bar_front', get_current_user_id() );
    $bar = true;
    // mostro o nascondo l'indice del modulo
    if (  $bar == 'true' ) {
      if ( is_user_logged_in() ) {
        echo '<div class="editor-info editor-info-js"><div class="admin-index"><span class="click-hide">+</span><span class="hide-me hidden-label"> Modulo: '. $module_count .' URL: '. get_permalink() .'#section-'. $module_count .'</span></div></div>';
      }
    }
    echo '<a name="section-'.$module_count.'" class="header-offset-anchor"></a>';
    switch ( $choose_module ) {
      // module-text
      case 'module-text' :
      include( locate_template( 'template-parts/modules/module-text.php' ) );
      break;
      // module-columns
      case 'module-columns' :
      include( locate_template( 'template-parts/modules/module-columns.php' ) );
      break;
      // module-features
      case 'module-features' :
      include( locate_template( 'template-parts/modules/module-features.php' ) );
      break;
      // module-stripe
      case 'module-stripe' :
      include( locate_template( 'template-parts/modules/module-stripe.php' ) );
      break;
      // module-scrolling-text
      case 'module-scrolling-text' :
      include( locate_template( 'template-parts/modules/module-scrolling-text.php' ) );
      break;
      // module-images
      case 'module-images' :
      include( locate_template( 'template-parts/modules/module-images.php' ) );
      break;
      // module-key-questions
      case 'module-key-questions' :
      include( locate_template( 'template-parts/modules/module-key-questions.php' ) );
      break;
      // module-slideshow
      case 'module-slideshow' :
      include( locate_template( 'template-parts/modules/module-slideshow.php' ) );
      break;
      // module-banner
      case 'module-banner' :
      include( locate_template( 'template-parts/modules/module-banner.php' ) );
      break;
      // module-module-columns-fix-column
      case 'module-columns-fix-column' :
      include( locate_template( 'template-parts/modules/module-columns-fix-column.php' ) );
      break;
      // module-slideshow-logos
      case 'module-slideshow-logos' :
      include( locate_template( 'template-parts/modules/module-slideshow-logos.php' ) );
      break;
      // module-jobs-listing
      case 'module-jobs-listing' :
      include( locate_template( 'template-parts/modules/module-jobs-listing.php' ) );
      break;
      // module-kleecks
      case 'module-kleecks' :
      include( locate_template( 'template-parts/modules/module-kleecks.php' ) );
      break;
      // module-expanding-text
      case 'module-expanding-text' :
      include( locate_template( 'template-parts/modules/module-expanding-text.php' ) );
      break;
      // module-cf7
      case 'module-cf7' :
      include( locate_template( 'template-parts/modules/module-cf7.php' ) );
      break;
      // module-highlighted-sentence
      // case 'module-highlighted-sentence' :
      // include( locate_template( 'template-parts/modules/module-highlighted-sentence.php' ) );
      // break;
      // module-fullscreen-image
      // case 'module-fullscreen-image' :
      // include( locate_template( 'template-parts/modules/module-fullscreen-image.php' ) );
      // break;

    }
  }

  endwhile; endif;
   ?>
</div>
