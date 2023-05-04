<!-- image_and_content_module -->
<section class="standard-style section-block text-image-block <?php if(get_sub_field('background_colour_selection')) { ?>color-<?php the_sub_field('background_colour_selection'); ?><?php } ?> <?php if(get_sub_field('center_text_on_mobile')) { ?>center-mobile<?php } ?> <?php if(get_sub_field('add_extra_padding_to_text_block')) { ?>
extra-padding<?php } ?>">
  <?php if(get_sub_field('show_angle')) { ?>
    <div class="content-angle <?php if(get_sub_field('angle_style')) { ?>angle-style-<?php the_sub_field('angle_style'); ?><?php } ?>"></div>
  <?php } ?>
  <div class="container"   data-aos="fade-up" data-aos-duration="700">
    <div class="row">
      <?php if(get_sub_field('show_main_image_on_the_left')) { ?>
        <div class="col-lg-5 hide-900  <?php if(get_sub_field('make_the_image_fill_the_space')) { ?>fill-image<?php } ?>">
          <div class="image-block left-block">
            <?php if(get_sub_field('main_section_image')) { ?>
              <?php $image = get_sub_field('main_section_image');  $size = 'full'; {echo wp_get_attachment_image( $image, $size );} ?>
            <?php } ?>
          </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-6">
          <div class="content-block">
            <?php if(get_sub_field('title_section')) { ?>
              <?php the_sub_field('title_section'); ?>
            <?php } ?>
            <?php if(get_sub_field('sub_title_section')) { ?>
              <h3 class="style-h2"><?php the_sub_field('sub_title_section'); ?></h3>
            <?php } ?>
            <?php if(get_sub_field('content_section')) { ?>
              <?php the_sub_field('content_section'); ?>
            <?php } ?>

            <?php if(get_sub_field('content_image')) { ?>
              <?php $image = get_sub_field('content_image');  $size = 'full'; {echo wp_get_attachment_image( $image, $size );} ?>
            <?php } ?>
            <?php if(get_sub_field('cta_content')) { ?>
              <?php  $link = get_sub_field('cta_content'); if( $link ): $link_url = $link['url']; $link_title = $link['title'];$link_target = $link['target'] ? $link['target'] : '_self'; ?>
                <a class="btn bkl-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>
            <?php } ?>
          </div>
        </div>
        <div class="col-lg-5 show-900  <?php if(get_sub_field('make_the_image_fill_the_space')) { ?>fill-image<?php } ?>">
          <div class="image-block">
            <?php if(get_sub_field('main_section_image')) { ?>
              <?php $image = get_sub_field('main_section_image');  $size = 'full'; {echo wp_get_attachment_image( $image, $size );} ?>
            <?php } ?>
          </div>
        </div>

      <?php } else { ?>
        <div class="col-lg-6">
          <div class="content-block">
            <?php if(get_sub_field('title_section')) { ?>
              <?php the_sub_field('title_section'); ?>
            <?php } ?>
            <?php if(get_sub_field('sub_title_section')) { ?>
              <h3 class="style-h2"><?php the_sub_field('sub_title_section'); ?></h3>
            <?php } ?>
            <?php if(get_sub_field('content_section')) { ?>
              <?php the_sub_field('content_section'); ?>
            <?php } ?>

            <?php if(get_sub_field('content_image')) { ?>
              <?php $image = get_sub_field('content_image');  $size = 'full'; {echo wp_get_attachment_image( $image, $size );} ?>
            <?php } ?>
            <?php if(get_sub_field('cta_content')) { ?>
              <?php  $link = get_sub_field('cta_content'); if( $link ): $link_url = $link['url']; $link_title = $link['title'];$link_target = $link['target'] ? $link['target'] : '_self'; ?>
                <a class="btn bkl-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>
            <?php } ?>
          </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5  <?php if(get_sub_field('make_the_image_fill_the_space')) { ?>fill-image<?php } ?>">
          <div class="image-block">
            <?php if(get_sub_field('main_section_image')) { ?>
              <?php $image = get_sub_field('main_section_image');  $size = 'full'; {echo wp_get_attachment_image( $image, $size );} ?>
            <?php } ?>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
