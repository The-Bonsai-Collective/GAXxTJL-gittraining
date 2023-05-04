<!-- whats_included_module -->

<section class="section-block tab-module hide-900 <?php if(get_sub_field('green_colour_scheme')) { ?>green_colour_scheme<?php } ?> <?php if(get_sub_field('white_background')) { ?>white-background<?php } ?>">

<?php if(get_sub_field('show_small_orange_angle')) { ?>
<div class="whats-angle"></div>
<?php } ?>


  <div class="container"  data-aos="fade-up" data-aos-duration="700">
    <div class="row">
      <div class="col-lg-12">
        <?php if(get_sub_field('title_section')) { ?><h2><?php the_sub_field('title_section'); ?></h2><?php } ?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <?php if( have_rows('whats_included_item') ){ ?>
          <?php $i = 0; ?>
          <?php while( have_rows('whats_included_item') ): the_row(); ?>
            <li class="nav-item" role="presentation">
              <a class="nav-link <?php if (!$i) { ?>active<?php } ?>" id="<?php echo $i; ?>-tab" data-bs-toggle="tab" data-bs-target="#tab-<?php echo $i; ?>" type="button" role="tab" aria-controls="home" aria-selected="true"><span><?php the_sub_field('item_title'); ?></span></a>
            </li>
          <?php $i++;?>
          <?php endwhile; ?>
          <?php } else { ?>
          <?php } ?>
        </ul>
      </div>
      <div class="col-lg-8">
        <div class="tab-content standard-style" id="myTabContent">
          <?php if( have_rows('whats_included_item') ){ ?>
          <?php $i = 0; ?>
          <?php while( have_rows('whats_included_item') ): the_row(); ?>
            <div class="tab-pane fade <?php if (!$i) { ?>show active<?php } ?>" id="tab-<?php echo $i; ?>" role="tabpanel" aria-labelledby="<?php echo $i; ?>-tab"><?php the_sub_field('item_content'); ?>
              <?php if(get_sub_field('section_cta')) { ?>
                <?php  $link = get_sub_field('section_cta'); if( $link ): $link_url = $link['url']; $link_title = $link['title'];$link_target = $link['target'] ? $link['target'] : '_self'; ?>
                  <a class="btn bkl-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
              <?php } ?>
            </div>
          <?php $i++;?>
          <?php endwhile; ?>
          <?php } else { ?>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

<?php if(get_sub_field('show_large_orange_angle')) { ?>
  <div class="whats-angle-large"></div>
  <?php } ?>


</section>

<section class="section-block tab-module show-900  <?php if(get_sub_field('green_colour_scheme')) { ?>green_colour_scheme<?php } ?> <?php if(get_sub_field('white_background')) { ?>white-background<?php } ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <?php if(get_sub_field('title_section')) { ?><h2><?php the_sub_field('title_section'); ?></h2><?php } ?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="accordion" id="accordionExample">
          <?php if( have_rows('whats_included_item') ){ ?>
          <?php $i = 0; ?>
          <?php while( have_rows('whats_included_item') ): the_row(); ?>
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingOne">
              <button class="accornu-<?php echo $i; ?> accordion-button <?php if (!$i) { ?><?php } else { ?>collapsed<?php } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne-<?php echo $i; ?>">
                <?php the_sub_field('item_title'); ?>
              </button>
            </h3>
            <div id="collapseOne-<?php echo $i; ?>" class="accordion-collapse collapse <?php if (!$i) { ?>show<?php } ?>" aria-labelledby="headingOne-<?php echo $i; ?>" data-bs-parent="#accordionExample">
              <div class="accordion-body standard-style">
                <?php the_sub_field('item_content'); ?>
                <?php if(get_sub_field('section_cta')) { ?>
                  <?php  $link = get_sub_field('section_cta'); if( $link ): $link_url = $link['url']; $link_title = $link['title'];$link_target = $link['target'] ? $link['target'] : '_self'; ?>
                    <a class="btn bkl-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                  <?php endif; ?>
                <?php } ?>
              </div>
            </div>
          </div>
          <?php $i++;?>
          <?php endwhile; ?>
          <?php } ?>
        </div>

      </div>
    </div>
  </div>
</section>
