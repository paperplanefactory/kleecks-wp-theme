<!-- module-jobs-listing -->
<?php
$args_jobs = array(
  'post_type' => 'cpt_jobs',
  'posts_per_page' => -1
);
$my_jobs = get_posts( $args_jobs );
if ( !empty ( $my_jobs ) ) : ?>
<section class="wrapper module-jobs-listing txt-1">
  <a name="section-<?php echo $module_count; ?>" class="section-anchor"></a>
  <div class="<?php the_sub_field( 'module_vertical_top_space' ); ?> <?php the_sub_field( 'module_vertical_bottom_space' ); ?>">
    <div class="wrapper-padded">
      <div class="wrapper-padded-container">
        <div class="wrapper-padded-more-810">
          <?php foreach ( $my_jobs as $post ) : setup_postdata ($post ); ?>
          <div class="job-listed txt-1">
            <?php if ( get_field( 'sede_area_di_lavoro' ) ) : ?>
              <h5 class="allupper txt-5"><?php the_field( 'sede_area_di_lavoro' ); ?></h5>
            <?php endif; ?>
            <h3 class="txt-8"><?php the_title(); ?></h3>
            <?php if ( get_field( 'descrizione' ) ) : ?>
              <p class="txt-1"><?php the_field( 'descrizione' ); ?></p>
            <?php endif; ?>
            <?php if ( get_field( 'link' ) ) : ?>
              <div class="cta-holder">
                <a href="<?php the_field( 'link' ); ?>" class="default-button-b allupper" target="_blank" title="<?php the_title(); ?>">Read more</a>
              </div>
            <?php endif; ?>
          </div>
          <?php endforeach; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<!-- module-jobs-listing -->

<?php if ( get_sub_field( 'module_logos_slideshow_titolo' ) ) : ?>
  <h5 class="txt-1"><?php the_sub_field( 'module_logos_slideshow_titolo' ); ?></h5>
<?php endif; ?>
<?php if ( get_sub_field( 'module_logos_slideshow_titolo' ) ) : ?>
  <h5 class="txt-1"><?php the_sub_field( 'module_logos_slideshow_titolo' ); ?></h5>
<?php endif; ?>
