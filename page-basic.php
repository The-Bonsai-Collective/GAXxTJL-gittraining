<?php /* Template Name:Basic */?>
<?php get_header(); ?>
<?php if( have_rows('page_builder_basic') ): while ( have_rows('page_builder_basic') ) : the_row(); if( get_row_layout() == 'content_basic_moduile' ): ?>
  <?php include("pb_modules/basic_content_module.php"); ?>
<?php elseif ( get_row_layout() == 'contact_form_module' ): ?>
  <?php include("pb_modules/contact_form_module.php"); ?>
<?php endif; // end text block layouts ?>
<?php endwhile; ?>
<?php endif;  ?>
<?php get_footer(); ?>
