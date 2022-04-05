<div class="wrapper txt-8">
  <div class="wrapper-padded">
    <div class="wrapper-padded-more-810">
      <div class="page-opening-simple-spacer alignleft page-opening-text">
        <div class="last-child-no-margin">
          <?php if ( $page_breadcrumbs === 'yes' && function_exists( 'bcn_display' ) ) : ?>
            <div class="breadcrumbs-holder undelinked-links" typeof="BreadcrumbList" vocab="http://schema.org/">
              <?php bcn_display(); ?>
            </div>
          <?php endif; ?>
          <div class="mobile-only">
            <?php if ( get_field( 'page_opening_title_mobile' ) ) : ?>
              <h1><?php the_field( 'page_opening_title_mobile' ); ?></h1>
            <?php elseif ( get_field( 'page_opening_title' ) ) : ?>
              <h1><?php the_field( 'page_opening_title' ); ?></h1>
            <?php else : ?>
              <h1><?php the_title(); ?></h1>
            <?php endif; ?>
          </div>
          <div class="desktop-only">
            <?php if ( get_field( 'page_opening_title' ) ) : ?>
              <h1><?php the_field( 'page_opening_title' ); ?></h1>
            <?php else : ?>
              <h1><?php the_title(); ?></h1>
            <?php endif; ?>
          </div>
          <?php if ( get_field( 'page_opening_subtitle' ) ) : ?>
            <p><?php the_field( 'page_opening_subtitle' ); ?></p>
          <?php endif; ?>
        </div>
        <?php if ( have_rows( 'page_opening_composizione_elenco' ) ) : ?>
          <ul class="page-opening-list">
            <?php while ( have_rows( 'page_opening_composizione_elenco' ) ) : the_row(); ?>
              <li>
                <?php the_sub_field( 'page_opening_composizione_elenco_voce' ); ?>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>


        <div class="clearer"></div>
        <?php get_template_part( 'template-parts/grid/page-opening/opening-cta-default' ); ?>
      </div>
    </div>
  </div>
</div>
