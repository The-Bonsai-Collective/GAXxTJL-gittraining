<?php get_header(); ?>
<style>
  /** image **/
.zoomer {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100vw;
  height: 100vh;
  overflow: hidden;
}

.zoomer .wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100vw;
  height: 100vh;
  overflow: hidden;
}

.zoomer .images {
  width: 100vw;
  height: 100vh;
  overflow: hidden;
  /*transform: scale(0, 0);*/
  z-index: -1;
}

.zoomer .images .clipper {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100vw;
  height: 100vh;
  overflow: hidden;
}

.zoomer .images .clipper img {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  height: 100%;
  width: 100%;
  filter: brightness(70%);
  border-radius:50px;
}

.zoomer .text {
  position: absolute;
  z-index: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 0;
  margin: 0;
  overflow: hidden;
  width: 90%;
}

.zoomer .text .clipper {
  display: flex;
  flex-direction: column;
}

.zoomer .text .clipper h2 {
  text-align: center;
}

/** text **/

.sticky-content {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100vw;
}

.sticky-content .wrapper {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  width: 90%;
  z-index:1
}

.sticky-content .wrapper .text {
  display: flex;
  align-items: flex-start;
  flex-direction: row;
  width: calc(50%);
}

.sticky-content .wrapper .images {
  width: calc(50%);
  height: auto;
}

</style>
  
<div style="height:100vh;  display: flex; align-items: center; justify-content: center;">
  Hello - bit of space to get the scroll
</div>
<div class="sticky-content">
  <div class="zoomer">
    <div class="images">
      <div class="clipper">
        <img data-speed="0.5" src="https://exagen.co.uk.webheads.temporarywebsiteaddress.com/wp-content/uploads/2023/04/Background.jpg">
      </div>
    </div>
  </div>
  <div class="wrapper">
    <div class="text">
      <div class="clipper">
        <h1>BLANK SPACE</h1>
      </div>
    </div>
    <div class="images">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus metus nisl, non tempor augue euismod in. Phasellus malesuada felis a aliquam efficitur. Suspendisse sollicitudin sagittis ex. Ut vestibulum libero ligula, eget venenatis ipsum tristique at. Mauris feugiat eleifend justo, quis accumsan eros gravida quis. Phasellus quis facilisis tellus. Aliquam dolor metus, lacinia ac elit quis, venenatis semper metus. Morbi blandit ornare mauris, et rutrum mi pellentesque eget.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus metus nisl, non tempor augue euismod in. Phasellus malesuada felis a aliquam efficitur. Suspendisse sollicitudin sagittis ex. Ut vestibulum libero ligula, eget venenatis ipsum tristique at. Mauris feugiat eleifend justo, quis accumsan eros gravida quis. Phasellus quis facilisis tellus. Aliquam dolor metus, lacinia ac elit quis, venenatis semper metus. Morbi blandit ornare mauris, et rutrum mi pellentesque eget.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus metus nisl, non tempor augue euismod in. Phasellus malesuada felis a aliquam efficitur. Suspendisse sollicitudin sagittis ex. Ut vestibulum libero ligula, eget venenatis ipsum tristique at. Mauris feugiat eleifend justo, quis accumsan eros gravida quis. Phasellus quis facilisis tellus. Aliquam dolor metus, lacinia ac elit quis, venenatis semper metus. Morbi blandit ornare mauris, et rutrum mi pellentesque eget.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus metus nisl, non tempor augue euismod in. Phasellus malesuada felis a aliquam efficitur. Suspendisse sollicitudin sagittis ex. Ut vestibulum libero ligula, eget venenatis ipsum tristique at. Mauris feugiat eleifend justo, quis accumsan eros gravida quis. Phasellus quis facilisis tellus. Aliquam dolor metus, lacinia ac elit quis, venenatis semper metus. Morbi blandit ornare mauris, et rutrum mi pellentesque eget.</p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus metus nisl, non tempor augue euismod in. Phasellus malesuada felis a aliquam efficitur. Suspendisse sollicitudin sagittis ex. Ut vestibulum libero ligula, eget venenatis ipsum tristique at. Mauris feugiat eleifend justo, quis accumsan eros gravida quis. Phasellus quis facilisis tellus. Aliquam dolor metus, lacinia ac elit quis, venenatis semper metus. Morbi blandit ornare mauris, et rutrum mi pellentesque eget.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus metus nisl, non tempor augue euismod in. Phasellus malesuada felis a aliquam efficitur. Suspendisse sollicitudin sagittis ex. Ut vestibulum libero ligula, eget venenatis ipsum tristique at. Mauris feugiat eleifend justo, quis accumsan eros gravida quis. Phasellus quis facilisis tellus. Aliquam dolor metus, lacinia ac elit quis, venenatis semper metus. Morbi blandit ornare mauris, et rutrum mi pellentesque eget.</p>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus metus nisl, non tempor augue euismod in. Phasellus malesuada felis a aliquam efficitur. Suspendisse sollicitudin sagittis ex. Ut vestibulum libero ligula, eget venenatis ipsum tristique at. Mauris feugiat eleifend justo, quis accumsan eros gravida quis. Phasellus quis facilisis tellus. Aliquam dolor metus, lacinia ac elit quis, venenatis semper metus. Morbi blandit ornare mauris, et rutrum mi pellentesque eget.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus metus nisl, non tempor augue euismod in. Phasellus malesuada felis a aliquam efficitur. Suspendisse sollicitudin sagittis ex. Ut vestibulum libero ligula, eget venenatis ipsum tristique at. Mauris feugiat eleifend justo, quis accumsan eros gravida quis. Phasellus quis facilisis tellus. Aliquam dolor metus, lacinia ac elit quis, venenatis semper metus. Morbi blandit ornare mauris, et rutrum mi pellentesque eget.</p>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus metus nisl, non tempor augue euismod in. Phasellus malesuada felis a aliquam efficitur. Suspendisse sollicitudin sagittis ex. Ut vestibulum libero ligula, eget venenatis ipsum tristique at. Mauris feugiat eleifend justo, quis accumsan eros gravida quis. Phasellus quis facilisis tellus. Aliquam dolor metus, lacinia ac elit quis, venenatis semper metus. Morbi blandit ornare mauris, et rutrum mi pellentesque eget.</p>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus metus nisl, non tempor augue euismod in. Phasellus malesuada felis a aliquam efficitur. Suspendisse sollicitudin sagittis ex. Ut vestibulum libero ligula, eget venenatis ipsum tristique at. Mauris feugiat eleifend justo, quis accumsan eros gravida quis. Phasellus quis facilisis tellus. Aliquam dolor metus, lacinia ac elit quis, venenatis semper metus. Morbi blandit ornare mauris, et rutrum mi pellentesque eget.</p>
                                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus metus nisl, non tempor augue euismod in. Phasellus malesuada felis a aliquam efficitur. Suspendisse sollicitudin sagittis ex. Ut vestibulum libero ligula, eget venenatis ipsum tristique at. Mauris feugiat eleifend justo, quis accumsan eros gravida quis. Phasellus quis facilisis tellus. Aliquam dolor metus, lacinia ac elit quis, venenatis semper metus. Morbi blandit ornare mauris, et rutrum mi pellentesque eget.</p>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus metus nisl, non tempor augue euismod in. Phasellus malesuada felis a aliquam efficitur. Suspendisse sollicitudin sagittis ex. Ut vestibulum libero ligula, eget venenatis ipsum tristique at. Mauris feugiat eleifend justo, quis accumsan eros gravida quis. Phasellus quis facilisis tellus. Aliquam dolor metus, lacinia ac elit quis, venenatis semper metus. Morbi blandit ornare mauris, et rutrum mi pellentesque eget.</p>
    </div>
  </div>
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
