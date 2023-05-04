<!-- header_banner_module -->
<section class="section-block banner-block <?php if(get_sub_field('background_colour_selection')) { ?>color-<?php the_sub_field('background_colour_selection'); ?><?php } ?> <?php if(get_sub_field('background_video_upload')) { ?>no-bg<?php } ?> <?php if(get_sub_field('background_image_bg')) { ?>background_image<?php } ?> " <?php if(get_sub_field('background_image_bg')) { ?>style="background-image:url(<?php the_sub_field('background_image_bg'); ?>"<?php } ?>>
  <?php if(get_sub_field('background_video_upload')) { ?>
    <div class="fullscreen-bg full-height">
      <video muted="" autoplay="" loop="" playsinline="" id="video_player" preload="auto" poster="<?php the_sub_field('background_image'); ?>">
        <source type="video/mp4" src="<?php the_sub_field('background_video_upload'); ?>">
      </video>
    </div>
  <?php } ?>
  <div class="container">
    <div class="row">
      <?php if(get_sub_field('background_video_upload')) { ?>
      <div class="col-lg-7">
        <div class="header-content-block">
          <?php if(get_sub_field('title_section')) { ?>
            <?php the_sub_field('title_section'); ?>
          <?php } ?>
          <?php if(get_sub_field('sub_title_section')) { ?>
            <h3><?php the_sub_field('sub_title_section'); ?></h3>
          <?php } ?>

          <?php if(get_sub_field('split_content')) { ?>
            <div class="row">
              <div class="col-lg-8">
                <?php if(get_sub_field('content_section')) { ?>
                  <?php the_sub_field('content_section'); ?>
                <?php } ?>
              </div>
              <div class="col-lg-4">
                <?php if(get_sub_field('cta_content')) { ?>
                  <?php  $link = get_sub_field('cta_content'); if( $link ): $link_url = $link['url']; $link_title = $link['title'];$link_target = $link['target'] ? $link['target'] : '_self'; ?>
                    <a class="btn bkl-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                  <?php endif; ?>
                <?php } ?>
              </div>
            </div>
          <?php } else { ?>
            <?php if(get_sub_field('content_section')) { ?>
              <?php the_sub_field('content_section'); ?>
            <?php } ?>
            <?php if(get_sub_field('cta_content')) { ?>
              <?php  $link = get_sub_field('cta_content'); if( $link ): $link_url = $link['url']; $link_title = $link['title'];$link_target = $link['target'] ? $link['target'] : '_self'; ?>
                <a class="btn bkl-btn <?php if(get_sub_field('wide_cta')) { ?>wide-btn<?php } ?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>
            <?php } ?>
          <?php } ?>
        </div>
      </div>
      <div class="col-lg-5">
        <?php if(get_sub_field('main_section_image')) { ?>
          <div class="background-image <?php if(get_sub_field('set_the_background_image_to_cover_the_area')) { ?>contain-background<?php } ?>" style="background-image:url(<?php the_sub_field('main_section_image'); ?>)">
            <?php if(get_sub_field('main_section_image')) { ?>
              <?php $image = get_sub_field('main_section_image');  $size = 'full'; {echo wp_get_attachment_image( $image, $size );} ?>
            <?php } ?>
          </div>
        <?php } ?>
      </div>
      <?php } else { ?>
        <div class="<?php if(get_sub_field('set_the_background_image_to_cover_the_area')) { ?>col-lg-5 <?php } else { ?>col-lg-6<?php } ?>">
          <div class="header-content-block">
            <?php if(get_sub_field('title_section')) { ?>
              <?php the_sub_field('title_section'); ?>
            <?php } ?>
            <?php if(get_sub_field('sub_title_section')) { ?>
              <h3><?php the_sub_field('sub_title_section'); ?></h3>
            <?php } ?>

            <?php if(get_sub_field('split_content')) { ?>
              <div class="row">
                <div class="col-lg-8">
                  <?php if(get_sub_field('content_section')) { ?>
                    <?php the_sub_field('content_section'); ?>
                  <?php } ?>
                </div>
                <div class="col-lg-4">
                  <?php if(get_sub_field('cta_content')) { ?>
                    <?php  $link = get_sub_field('cta_content'); if( $link ): $link_url = $link['url']; $link_title = $link['title'];$link_target = $link['target'] ? $link['target'] : '_self'; ?>
                      <a class="btn bkl-btn <?php if(get_sub_field('wide_cta')) { ?>wide-btn<?php } ?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                  <?php } ?>
                </div>
              </div>
            <?php } else { ?>
              <?php if(get_sub_field('content_section')) { ?>
                <?php the_sub_field('content_section'); ?>
              <?php } ?>
              <?php if(get_sub_field('cta_content')) { ?>
                <?php  $link = get_sub_field('cta_content'); if( $link ): $link_url = $link['url']; $link_title = $link['title'];$link_target = $link['target'] ? $link['target'] : '_self'; ?>
                  <a class="btn bkl-btn <?php if(get_sub_field('wide_cta')) { ?>wide-btn<?php } ?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
              <?php } ?>
            <?php } ?>
          </div>
        </div>
        <div class="<?php if(get_sub_field('set_the_background_image_to_cover_the_area')) { ?>col-lg-7 <?php } else { ?>col-lg-6<?php } ?> hide-900">
          <?php if(get_sub_field('main_section_image')) { ?>
            <div class="background-image-banner <?php if(get_sub_field('set_the_background_image_to_cover_the_area')) { ?>contain-background<?php } ?>" style="background-image:url(<?php the_sub_field('main_section_image'); ?>)">
              <?php if(get_sub_field('main_section_image')) { ?>
                <?php $image = get_sub_field('main_section_image');  $size = 'full'; {echo wp_get_attachment_image( $image, $size );} ?>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
        <div class="col-lg-12 show-900 mobile-image-banner">
          <?php if(get_sub_field('main_section_image')) { ?>
            <img src="<?php the_sub_field('main_section_image'); ?>" alt="<?php the_sub_field('title_section'); ?>" class="img-res"/>
          <?php } ?>
        </div>


      <?php } ?>
    </div>
  </div>
  <?php if(get_sub_field('show_angle')) { ?>
    <div class="header-angle <?php if(get_sub_field('angle_style')) { ?>angle-style-<?php the_sub_field('angle_style'); ?><?php } ?>"></div>
  <?php } ?>
</section>
