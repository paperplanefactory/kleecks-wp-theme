<!-- module-slideshow-logos -->
<section class="wrapper module-slideshow-logos txt-1">
  <a name="section-<?php echo $module_count; ?>" class="section-anchor"></a>
  <div class="<?php the_sub_field( 'module_vertical_top_space' ); ?> <?php the_sub_field( 'module_vertical_bottom_space' ); ?>">
    <div class="wrapper-padded">
      <div class="wrapper-padded-more-1230">
        <?php if ( get_sub_field( 'module_logos_slideshow_titolo' ) ) : ?>
          <h5 class="txt-1"><?php the_sub_field( 'module_logos_slideshow_titolo' ); ?></h5>
        <?php endif; ?>
        <?php $page_opening_scegli_slide = get_sub_field('module_logos_slideshow_scegli_slide');
        if( $page_opening_scegli_slide ) {
          $slide_behaviour = 'extended';
          include( locate_template( 'template-parts/grid/logos-slideshow.php' ) );
        }
        ?>
      </div>
    </div>
  </div>
</section>
<!-- module-slideshow-logos -->
