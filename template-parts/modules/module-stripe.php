<!-- module-stripe -->
<?php
// allineamento verticale striscia
$module_stripe_vertical_aligment = get_sub_field( 'module_stripe_vertical_aligment' );
 ?>
<div class="wrapper module-stripe <?php the_sub_field( 'module_stripe_bgcolor' ); ?> txt-1">
  <a name="section-<?php echo $module_count; ?>" class="section-anchor"></a>
  <div class="<?php the_sub_field( 'module_vertical_top_space' ); ?> <?php the_sub_field( 'module_vertical_bottom_space' ); ?>">
    <div class="wrapper-padded">
      <div class="<?php the_sub_field( 'module_stripe_width' ); ?>">
        <?php
        if ( have_rows( 'module_stripe_repeater' ) ) : while ( have_rows( 'module_stripe_repeater' ) ) : the_row();
        $module_stripe_repeater_media = get_sub_field( 'module_stripe_repeater_media' );
        ?>
        <!-- blocco -->
          <div class="flex-hold flex-hold-stripe-module stripe-listed <?php echo $module_stripe_vertical_aligment; ?> <?php the_sub_field( 'module_stripe_repeater_order' ); ?>">
            <!-- colonna -->
            <div class="module-stripe-image" data-aos="fade-up">
              <div class="spacer">
                <?php if ( $module_stripe_repeater_media === 'image') : ?>
                  <?php
                  $image_data = array(
                      'image_type' => 'acf_sub_field', // options: post_thumbnail, acf_field, acf_sub_field
                      'image_value' => 'module_stripe_repeater_image', // se utilizzi un custom field indica qui il nome del campo
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
                <?php else : ?>
                  <div class="video-frame">
                    <?php the_sub_field( 'module_stripe_repeater_video' ); ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>
            <!-- colonna -->
            <!-- colonna -->
            <div class="module-stripe-text" data-aos="fade-in" data-aos-delay="250">
              <div class="spacer">
                <?php if ( get_sub_field( 'module_stripe_repeater_topic' ) ) : ?>
                  <h4 class="allupper txt-5 topic-title"><?php the_sub_field( 'module_stripe_repeater_topic' ); ?></h4>
                <?php endif; ?>
                <div class="content-styled last-child-no-margin">
                  <?php the_sub_field( 'module_stripe_repeater_content' ); ?>
                </div>
                <?php if ( have_rows( 'module_stripe_repeater_checklist' ) ) : ?>
                  <ul class="checklist">
                    <?php while ( have_rows( 'module_stripe_repeater_checklist' ) ) : the_row(); ?>
                    <li>
                      <h4><?php the_sub_field( 'module_stripe_repeater_checklist_titolo' ); ?></h4>
                      <p>
                        <?php the_sub_field( 'module_stripe_repeater_checklist_content' ); ?>
                      </p>

                    </li>
                    <?php endwhile; ?>
                  </ul>
                <?php endif; ?>
                <?php get_template_part( 'template-parts/modules/module-cta-default' ); ?>
              </div>
            </div>
            <!-- colonna -->
          </div>
          <!-- blocco -->
        <?php endwhile; endif; ?>
      </div>
      <?php get_template_part( 'template-parts/modules/module-cta-default' ); ?>
    </div>
  </div>
</div>
<!-- module-stripe -->
