<!-- 3_column_list_module -->
<section class="standard-style section-block column-lists">
  <?php if(get_sub_field('show_orange_angle')) { ?>
    <div class="list-angle"></div>
  <?php } ?>
  <div class="container"  data-aos="fade-up" data-aos-duration="700">
    <div class="row">
      <div class="col-lg-12">
        <?php if(get_sub_field('title_section')) { ?><h2><?php the_sub_field('title_section'); ?></h2><?php } ?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="list-columns">
          <?php the_sub_field('list_content'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
