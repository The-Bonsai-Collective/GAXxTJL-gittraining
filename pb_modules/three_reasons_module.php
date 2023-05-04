<!-- three_reasons_module -->
<section class="standard-style section-block insights-basic-module <?php if(get_sub_field('alternative_layout')) { ?>alternative_layout<?php } ?>" >
  <div class="container"  data-aos="fade-up" data-aos-duration="700">
    <div class="row">
      <div class="col-lg-8">
        <?php if(get_sub_field('title_section')) { ?><h3><?php the_sub_field('title_section'); ?></h3><?php } ?>
        <?php if(get_sub_field('content_section')) { ?>
          <?php the_sub_field('content_section'); ?>
        <?php } ?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="insight-slide <?php if(get_sub_field('alternative_layout')) { ?>box-alt-layout<?php } ?>">
          <?php if( have_rows('reason_item') ){ ?>
          <?php while( have_rows('reason_item') ): the_row(); ?>
            <div>
              <div class="insight-block">
                <div class="reason-image-block">
                    <?php $image = get_sub_field('reason_image');  $size = 'full'; {echo wp_get_attachment_image( $image, $size );} ?>
                </div>
                <div class="reason-content-block">
                  <h4><?php the_sub_field('reason_title'); ?></h4>
                  <?php the_sub_field('reason_content'); ?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
          <?php } else { ?>
          <?php } ?>
        </div>
      </div>
    </div>
    <?php if(get_sub_field('cta_section')) { ?>
    <div class="row">
      <div class="col-lg-12 text-center">
        <?php  $link = get_sub_field('cta_section'); if( $link ): $link_url = $link['url']; $link_title = $link['title'];$link_target = $link['target'] ? $link['target'] : '_self'; ?>
          <a class="btn bkl-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
      </div>
    </div>
  <?php } ?>
  </div>
</section>
