<!-- content_slider_module -->
<section class="section-block block-slide-module">
  <div class="container"  data-aos="fade-up" data-aos-duration="700">
    <div class="row">
      <div class="col-lg-10">
        <?php if(get_sub_field('title_section')) { ?><?php the_sub_field('title_section'); ?><?php } ?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <?php if(get_sub_field('content_section')) { ?>
          <?php the_sub_field('content_section'); ?>
        <?php } ?>
      </div>
    </div>
    <div class="block-slide">
    <?php if( have_rows('slider_content') ){ ?>
    <?php while( have_rows('slider_content') ): the_row(); ?>
      <div>
        <div class="row margin-right">
          <div class="col-lg-6">
            <div class="image-block">
              <?php $image = get_sub_field('slider_image');  $size = 'full'; {echo wp_get_attachment_image( $image, $size );} ?>
            </div>
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-5">
            <div class="slider-content">
              <div>
                <?php the_sub_field('slider_content'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
    <?php } else { ?>
    <?php } ?>
    </div>
  </div>
  <?php if(get_sub_field('show_orange_angle')) { ?>
    <div class="slider-angle"></div>
  <?php } ?>

</section>
