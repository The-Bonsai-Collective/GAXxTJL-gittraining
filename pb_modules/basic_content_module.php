<!-- two_column_text_module -->
<section class="standard-style section-block two-column-text-block basic-no-cols basic-content">
  <div class="container"  data-aos="fade-up" data-aos-duration="700">
    <?php if(get_sub_field('title_section')) { ?>
    <div class="row">
      <div class="col-lg-12">
        <h2><?php the_sub_field('title_section'); ?></h2>
      </div>
    </div>
    <?php } ?>
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <?php the_sub_field('content_section'); ?>
      </div>
      <div class="col-lg-3"></div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <hr/>
      </div>
    </div>
  </div>
</section>
