<!-- module-scrolling-text -->
<?php
$module_scrolling_text_text = get_sub_field( 'module_scrolling_text_text' );
$timer = (strlen($module_scrolling_text_text) / 1.4);
 ?>
<section class="wrapper module-scrolling-text txt-1">
  <a name="section-<?php echo $module_count; ?>" class="section-anchor"></a>
  <div class="<?php the_sub_field( 'module_vertical_top_space' ); ?> <?php the_sub_field( 'module_vertical_bottom_space' ); ?>">
    <div class="desktop-only">
      <div class="m-scroll">
        <div class="m-scroll__title">
          <div style="animation: scrollText <?php echo $timer; ?>s infinite linear;">
            <h2>
              <?php the_sub_field( 'module_scrolling_text_text' ); ?>
            </h2>
            <h2>
              <?php the_sub_field( 'module_scrolling_text_text' ); ?>
            </h2>
          </div>
        </div>
      </div>
    </div>
    <div class="mobile-only">
      <div class="mobile-scroll-text">
        <h2>
          <?php the_sub_field( 'module_scrolling_text_text' ); ?>
        </h2>
      </div>
    </div>

  </div>
</section>
<!-- module-scrolling-text -->
