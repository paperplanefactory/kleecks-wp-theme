<!-- module-slideshow -->
<div class="wrapper module-slideshow">
  <a name="section-<?php echo $module_count; ?>" class="section-anchor"></a>
  <div class="<?php the_sub_field( 'module_vertical_top_space' ); ?> <?php the_sub_field( 'module_vertical_bottom_space' ); ?>">
    <div class="wrapper-padded">
      <div class="wrapper-padded-more-1230">
        <?php if ( get_sub_field( 'module_slideshow_topic' ) ) : ?>
          <h4 class="allupper txt-5 topic-title"><?php the_sub_field( 'module_slideshow_topic' ); ?></h4>
        <?php endif; ?>
        <?php
        $module_slideshow_choose_slider = get_sub_field( 'module_slideshow_choose_slider' );
        if( $module_slideshow_choose_slider ) : foreach( $module_slideshow_choose_slider as $post ) :
          $tipo_di_slideshow = get_field( 'tipo_di_slideshow' );
        ?>
        <div class="<?php echo $tipo_di_slideshow; ?> <?php echo $tipo_di_slideshow; ?>-js">
          <?php if ( have_rows( 'gestione_slide' ) ) : while ( have_rows( 'gestione_slide' ) ) : the_row(); ?>
            <?php if ( $tipo_di_slideshow === 'slide-case-study' ) : ?>
              <div class="">
                <div class="flex-hold flex-slider-case-studies verticalize">
                  <div class="case-studies-texts">
                    <?php if ( get_sub_field( 'highlights_testo_con_freccia' ) ) : ?>
                      <div class="title-arrow-top-left" data-aos="fade-in" data-aos-delay="500">
                        <span class="text-handwritten txt-5"><?php the_sub_field( 'highlights_testo_con_freccia' ); ?></span>
                      </div>
                    <?php endif; ?>
                    <?php if ( have_rows( 'highlights' ) ) : ?>
                      <div class="flex-hold flex-highlights-slide">
                        <?php  while ( have_rows( 'highlights' ) ) : the_row(); ?>
                          <div class="flex-highlights-slide-number">
                            <h2 class="txt-8"><?php the_sub_field( 'highlights_numero' ); ?></h2>
                          </div>
                          <div class="flex-highlights-slide-label txt-1">
                            <p>
                              <?php the_sub_field( 'highlights_etichetta' ); ?>
                            </p>
                          </div>
                          <div class="flex-highlights-slide-line"></div>
                        <?php endwhile; ?>
                      </div>
                    <?php endif; ?>
                  </div>
                  <div class="case-studies-image">
                    <?php
                    $image_data = array(
                        'image_type' => 'acf_sub_field', // options: post_thumbnail, acf_field, acf_sub_field
                        'image_value' => 'highlights_immagine', // se utilizzi un custom field indica qui il nome del campo
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
                  </div>
                </div>
                <?php if ( get_sub_field( 'highlights_citazione' ) || get_sub_field( 'highlights_autore_citazione' ) || get_sub_field( 'highlights_foto_citazione' ) ) : ?>
                  <div class="flex-hold flex-hold-case-studies-author verticalize">
                    <?php if ( get_sub_field( 'highlights_foto_citazione' ) ) : ?>
                      <div class="flex-hold-case-studies-author-picture">
                        <div class="rounder">
                          <?php
                          $image_data = array(
                              'image_type' => 'acf_sub_field', // options: post_thumbnail, acf_field, acf_sub_field
                              'image_value' => 'highlights_foto_citazione', // se utilizzi un custom field indica qui il nome del campo
                              'size_fallback' => 'round_image'
                          );
                          $image_sizes = array( // qui sono definiti i ritagli o dimensioni. Devono corrispondere per numero a quanto dedinfito nella funzione nei parametri data-srcset o srcset
                              'desktop_default' => 'round_image',
                              'desktop_hd' => 'round_image_hd',
                              'mobile_default' => 'round_image',
                              'mobile_hd' => 'round_image_hd',
                              'lazy_placheholder' => 'micro'
                          );
                          print_theme_image_lazyslick( $image_data, $image_sizes );
                          ?>
                        </div>
                      </div>
                    <?php endif; ?>
                    <div class="flex-hold-case-studies-author-quote">
                      <?php if ( get_sub_field( 'highlights_citazione' ) ) : ?>
                        <p>
                          <?php the_sub_field( 'highlights_citazione' ); ?>
                        </p>
                      <?php endif; ?>
                      <?php if ( get_sub_field( 'highlights_autore_citazione' ) ) : ?>
                        <h5><?php the_sub_field( 'highlights_autore_citazione' ); ?></h5>
                      <?php endif; ?>
                    </div>
                  </div>
                <?php endif; ?>
              </div>
            <?php elseif ( $tipo_di_slideshow === 'slide-comunicato-stampa' ) : ?>
              <div>
                <div class="flex-hold-slider-press">
                  <div class="top">
                    <?php if ( get_sub_field( 'gestione_slide_logo' ) ) : ?>
                      <?php
                      $image_data = array(
                          'image_type' => 'acf_sub_field', // options: post_thumbnail, acf_field, acf_sub_field
                          'image_value' => 'gestione_slide_logo', // se utilizzi un custom field indica qui il nome del campo
                          'size_fallback' => 'round_image'
                      );
                      $image_sizes = array( // qui sono definiti i ritagli o dimensioni. Devono corrispondere per numero a quanto dedinfito nella funzione nei parametri data-srcset o srcset
                          'desktop_default' => 'round_image',
                          'desktop_hd' => 'round_image_hd',
                          'mobile_default' => 'round_image',
                          'mobile_hd' => 'round_image_hd',
                          'lazy_placheholder' => 'micro'
                      );
                      print_theme_image_lazyslick( $image_data, $image_sizes );
                      ?>
                    <?php endif; ?>
                  </div>
                  <div class="bottom txt-1">
                    <h2 class="txt-8"><?php the_sub_field( 'gestione_slide_testo' ); ?></h2>
                    <?php if ( get_sub_field( 'gestione_slide_link' ) ) : ?>
                      <div class="cta-holder">
                        <a href="<?php the_sub_field( 'gestione_slide_link' ); ?>" class="default-button-b allupper" target="_blank">Read more</a>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
                <?php if ( get_sub_field( 'gestione_slide_citazione' ) || get_sub_field( 'gestione_slide_autore_citazione' ) || get_sub_field( 'gestione_slide_foto_citazione' ) ) : ?>
                  <div class="flex-hold flex-hold-case-studies-author verticalize">
                    <?php if ( get_sub_field( 'gestione_slide_foto_citazione' ) ) : ?>
                      <div class="flex-hold-case-studies-author-picture">
                        <div class="rounder">
                          <?php
                          $image_data = array(
                              'image_type' => 'acf_sub_field', // options: post_thumbnail, acf_field, acf_sub_field
                              'image_value' => 'gestione_slide_foto_citazione', // se utilizzi un custom field indica qui il nome del campo
                              'size_fallback' => 'round_image'
                          );
                          $image_sizes = array( // qui sono definiti i ritagli o dimensioni. Devono corrispondere per numero a quanto dedinfito nella funzione nei parametri data-srcset o srcset
                              'desktop_default' => 'round_image',
                              'desktop_hd' => 'round_image_hd',
                              'mobile_default' => 'round_image',
                              'mobile_hd' => 'round_image_hd',
                              'lazy_placheholder' => 'micro'
                          );
                          print_theme_image_lazyslick( $image_data, $image_sizes );
                          ?>
                        </div>
                      </div>
                    <?php endif; ?>
                    <div class="flex-hold-case-studies-author-quote">
                      <?php if ( get_sub_field( 'gestione_slide_autore_citazione' ) ) : ?>
                        <h5><?php the_sub_field( 'gestione_slide_autore_citazione' ); ?></h5>
                      <?php endif; ?>
                    </div>
                  </div>
                <?php endif; ?>
              </div>
            <?php elseif ( $tipo_di_slideshow === 'slide-foto' ) : ?>
              <div>
                <div class="foto-slide">
                  <?php
                  $image_data = array(
                      'image_type' => 'acf_sub_field', // options: post_thumbnail, acf_field, acf_sub_field
                      'image_value' => 'gestione_slide_foto_foto', // se utilizzi un custom field indica qui il nome del campo
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
                  <?php if ( get_sub_field( 'gestione_slide_foto_foto_didascalia' ) ) : ?>
                    <h5><?php the_sub_field( 'gestione_slide_foto_foto_didascalia' ); ?></h5>
                  <?php endif; ?>
                </div>
              </div>
            <?php endif; ?>

          <?php endwhile; endif; ?>
        </div>
        <?php endforeach; wp_reset_postdata(); endif; ?>
      </div>
    </div>
  </div>
</div>
<!-- module-slideshow -->
