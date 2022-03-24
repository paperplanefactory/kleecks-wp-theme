<!-- module-features -->
<?php
$module_features_choose_features = get_sub_field( 'module_features_choose_features' );
if( $module_features_choose_features ) : foreach( $module_features_choose_features as $post ) : ?>
<div class="wrapper module-features">
  <a name="section-<?php echo $module_count; ?>" class="section-anchor"></a>
  <div class="<?php the_sub_field( 'module_vertical_top_space' ); ?> <?php the_sub_field( 'module_vertical_bottom_space' ); ?>">
    <div class="wrapper-padded">
      <div class="wrapper-padded-more-1230">
        <?php if ( get_sub_field( 'module_features_title' ) ) : ?>
          <h4 class="allupper txt-5 topic-title"><?php the_sub_field( 'module_features_title' ); ?></h4>
        <?php endif; ?>
        <div class="flex-hold flex-hold-features">
          <div class="feature-texts txt-1">
            <?php
            if ( have_rows( 'gestione_features' ) ) :
              $feature_counter = 0;
            ?>
              <ul class="features-contents">
                <?php
                while ( have_rows( 'gestione_features' ) ) : the_row();
                $feature_counter ++;
                if ( $feature_counter == 1 ) {
                  $first_active_class = 'active-feature';
                  $activator_status_value = "";
                }
                else {
                  $first_active_class = '';
                  $activator_status_value = "+";
                }
                ?>
                  <li class="feature-block-js feature-block-js-<?php echo $feature_counter; ?> <?php echo $first_active_class; ?>">
                    <h2 class="txt-8 activator feature-activator-js" data-feature-number="<?php echo $feature_counter; ?>"><?php the_sub_field( 'feature_title' ); ?> <span class="activator-status"><?php echo $activator_status_value; ?></span></h2>
                    <div class="feature-text feature-text-js">
                      <p>
                        <?php the_sub_field( 'feature_description' ); ?>
                      </p>
                    </div>
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
            <?php get_template_part( 'template-parts/modules/module-cta-default' ); ?>
          </div>
          <div class="feature-image">
            <div class="feature-image-slider feature-image-slider-js">
              <?php if ( have_rows( 'gestione_features' ) ) : while ( have_rows( 'gestione_features' ) ) : the_row(); ?>
                <?php
                $image_data = array(
                    'image_type' => 'acf_sub_field', // options: post_thumbnail, acf_field, acf_sub_field
                    'image_value' => 'feature_image', // se utilizzi un custom field indica qui il nome del campo
                    'size_fallback' => 'column'
                );
                $image_sizes = array( // qui sono definiti i ritagli o dimensioni. Devono corrispondere per numero a quanto dedinfito nella funzione nei parametri data-srcset o srcset
                    'desktop_default' => 'column',
                    'desktop_hd' => 'column_hd',
                    'mobile_default' => 'column',
                    'mobile_hd' => 'column_hd',
                    'lazy_placheholder' => 'micro'
                );
                print_theme_image_lazyslick( $image_data, $image_sizes );
                ?>
              <?php endwhile; endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endforeach; wp_reset_postdata(); endif; ?>
<!-- module-features -->
