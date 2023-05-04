<!-- featured_box_module -->
<section class="standard-style section-block block-module <?php if(get_sub_field('green_colour_scheme')) { ?>green-boxes<?php } ?>">
  <div class="container"  data-aos="fade-up" data-aos-duration="700">
    <div class="row">
      <div class="col-lg-12 text-center">
        <?php if(get_sub_field('title_section')) { ?><h2><?php the_sub_field('title_section'); ?></h2><?php } ?>
      </div>
    </div>
    <div class="row row-eq-height over-hidden">
    <?php if( have_rows('box_item') ){ ?>
    <?php while( have_rows('box_item') ): the_row(); ?>
      <div class="col-lg-6">
        <div class="block-box">
          <div class="block-header text-center">
            <?php $image = get_sub_field('box_logo');  $size = 'full'; {echo wp_get_attachment_image( $image, $size );} ?>
          </div>
          <div class="block-content">
            <?php the_sub_field('box_list_items'); ?>
            <?php  $link = get_sub_field('box_cta'); if( $link ): $link_url = $link['url']; $link_title = $link['title'];$link_target = $link['target'] ? $link['target'] : '_self'; ?>
              <a class="btn bkl-btn bkl-btn-black" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
    <?php } else { ?>
    <?php } ?>
    </div>
  </div>
</section>
