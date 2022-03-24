<?php
global $mega_menu_wrapper;
$args_mega_menus = array(
  'post_type' => 'cpt_mega_menu',
  'posts_per_page' => -1
);
$my_mega_menus = get_posts( $args_mega_menus );
if ( !empty ( $my_mega_menus ) ) : foreach ( $my_mega_menus as $post ) : setup_postdata ( $post ); ?>
<nav class="mega-menu mega-menu-js mega-menu-js-<?php echo get_the_ID(); ?>-target hidden">
  <div class="mega-menu-holder">
    <div class="mega-menu-spacer mega-menu-js-hover mega-menu-holder-contained">
      <div class="flex-hold flex-hold-mega-menu">
        <div class="mega-menu-links">
          <?php if ( have_rows( 'mega_menu_gestione_colonne' ) ) : ?>
            <ul class="mega-menu-links-columns">
              <?php while ( have_rows( 'mega_menu_gestione_colonne' ) ) : the_row(); ?>
              <li>
                <h5 class="allupper txt-5"><?php the_sub_field( 'mega_menu_titolo_colonna' ); ?></h5>
                <?php if ( have_rows( 'mega_menu_voci_navigazione' ) ) : ?>
                  <?php while ( have_rows( 'mega_menu_voci_navigazione' ) ) : the_row(); ?>
                    <div class="mega-menu-links-columns-link">
                      <?php $mega_menu_voci_navigazione_pagina = get_sub_field( 'mega_menu_voci_navigazione_pagina' ); ?>
                      <?php if ( $mega_menu_voci_navigazione_pagina != '' ) : ?>
                        <a href="<?php echo $mega_menu_voci_navigazione_pagina['url'];?>" target="<?php echo $mega_menu_voci_navigazione_pagina['target'];?>"><?php echo $mega_menu_voci_navigazione_pagina['title'];?></a>
                      <?php endif; ?>
                      <?php if ( get_sub_field( 'titolo_aggiuntivo' ) ) : ?>
                        <div class="title">
                          <?php the_sub_field( 'titolo_aggiuntivo' ); ?>
                        </div>
                      <?php endif; ?>
                      <?php if ( get_sub_field( 'testo_aggiuntivo' ) ) : ?>
                        <div class="text">
                          <?php the_sub_field( 'testo_aggiuntivo' ); ?>
                        </div>
                      <?php endif; ?>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </li>
              <?php endwhile; ?>
            </ul>
            <div class="clearer"></div>
          <?php endif; ?>
        </div>
        <div class="mega-menu-info">
          <div class="image">
            <?php
            $image_data = array(
                'image_type' => 'acf_field', // options: post_thumbnail, acf_field, acf_sub_field
                'image_value' => 'mega_menu_image', // se utilizzi un custom field indica qui il nome del campo
                'size_fallback' => 'slide_double'
            );
            $image_sizes = array( // qui sono definiti i ritagli o dimensioni. Devono corrispondere per numero a quanto dedinfito nella funzione nei parametri data-srcset o srcset
                'desktop_default' => 'slide_double',
                'desktop_hd' => 'slide_double',
                'mobile_default' => 'slide_double',
                'mobile_hd' => 'slide_double',
                'lazy_placheholder' => 'micro'
            );
            print_theme_image( $image_data, $image_sizes );
            ?>
          </div>

          <div class="texts last-child-no-margin">
            <?php the_field( 'mega_menu_text' ); ?>
          </div>
          <?php
          if ( get_field( 'mega_menu_cta' ) ) :
            $mega_menu_cta = get_field( 'mega_menu_cta' );
            ?>
            <div class="cta-holder">
              <a href="<?php echo $mega_menu_cta['url'];?>" target="<?php echo $mega_menu_cta['target'];?>" class="default-button-b default-button-b-blue allupper"><?php echo $mega_menu_cta['title'];?></a>
            </div>
          <?php endif; ?>
      </div>
    </div>
  </div>
</nav>
<?php endforeach; wp_reset_postdata(); endif; ?>
