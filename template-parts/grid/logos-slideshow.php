<?php foreach( $page_opening_scegli_slide as $post ) : setup_postdata($page_opening_scegli_slide); ?>
  <div class="logos-slideshow logos-slideshow-<?php echo $slide_behaviour; ?>-js">
    <?php if ( have_rows( 'gestione_loghi' ) ) : while ( have_rows( 'gestione_loghi' ) ) : the_row(); ?>
      <div>
        <div class="logo" style="background-image: url(<?php the_sub_field( 'logo' ); ?>)">
          <?php if ( get_sub_field( 'url' ) ) : ?>
            <a href="<?php the_sub_field( 'url' ); ?>" target="_blank" class="absl"></a>
          <?php endif; ?>
        </div>
      </div>
    <?php endwhile; endif; ?>
  </div>
<?php endforeach; wp_reset_postdata();?>
