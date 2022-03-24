<!-- module-columns -->
<div class="wrapper module-columns txt-1">
  <a name="section-<?php echo $module_count; ?>" class="section-anchor"></a>
  <div class="<?php the_sub_field( 'module_vertical_top_space' ); ?> <?php the_sub_field( 'module_vertical_bottom_space' ); ?>">
    <div class="wrapper-padded">
      <div class="wrapper-padded-more-1230">
        <div class="flex-hold flex-hold-<?php the_sub_field( 'module_columns_columns_number' ); ?> margins-thin">
          <?php
          if ( have_rows( 'module_columns_columns_repeater' ) ) : while ( have_rows( 'module_columns_columns_repeater' ) ) : the_row();
          $module_columns_columns_repeater_image = get_sub_field( 'module_columns_columns_repeater_image' );
          $module_columns_columns_repeater_image_format = get_sub_field( 'module_columns_columns_repeater_image_format' );
          $module_columns_columns_repeater_image_URL = $module_columns_columns_repeater_image['url'];
          ?>
          <div class="flex-hold-child module-column-box">
            <div class="<?php the_sub_field( 'module_columns_columns_repeater_align' ); ?>">
              <?php if ( $module_columns_columns_repeater_image != '' ) : ?>
                <div class="column-image">
                  <?php if ( $module_columns_columns_repeater_image_format === 'normal-image' ) : ?>
                    <?php
                    $image_data = array(
                        'image_type' => 'acf_sub_field', // options: post_thumbnail, acf_field, acf_sub_field
                        'image_value' => 'module_columns_columns_repeater_image', // se utilizzi un custom field indica qui il nome del campo
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
                  <?php elseif ( $module_columns_columns_repeater_image_format === 'round-image' ) : ?>
                    <div class="image-rounder">
                      <?php
                      $image_data = array(
                          'image_type' => 'acf_sub_field', // options: post_thumbnail, acf_field, acf_sub_field
                          'image_value' => 'module_columns_columns_repeater_image', // se utilizzi un custom field indica qui il nome del campo
                          'size_fallback' => 'round_image'
                      );
                      $image_sizes = array( // qui sono definiti i ritagli o dimensioni. Devono corrispondere per numero a quanto dedinfito nella funzione nei parametri data-srcset o srcset
                          'desktop_default' => 'round_image',
                          'desktop_hd' => 'round_image_hd',
                          'mobile_default' => 'round_image',
                          'mobile_hd' => 'round_image',
                          'lazy_placheholder' => 'micro_cut'
                      );
                      print_theme_image( $image_data, $image_sizes );
                      ?>
                    </div>
                  <?php else : ?>
                    <div class="image-icon">
                      <?php
                      $image_data = array(
                          'image_type' => 'acf_sub_field', // options: post_thumbnail, acf_field, acf_sub_field
                          'image_value' => 'module_columns_columns_repeater_image', // se utilizzi un custom field indica qui il nome del campo
                          'size_fallback' => 'column_icon'
                      );
                      $image_sizes = array( // qui sono definiti i ritagli o dimensioni. Devono corrispondere per numero a quanto dedinfito nella funzione nei parametri data-srcset o srcset
                          'desktop_default' => 'column_icon',
                          'desktop_hd' => 'column_icon_hd',
                          'mobile_default' => 'column_icon',
                          'mobile_hd' => 'column_icon_hd',
                          'lazy_placheholder' => 'micro'
                      );
                      print_theme_image( $image_data, $image_sizes );
                      ?>
                    </div>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
              <?php if ( get_sub_field( 'module_columns_columns_repeater_counter_value' ) ) : ?>
                <div class="counter">
                  <?php if ( get_sub_field( 'module_columns_columns_repeater_counter_value_before' ) ) : ?>
                    <span class="text-extra-2"><?php the_sub_field( 'module_columns_columns_repeater_counter_value_before' ); ?></span>
                  <?php endif; ?>
                  <h2 class="text-extra-2 count just-number count-pre" data-bar-number="<?php the_sub_field( 'module_columns_columns_repeater_counter_value' ); ?>">0</h1>
                  <?php if ( get_sub_field( 'module_columns_columns_repeater_counter_value_after' ) ) : ?>
                    <span class="text-extra-2"><?php the_sub_field( 'module_columns_columns_repeater_counter_value_after' ); ?></span>
                  <?php endif; ?>
                  <?php if ( get_sub_field( 'module_columns_columns_repeater_counter_description' ) ) : ?>
                    <h6><?php the_sub_field( 'module_columns_columns_repeater_counter_description' ); ?></h6>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
              <?php if ( get_sub_field( 'module_columns_columns_repeater_content' ) ) : ?>
                <div class="content-styled last-child-no-margin">
                  <?php the_sub_field( 'module_columns_columns_repeater_content' ); ?>
                </div>
              <?php endif; ?>
              <?php get_template_part( 'template-parts/modules/module-cta-default' ); ?>
              <?php if ( have_rows( 'module_columns_columns_repeater_socials' ) ) : ?>
                <ul class="inline-socials">
                  <?php while ( have_rows( 'module_columns_columns_repeater_socials' ) ) : the_row(); ?>
                    <li>
                      <a href="<?php the_sub_field( 'single_socials_profile_url' ); ?>" class="personal-social icon <?php the_sub_field( 'single_socials_icon' ); ?>" target="_blank" aria-label="Visit <?php the_sub_field( 'global_socials_profile_url' ); ?>" rel="noopener">
                      </a>
                    </li>
                  <?php endwhile; ?>
                </ul>
              <?php endif; ?>


            </div>
          </div>
        <?php endwhile; endif; ?>
        </div>
        <?php get_template_part( 'template-parts/modules/module-cta-default' ); ?>
      </div>
    </div>
  </div>
</div>
<!-- module-columns -->
