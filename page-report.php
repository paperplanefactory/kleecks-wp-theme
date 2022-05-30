<?php
/**
*  Paperplane _blankTheme
 * Template Name: Report
*/
get_header(); ?>
<?php if ( post_password_required() ) : ?>
  <section class="wrapper module-text txt-1">
    <div class="module-paddings-top module-paddings-bottom">
      <div class="wrapper-padded">
        <div class="wrapper-padded-more-600">
          <div class="form-hold">
            <?php echo get_the_password_form(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php else : ?>
  <section class="wrapper module-text txt-1">
    <div class="iframe-embed">
      <?php the_field ( 'iframe_content' ); ?>
    </div>
  </section>
<?php endif; ?>
<?php get_footer(); ?>
