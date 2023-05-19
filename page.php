<?php get_header(); ?>
<style>


/* two */

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

.zoomer .wrapper .images {
  width: 100vw;
  height: 100vh;
  overflow: hidden;
  /*transform: scale(0, 0);*/
  z-index: -1;
}

.zoomer .wrapper .images .clipper {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100vw;
  height: 100vh;
  overflow: hidden;
}

.zoomer .wrapper .images .clipper img {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  height: 100%;
  width: 100%;
  filter: brightness(70%);
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




wrap-all {
  position: relative;
}
.bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  z-index: -1;
  background-image: url(https://picsum.photos/1613/1099);
  background-size: auto 100vh;
  background-repeat: no-repeat;
  background-position: top center;
}

section {
  width: 100%;
  height: 100vh;
  border-bottom: 1px solid black;
}

.wrap {
  position: relative;
  top: 50%;
  left: 50%;
  width: fit-content;
  overflow: hidden;
}
.wrap h1 {
  position: relative;
  font-family: sans-serif;
  font-size: 4vw;
  color: black;
  margin: 0;
}
.wrap h2 {
  position: relative;
  font-family: sans-serif;
  font-size: 4vw;
  color: green;
  margin: 0;
}


</style>
  

<<section id="holdstart" class="panel">
  <div class="wrap center">
    <h1>Start Panel</h1>
  </div>
</section>

<div class="wrap-all">
  <div class="bg"></div>
  
  <div class="start-trig"></div>
  <section id="holdone" class="panel">
    <div class="wrap center">
      <h2 class="lines">Section One</h2>
      <h2 class="lines">Have a COKE.</h2>
    </div>
  </section>

  <section id="holdtwo" class="panel">
    <div class="wrap center">
      <h2 class="lines">Section Two</h2>
      <h2 class="lines">AND.</h2>
    </div>
  </section>

  <section id="holdthree" class="panel">
    <div class="wrap center">
      <h2 class="lines">Section Three</h2>
      <h2 class="lines">a SMILE!</h2>
    </div>
  </section>

</div>

<section id="holdstart" class="panel">
  <div class="wrap center">
    <h1>End Panel</h1>
  </div>
</section>




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
