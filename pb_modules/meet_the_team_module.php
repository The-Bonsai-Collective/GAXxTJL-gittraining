<!-- two_column_text_module -->
<section class="standard-style section-block meet-the-team basic-no-cols">
  <div class="container-full">
    <div class="row g-0 row-eq-height">
      <?php if( have_rows('team_member') ){ ?>
      <?php while( have_rows('team_member') ): the_row(); ?>
        <div class="col-lg-6">
          <div class="row g-0 row-eq-height full-100"  data-aos="fade-up" data-aos-duration="700">
            <div class="col-lg-6">
              <div class="team-image background-image" style="background-image:url(<?php the_sub_field('team_photo'); ?>)"></div>
            </div>
            <div class="col-lg-6">
              <div class="green-box">
                <h3><?php the_sub_field('team_name'); ?></h3>
                <?php the_sub_field('team_bio'); ?>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
      <?php } ?>
    </div>
  </div>
</section>
