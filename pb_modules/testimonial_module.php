<!-- testimonial_module-->
<section class="section-block testimonial-block <?php if(get_sub_field('background_colour_selection')) { ?>color-<?php the_sub_field('background_colour_selection'); ?><?php } ?>">
  <div class="container"  data-aos="fade-up" data-aos-duration="700">
    <div class="row">
      <div class="col-lg-12">
        <div class="testimonials">
        <?php if( have_rows('testimonial') ){ ?>
        <?php while( have_rows('testimonial') ): the_row(); ?>
          <div>
            <div class="row">
              <div class="col-lg-9">
                <div class="main-quote standard-style">
                  <?php the_sub_field('testimonial_content'); ?>
                </div>
                <div class="cite-quote standard-style">
                  <?php the_sub_field('testimonial_citation'); ?>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
        <?php } else { ?>
        <?php } ?>
        </div>
      </div>
      <div class="col-lg-3"></div>
    </div>
  </div>
  <?php if(get_sub_field('show_orange_angle')) { ?>
    <div class="testimonial-angle"></div>
  <?php } ?>
  <?php if(get_sub_field('show_orange_angle-alt')) { ?>
    <div class="testimonial-angle-alt"></div>
  <?php } ?>
  <?php if(get_sub_field('show_alternative_right_orange_angle')) { ?>
    <div class="testimonial-angle-alt-left"></div>
  <?php } ?>
</section>
