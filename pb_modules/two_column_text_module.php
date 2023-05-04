<!-- two_column_text_module -->
<section class="standard-style section-block two-column-text-block <?php if(get_sub_field('background_colour_selection')) { ?>color-<?php the_sub_field('background_colour_selection'); ?><?php } ?>">
  <div class="container"  data-aos="fade-up" data-aos-duration="700">
    <?php if(get_sub_field('title_section')) { ?>
    <div class="row">
      <div class="col-lg-6">
        <h2><?php the_sub_field('title_section'); ?></h2>
      </div>
      <div class="col-lg-6"></div>
    </div>
    <?php } ?>
    <div class="row">
      <div class="col-lg-12">
        <div class="text-cols">
          <?php the_sub_field('content_section'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
