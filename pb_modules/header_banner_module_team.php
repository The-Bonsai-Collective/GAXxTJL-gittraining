<!-- header_banner_module -->
<section class="section-block team-banner banner-block background-image <?php if(get_sub_field('background_colour_selection')) { ?>color-<?php the_sub_field('background_colour_selection'); ?><?php } ?>" style="background-image:url(<?php the_sub_field('main_section_image'); ?>">
  <div class="container">
    <div class="row">
        <div class="col-lg-10">
          <div class="header-content-block">
            <?php if(get_sub_field('title_section')) { ?>
              <h1><?php the_sub_field('title_section'); ?></h1>
            <?php } ?>
            <?php if(get_sub_field('sub_title_section')) { ?>
              <h3><?php the_sub_field('sub_title_section'); ?></h3>
            <?php } ?>
          </div>
        </div>
    </div>
  </div>
</section>
