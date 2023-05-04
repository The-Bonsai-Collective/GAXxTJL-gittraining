<!-- basic_cta_module -->
<section class="standard-style section-block basic-cta-module <?php if(get_sub_field('background_colour_selection')) { ?>color-<?php the_sub_field('background_colour_selection'); ?><?php } ?>">

  <?php if(get_sub_field('show_orange_angle')) { ?>
  <div class="bcta-angle"></div>
  <?php } ?>

  <div class="container"  data-aos="fade-up" data-aos-duration="700">
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8 text-center">
        <?php if(get_sub_field('title_section')) { ?><h2><?php the_sub_field('title_section'); ?></h2><?php } ?>
      </div>
      <div class="col-lg-2"></div>
    </div>
    <div class="row">
      <div class="col-lg-12 text-center">
        <?php  $link = get_sub_field('section_link'); if( $link ): $link_url = $link['url']; $link_title = $link['title'];$link_target = $link['target'] ? $link['target'] : '_self'; ?>
          <a class="btn bkl-btn bkl-btn-black" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
