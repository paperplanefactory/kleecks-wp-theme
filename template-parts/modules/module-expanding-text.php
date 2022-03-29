<!-- module-expanding-text -->
<div class="wrapper module-expanding-text">
  <a name="section-<?php echo $module_count; ?>" class="section-anchor"></a>
  <div class="<?php the_sub_field( 'module_vertical_top_space' ); ?> <?php the_sub_field( 'module_vertical_bottom_space' ); ?>">
    <div class="wrapper-padded">
      <div class="wrapper-padded-container">
        <div class="wrapper-padded-more-810">
          <?php if ( have_rows( 'module_faq_subject_repeater' ) ) : while ( have_rows( 'module_faq_subject_repeater' ) ) : the_row(); ?>
            <div class="expanding-topic">
              <h2 class="txt-8"><?php the_sub_field( 'module_faq_subject_repeater_subject' ); ?></h2>
              <?php
              if ( have_rows( 'module_faq_subject_repeater_subject_repeater' ) ) :
                $faq_counter = 0;
                while ( have_rows( 'module_faq_subject_repeater_subject_repeater' ) ) : the_row();
                $faq_counter ++;
                ?>
                <div class="expanding-block">
                  <div class="expander-top">
                    <button class="expander exp-open" aria-expanded="false"><span class="faq-counter"><?php echo $faq_counter; ?>.</span> <?php the_sub_field( 'module_faq_subject_repeater_subject_repeater_question' ); ?><span class="exp-arrow exp-plus"></span></button>
                  </div>
                  <div class="expandable-content">
                    <div class="inner">
                      <div class="content-styled txt-1 last-child-no-margin">
                        <?php the_sub_field( 'module_faq_subject_repeater_subject_repeater_answer' ); ?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile; endif; ?>
            </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- module-expanding-text -->
