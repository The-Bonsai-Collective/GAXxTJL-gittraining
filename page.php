<?php get_header(); ?>
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
