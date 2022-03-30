<!-- module-key-questions -->
<section class="wrapper module-key-questions txt-1">
  <a name="section-<?php echo $module_count; ?>" class="section-anchor"></a>
  <div class="<?php the_sub_field( 'module_vertical_top_space' ); ?> <?php the_sub_field( 'module_vertical_bottom_space' ); ?>">
    <div class="wrapper-padded">
      <div class="wrapper-padded-container">
        <div class="flex-hold flex-hold-key-questions">
          <div class="key-questions txt-8 bg-3">
            <?php if ( get_sub_field( 'module_keyquestions_topic_questions' ) ) : ?>
              <h5 class="allupper"><?php the_sub_field( 'module_keyquestions_topic_questions' ); ?></h5>
            <?php endif; ?>
            <?php
            if ( have_rows( 'module_keyquestions_questions_repeater' ) ) :
              $questions_counter = 0;
            ?>
              <ul class="key-questions-list">
                <?php
                while ( have_rows( 'module_keyquestions_questions_repeater' ) ) : the_row();
                $questions_counter ++;
                ?>
                  <li>
                    <span class="counter"><?php echo $questions_counter; ?>.</span> <?php the_sub_field( 'module_keyquestions_questions_repeater_question' ); ?>
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
          </div>
          <div class="key-questions-intro txt-1">
            <?php if ( get_sub_field( 'module_keyquestions_topic' ) ) : ?>
              <h4 class="allupper txt-5 topic-title"><?php the_sub_field( 'module_keyquestions_topic' ); ?></h4>
            <?php endif; ?>
            <div class="content-styled last-child-no-margin">
              <?php the_sub_field( 'module_keyquestions_content' ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- module-key-questions -->
