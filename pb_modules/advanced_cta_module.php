<!-- advanced_cta_module -->
<section class="standard-style section-block fancy-cta-module <?php if(get_sub_field('background_colour_selection')) { ?>color-<?php the_sub_field('background_colour_selection'); ?><?php } ?>">
  <div class="container  zeed-me"  data-aos="fade-up" data-aos-duration="700">
    <div class="row">
      <div class="col-lg-1"></div>
      <div class="col-lg-10">
        <?php if(get_sub_field('title_section')) { ?><?php the_sub_field('title_section'); ?><?php } ?>
      </div>
      <div class="col-lg-1"></div>
    </div>
    <div class="row">
      <div class="col-lg-1"></div>
      <div class="col-lg-5">
        <?php if(get_sub_field('sub_title_section')) { ?>
          <h3><?php the_sub_field('sub_title_section'); ?></h3>
        <?php } ?>
        <?php if(get_sub_field('content_section')) { ?>
          <?php the_sub_field('content_section'); ?>
        <?php } ?>
      </div>
      <div class="col-lg-5">
        <?php  $link = get_sub_field('section_link_one'); if( $link ): $link_url = $link['url']; $link_title = $link['title'];$link_target = $link['target'] ? $link['target'] : '_self'; ?>
          <a class="btn bkl-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
        <?php  $link = get_sub_field('section_link_two'); if( $link ): $link_url = $link['url']; $link_title = $link['title'];$link_target = $link['target'] ? $link['target'] : '_self'; ?>
          <a class="btn bkl-btn bkl-btn-black" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
      </div>
      <div class="col-lg-1"></div>
    </div>
  </div>
  <?php if(get_sub_field('show_orange_angle')) { ?>
  <div class="acta-angle"></div>
  <?php } ?>
</section>
