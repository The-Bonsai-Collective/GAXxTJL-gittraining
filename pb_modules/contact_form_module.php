<!-- contact_form_module -->
<section class="standard-style section-block contact-module color-white">
  <div class="container"  data-aos="fade-up" data-aos-duration="700">
    <div class="row">
      <div class="col-lg-1"></div>
      <div class="col-lg-4 center-mobile">
        <?php if(get_sub_field('title_section')) { ?><h3><?php the_sub_field('title_section'); ?></h3><?php } ?>
      </div>
      <div class="col-lg-6 hide-900">
        <?php if(get_sub_field('content_section')) { ?><?php the_sub_field('content_section'); ?><?php } ?>
      </div>
      <div class="col-lg-1"></div>
    </div>
    <div class="row">
      <div class="col-lg-1 hide-900"></div>
      <div class="col-lg-10 hide-900">
        <?php if(get_sub_field('contact_form_shortcode')) { ?>
          <?php the_sub_field('contact_form_shortcode'); ?>
        <?php } ?>
      </div>
      <div class="col-lg-1 hide-900"></div>
    </div>
    <div class="row show-900 text-center">
      <div class="col-lg-12">
        <a class="btn bkl-btn" href="<?php bloginfo('url'); ?>/contact/" target="_self">Contact us today</a>
      </div>
    </div>
  </div>
</section>
