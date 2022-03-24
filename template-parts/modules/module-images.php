<!-- module-images -->
<section class="wrapper module-images txt-1">
  <a name="section-<?php echo $module_count; ?>" class="section-anchor"></a>
  <div class="<?php the_sub_field( 'module_vertical_top_space' ); ?> <?php the_sub_field( 'module_vertical_bottom_space' ); ?>">
    <div class="wrapper-padded">
      <div class="wrapper-padded-more-1230">
        <?php if ( have_rows( 'module_images_repetaer' ) ) : while ( have_rows( 'module_images_repetaer' ) ) : the_row();
            $module_images_repetaer_layout = get_sub_field( 'module_images_repetaer_layout' );
            if ( $module_images_repetaer_layout === 'two-images' ) :
            ?>
            <div class="flex-hold flex-hold-2 margins-thin">
              <div class="flex-hold-child">
                <?php if ( get_sub_field( 'module_images_repetaer_left_image_title' ) ) : ?>
                  <h5 class="allupper txt-8"><?php the_sub_field( 'module_images_repetaer_left_image_title' ); ?></h5>
                <?php endif; ?>
                  <?php
                  $image_data = array(
                      'image_type' => 'acf_sub_field', // options: post_thumbnail, acf_field, acf_sub_field
                      'image_value' => 'module_images_repetaer_left_image_image', // se utilizzi un custom field indica qui il nome del campo
                      'size_fallback' => 'full_desk'
                  );
                  $image_sizes = array( // qui sono definiti i ritagli o dimensioni. Devono corrispondere per numero a quanto dedinfito nella funzione nei parametri data-srcset o srcset
                      'desktop_default' => 'full_desk',
                      'desktop_hd' => 'full_desk_hd',
                      'mobile_default' => 'column',
                      'mobile_hd' => 'column_hd',
                      'lazy_placheholder' => 'micro'
                  );
                  print_theme_image_lazyslick( $image_data, $image_sizes );
                  ?>
                  <?php if ( get_sub_field( 'module_images_repetaer_left_image_caption' ) ) : ?>
                    <h6 class="txt-1"><?php the_sub_field( 'module_images_repetaer_left_image_caption' ); ?></h6>
                  <?php endif; ?>
              </div>
              <div class="flex-hold-child">
                <?php if ( get_sub_field( 'module_images_repetaer_right_image_title' ) ) : ?>
                  <h5 class="allupper txt-8"><?php the_sub_field( 'module_images_repetaer_right_image_title' ); ?></h5>
                <?php endif; ?>
                  <?php
                  $image_data = array(
                      'image_type' => 'acf_sub_field', // options: post_thumbnail, acf_field, acf_sub_field
                      'image_value' => 'module_images_repetaer_right_image_image', // se utilizzi un custom field indica qui il nome del campo
                      'size_fallback' => 'full_desk'
                  );
                  $image_sizes = array( // qui sono definiti i ritagli o dimensioni. Devono corrispondere per numero a quanto dedinfito nella funzione nei parametri data-srcset o srcset
                      'desktop_default' => 'full_desk',
                      'desktop_hd' => 'full_desk_hd',
                      'mobile_default' => 'column',
                      'mobile_hd' => 'column_hd',
                      'lazy_placheholder' => 'micro'
                  );
                  print_theme_image_lazyslick( $image_data, $image_sizes );
                  ?>
                  <?php if ( get_sub_field( 'module_images_repetaer_right_image_caption' ) ) : ?>
                    <h6 class="txt-1"><?php the_sub_field( 'module_images_repetaer_right_image_caption' ); ?></h6>
                  <?php endif; ?>
              </div>
            </div>
            <?php elseif ( $module_images_repetaer_layout === 'one-image' ) : ?>
              <div class="one-image">
                <?php if ( get_sub_field( 'module_images_repetaer_one_image_title' ) ) : ?>
                  <h5 class="allupper txt-8"><?php the_sub_field( 'module_images_repetaer_one_image_title' ); ?></h5>
                <?php endif; ?>
                  <?php
                  $image_data = array(
                      'image_type' => 'acf_sub_field', // options: post_thumbnail, acf_field, acf_sub_field
                      'image_value' => 'module_images_repetaer_one_image_image', // se utilizzi un custom field indica qui il nome del campo
                      'size_fallback' => 'full_desk'
                  );
                  $image_sizes = array( // qui sono definiti i ritagli o dimensioni. Devono corrispondere per numero a quanto dedinfito nella funzione nei parametri data-srcset o srcset
                      'desktop_default' => 'full_desk',
                      'desktop_hd' => 'full_desk_hd',
                      'mobile_default' => 'column',
                      'mobile_hd' => 'column_hd',
                      'lazy_placheholder' => 'micro'
                  );
                  print_theme_image_lazyslick( $image_data, $image_sizes );
                  ?>
                  <?php if ( get_sub_field( 'module_images_repetaer_one_image_caption' ) ) : ?>
                    <h6 class="txt-1"><?php the_sub_field( 'module_images_repetaer_one_image_caption' ); ?></h6>
                  <?php endif; ?>
              </div>
            <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<!-- module-images -->
