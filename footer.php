<?php
// Paperplane _blankTheme - template per footer.
wp_reset_query();
global $acf_options_parameter;
global $footer_wrapper;
global $static_bloginfo_stylesheet_directory;
global $cta_url_modal_array;
$cta_url_modal_array = array_unique($cta_url_modal_array);
?>
<footer id="footer" class="bg-8 txt-4">
  <div class="wrapper">
    <div class="wrapper-padded">
      <div class="<?php echo $footer_wrapper; ?>">
        <div class="desktop-only">
          <div class="flex-hold flex-hold-4 margins-thin">
            <div class="flex-hold-child">
              <?php
              if ( has_nav_menu( 'footer-menu-1' ) ) {
                wp_nav_menu( array( 'theme_location' => 'footer-menu-1', 'container' => 'ul', 'menu_class' => 'footer-menu' ) );
              }
              ?>
            </div>
            <div class="flex-hold-child">
              <?php
              if ( has_nav_menu( 'footer-menu-2' ) ) {
                wp_nav_menu( array( 'theme_location' => 'footer-menu-2', 'container' => 'ul', 'menu_class' => 'footer-menu' ) );
              }
              ?>
            </div>
            <div class="flex-hold-child">
              <?php
              if ( has_nav_menu( 'footer-menu-3' ) ) {
                wp_nav_menu( array( 'theme_location' => 'footer-menu-3', 'container' => 'ul', 'menu_class' => 'footer-menu' ) );
              }
              ?>
            </div>
            <div class="flex-hold-child">
              <?php
              if ( has_nav_menu( 'footer-menu-4' ) ) {
                wp_nav_menu( array( 'theme_location' => 'footer-menu-4', 'container' => 'ul', 'menu_class' => 'footer-menu' ) );
              }
              ?>
            </div>
          </div>
        </div>

        <div class="mobile-only">
          <?php
          if ( has_nav_menu( 'footer-menu-1-mobile' ) ) {
            wp_nav_menu( array( 'theme_location' => 'footer-menu-1-mobile', 'container' => 'ul', 'menu_class' => 'footer-menu-top' ) );
          }
          ?>
        </div>

        <?php if ( have_rows( 'global_socials', 'option' ) ) : ?>
          <ul class="inline-socials">
            <?php while ( have_rows( 'global_socials', 'option' ) ) : the_row(); ?>
              <li>
                <a href="<?php the_sub_field( 'global_socials_profile_url' ); ?>" class="icon <?php the_sub_field( 'global_socials_icon' ); ?>" target="_blank" aria-label="Visit <?php the_sub_field( 'global_socials_profile_url' ); ?>" rel="noopener">
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
        <div class="flex-hold flex-hold-2 margins-thin">
          <div class="flex-hold-child">
            <?php the_field( 'footer_legal_notes', $acf_options_parameter ); ?>
          </div>
          <div class="flex-hold-child desktop-align-right">
            <?php the_field( 'footer_credits', $acf_options_parameter ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php
$args_modals = array(
  'post_type' => 'cpt_modal',
  'posts_per_page' => -1,
  'include' => $cta_url_modal_array
);
$my_modals = get_posts( $args_modals );
if ( !empty ( $my_modals ) ) {
  foreach ( $my_modals as $post ) : setup_postdata ( $post );
  get_template_part( 'template-parts/grid/modal' );
  endforeach; wp_reset_postdata();
}
?>

<?php wp_footer(); ?>
</body>
</html>
