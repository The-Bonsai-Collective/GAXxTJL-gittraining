<!-- faq_module -->
<section class="standard-style section-block faq-module  <?php if(get_sub_field('background_colour_selection')) { ?>color-<?php the_sub_field('background_colour_selection'); ?><?php } ?>">
  <div class="container"  data-aos="fade-up" data-aos-duration="700">
    <div class="row">
      <div class="col-lg-3">
        <?php if(get_sub_field('title_section')) { ?><h2><?php the_sub_field('title_section'); ?></h2><?php } ?>
      </div>
      <div class="col-lg-8">
        <div class="accordion" id="accordionExamples">
          <?php if( have_rows('faq_item') ){ ?>
          <?php $i = 0; ?>
          <?php while( have_rows('faq_item') ): the_row(); ?>
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingOne">
              <button class="accornu-<?php echo $i; ?> accordion-button <?php if (!$i) { ?><?php } else { ?>collapsed<?php } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne-<?php echo $i; ?>">
                <?php the_sub_field('item_title'); ?>
              </button>
            </h3>
            <div id="collapseOne-<?php echo $i; ?>" class="accordion-collapse collapse <?php if (!$i) { ?>show<?php } ?>" aria-labelledby="headingOne-<?php echo $i; ?>" data-bs-parent="#accordionExamples">
              <div class="accordion-body standard-style">
                <?php the_sub_field('item_content'); ?>
              </div>
            </div>
          </div>
          <?php $i++;?>
          <?php endwhile; ?>
          <?php } ?>
        </div>
      </div>
      <div class="col-lg-1"></div>
    </div>
  </div>
</section>
