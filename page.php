<?php get_header(); ?>
<style>
section.pin-this {
  position: relative;
}
.image-block {
  position: absolute;
  z-index: -1;
  width: 100%;
  top: 10px;
}
.text-block {
  position: absolute;
  z-index: 2;
  width: 100%;
  top: 10px;
}
</style>
  




<div style="height:100vh;  display: flex; align-items: center; justify-content: center;">
  Hello - bit of space to get the scroll
</div>

<section class="pin-this">
  <div class="image-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-12"><img src="https://exagen.co.uk.webheads.temporarywebsiteaddress.com/wp-content/uploads/2023/04/Background.jpg"></div>
      </div>
    </div>
  </div>
  <div class="text-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-12"></div>
      </div>
      <div class="row">
        <div class="col-lg-6"></div>
        <div class="col-lg-6">
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus metus nisl, non tempor augue euismod in. Phasellus malesuada felis a aliquam efficitur. Suspendisse sollicitudin sagittis ex. Ut vestibulum libero ligula, eget venenatis ipsum tristique at. Mauris feugiat eleifend justo, quis accumsan eros gravida quis. Phasellus quis facilisis tellus. Aliquam dolor metus, lacinia ac elit quis, venenatis semper metus. Morbi blandit ornare mauris, et rutrum mi pellentesque eget.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus metus nisl, non tempor augue euismod in. Phasellus malesuada felis a aliquam efficitur. Suspendisse sollicitudin sagittis ex. Ut vestibulum libero ligula, eget venenatis ipsum tristique at. Mauris feugiat eleifend justo, quis accumsan eros gravida quis. Phasellus quis facilisis tellus. Aliquam dolor metus, lacinia ac elit quis, venenatis semper metus. Morbi blandit ornare mauris, et rutrum mi pellentesque eget.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus metus nisl, non tempor augue euismod in. Phasellus malesuada felis a aliquam efficitur. Suspendisse sollicitudin sagittis ex. Ut vestibulum libero ligula, eget venenatis ipsum tristique at. Mauris feugiat eleifend justo, quis accumsan eros gravida quis. Phasellus quis facilisis tellus. Aliquam dolor metus, lacinia ac elit quis, venenatis semper metus. Morbi blandit ornare mauris, et rutrum mi pellentesque eget.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus metus nisl, non tempor augue euismod in. Phasellus malesuada felis a aliquam efficitur. Suspendisse sollicitudin sagittis ex. Ut vestibulum libero ligula, eget venenatis ipsum tristique at. Mauris feugiat eleifend justo, quis accumsan eros gravida quis. Phasellus quis facilisis tellus. Aliquam dolor metus, lacinia ac elit quis, venenatis semper metus. Morbi blandit ornare mauris, et rutrum mi pellentesque eget.</p>
          </div>
          <div class="content-end"></div>
        </div>
      </div>
    </div>
  </div>
</section>





<div style="height:100vh;  display: flex; align-items: center; justify-content: center;">
  Hello - and im out
</div>






<?php if( have_rows('page_builder') ): while ( have_rows('page_builder') ) : the_row(); if( get_row_layout() == 'header_banner_module' ): ?>
  <?php include("pb_modules/header_banner_module.php"); ?>
<?php elseif ( get_row_layout() == 'image_and_content_module' ): ?>
  <?php include("pb_modules/image_and_content_module.php"); ?>
<?php elseif ( get_row_layout() == 'two_column_text_module' ): ?>
  <?php include("pb_modules/two_column_text_module.php"); ?>
<?php elseif ( get_row_layout() == 'featured_box_module' ): ?>
  <?php include("pb_modules/featured_box_module.php"); ?>
<?php elseif ( get_row_layout() == 'whats_included_module' ): ?>
  <?php include("pb_modules/whats_included_module.php"); ?>
<?php elseif ( get_row_layout() == 'faq_module' ): ?>
  <?php include("pb_modules/faq_module.php"); ?>
<?php elseif ( get_row_layout() == 'contact_form_module' ): ?>
  <?php include("pb_modules/contact_form_module.php"); ?>
<?php elseif ( get_row_layout() == 'testimonial_module' ): ?>
  <?php include("pb_modules/testimonial_module.php"); ?>
<?php elseif ( get_row_layout() == 'content_slider_module' ): ?>
  <?php include("pb_modules/content_slider_module.php"); ?>
<?php elseif ( get_row_layout() == 'three_reasons_module' ): ?>
  <?php include("pb_modules/three_reasons_module.php"); ?>
<?php elseif ( get_row_layout() == 'advanced_cta_module' ): ?>
  <?php include("pb_modules/advanced_cta_module.php"); ?>
<?php elseif ( get_row_layout() == 'basic_cta_module' ): ?>
  <?php include("pb_modules/basic_cta_module.php"); ?>
<?php elseif ( get_row_layout() == '3_column_list_module' ): ?>
  <?php include("pb_modules/three_column_list_module.php"); ?>
<?php endif; // end text block layouts ?>
<?php endwhile; ?>
<?php endif;  ?>
<?php get_footer(); ?>
