<?php get_header(); ?>
<section class="">
  <div class="container">
    <div class="row">
      <div class="col-lg-12"><h1>BRANCH EDITS</h1><p>making edits on a branch to see what it does</p></div>
    </div>
  </div>
</section>


  
<header class="container">
  <h2 class="container__headline">Wanna see something neat?</h2>
</header>
<div class="pin-spacer" style="order: 0; place-self: auto; grid-area: auto / auto / auto / auto; z-index: auto; float: none; flex-shrink: 1; display: flex; margin: 0px; inset: auto; position: relative; flex-basis: auto; overflow: visible; box-sizing: border-box; width: 1261px; height: 2460px; padding: 0px 0px 1640px;"><section class="container hero" style="translate: none; rotate: none; scale: none; inset: 0px auto auto 0px; margin: 0px; max-width: 1261px; width: 1261px; max-height: 820px; height: 820px; padding: 0px;">
  <div class="hero__inner">
    <div class="hero__images"><img class="hero__image" src="https://images.unsplash.com/photo-1508781197106-d8c535dcf276?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE0NTg5fQ" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0%);"></div>
    <div class="hero__content">
      <div class="hero__headline"><span>How Neat is That?</span></div>
    </div>
  </div>
</section></div>
<footer class="container">
  <h2 class="container__headline">That's pretty neat.</h2>
</footer>
  








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
