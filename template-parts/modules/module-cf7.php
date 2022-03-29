<!-- module-cf7 -->
<section class="wrapper module-cf7 txt-1 bg-10">
  <a name="section-<?php echo $module_count; ?>" class="section-anchor"></a>
  <div class="<?php the_sub_field( 'module_vertical_top_space' ); ?> <?php the_sub_field( 'module_vertical_bottom_space' ); ?>">
    <div class="wrapper-padded">
      <div class="wrapper-padded-container">
        <div class="wrapper-padded-more-810">
          <div class="form-block content-styled">
            <?php if ( get_sub_field( 'module_form_text' ) ) : ?>
              <div class=" last-child-no-margin">
                <?php the_sub_field( 'module_form_text' ); ?>
              </div>
            <?php endif; ?>
            <?php
            $module_form_choose_form = get_sub_field( 'module_form_choose_form' );
            echo apply_shortcodes( '[contact-form-7 id="' . $module_form_choose_form[0] . '"]' );
            ?>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- module-cf7 -->
