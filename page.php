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






</style>
  

<div style="height:100vh;    display: flex;    justify-content: center;    align-items: center;">
HEADER HELLO TO GET SOME SCROLL ACTION
</div>



<div class="sticky-content">
  <!-- image -->
  <div class="zoomer">
    <div class="images">
      <div class="clipper">
        <img data-speed="0.5" src="https://wallpapercave.com/wp/vxkQgbd.jpg">
      </div>
    </div>
  </div>
  <!-- text -->
  <div class="wrapper">
    <div class="images">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non quam blandit, eleifend dui eget, dapibus enim. Aliquam erat volutpat. Maecenas in metus egestas, faucibus leo quis, vestibulum arcu. Duis hendrerit facilisis nibh ut imperdiet. Fusce suscipit placerat dolor, vitae euismod risus. Ut lectus magna, iaculis vel ex vel, efficitur rhoncus sapien. Suspendisse potenti. Sed gravida feugiat nisi, in volutpat nulla porta non. Vestibulum ac sodales felis. Pellentesque sed dui eu justo efficitur iaculis. Quisque at magna vel est posuere dapibus facilisis eget libero. Phasellus egestas sit amet nisi non dapibus. Nulla lectus mi, vulputate aliquam leo a, luctus iaculis odio.</p>

      <p>Nam dolor nisi, pretium nec mollis cursus, aliquet vitae nunc. Cras dignissim ut velit elementum bibendum. Fusce rutrum velit ac lorem cursus, in consequat turpis posuere. Quisque ut purus vel ipsum cursus faucibus. Etiam nec elit sapien. Duis ultrices commodo diam at scelerisque. In in leo velit. In interdum tellus diam, ultrices fermentum lectus maximus a.</p>

      <p>Phasellus cursus tellus mi, eget bibendum nunc viverra in. Etiam ultricies placerat gravida. Ut et urna a lectus tincidunt faucibus a ac leo. Suspendisse potenti. Donec justo lorem, consectetur aliquam pellentesque id, ultrices dapibus justo. Suspendisse maximus dictum ante eu cursus. Quisque velit leo, pretium ac nisl vel, porttitor vehicula tellus. Vestibulum nec diam ante. Vivamus ornare enim at arcu dictum ultrices. Aenean laoreet magna sit amet quam tempus, nec pulvinar tellus rhoncus. Suspendisse potenti. Duis auctor felis ex, ac ultricies ipsum blandit non. Morbi elit orci, posuere et scelerisque vel, pulvinar ac velit. Sed sit amet dapibus dolor. Proin quis nisi sed erat ullamcorper vehicula. Vestibulum consectetur dolor suscipit purus gravida, quis pellentesque elit laoreet.</p>

      <p>Praesent et risus et neque pulvinar placerat vitae sed diam. Maecenas nisl odio, mattis in quam at, pulvinar ullamcorper nunc. Etiam aliquam enim vel turpis ultrices efficitur. Praesent sed faucibus justo. In pellentesque dictum quam, at porttitor sem. Phasellus sed dolor at justo auctor facilisis id ut nulla. Nulla ut nisl rutrum, sollicitudin odio et, hendrerit nisi. Morbi sit amet odio iaculis, fermentum neque eget, lobortis nulla. Duis viverra sem enim, faucibus hendrerit nisi iaculis ac. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras auctor leo sit amet elit condimentum, nec feugiat erat sollicitudin. Vestibulum semper accumsan enim in bibendum. Etiam urna dui, fringilla quis facilisis a, lacinia in augue. Curabitur at ipsum sollicitudin, gravida nisl ac, egestas ex. Aliquam ut cursus purus, eget hendrerit felis.</p>

      <p>Aenean pharetra auctor nibh, quis mattis felis ullamcorper eu. Proin tincidunt erat in nulla tempor, eget sollicitudin mauris porttitor. Sed non congue eros. Praesent sed lobortis massa. Suspendisse ornare odio vitae velit ultricies, in tempus nulla malesuada. Praesent a mauris nec nisl convallis volutpat. Nullam ligula lorem, sodales ultrices porttitor non, pretium eget risus. Fusce suscipit magna id enim scelerisque, ac convallis magna rutrum.
      </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non quam blandit, eleifend dui eget, dapibus enim. Aliquam erat volutpat. Maecenas in metus egestas, faucibus leo quis, vestibulum arcu. Duis hendrerit facilisis nibh ut imperdiet. Fusce suscipit placerat dolor, vitae euismod risus. Ut lectus magna, iaculis vel ex vel, efficitur rhoncus sapien. Suspendisse potenti. Sed gravida feugiat nisi, in volutpat nulla porta non. Vestibulum ac sodales felis. Pellentesque sed dui eu justo efficitur iaculis. Quisque at magna vel est posuere dapibus facilisis eget libero. Phasellus egestas sit amet nisi non dapibus. Nulla lectus mi, vulputate aliquam leo a, luctus iaculis odio.</p>

      <p>Nam dolor nisi, pretium nec mollis cursus, aliquet vitae nunc. Cras dignissim ut velit elementum bibendum. Fusce rutrum velit ac lorem cursus, in consequat turpis posuere. Quisque ut purus vel ipsum cursus faucibus. Etiam nec elit sapien. Duis ultrices commodo diam at scelerisque. In in leo velit. In interdum tellus diam, ultrices fermentum lectus maximus a.</p>

      <p>Phasellus cursus tellus mi, eget bibendum nunc viverra in. Etiam ultricies placerat gravida. Ut et urna a lectus tincidunt faucibus a ac leo. Suspendisse potenti. Donec justo lorem, consectetur aliquam pellentesque id, ultrices dapibus justo. Suspendisse maximus dictum ante eu cursus. Quisque velit leo, pretium ac nisl vel, porttitor vehicula tellus. Vestibulum nec diam ante. Vivamus ornare enim at arcu dictum ultrices. Aenean laoreet magna sit amet quam tempus, nec pulvinar tellus rhoncus. Suspendisse potenti. Duis auctor felis ex, ac ultricies ipsum blandit non. Morbi elit orci, posuere et scelerisque vel, pulvinar ac velit. Sed sit amet dapibus dolor. Proin quis nisi sed erat ullamcorper vehicula. Vestibulum consectetur dolor suscipit purus gravida, quis pellentesque elit laoreet.</p>

      <p>Praesent et risus et neque pulvinar placerat vitae sed diam. Maecenas nisl odio, mattis in quam at, pulvinar ullamcorper nunc. Etiam aliquam enim vel turpis ultrices efficitur. Praesent sed faucibus justo. In pellentesque dictum quam, at porttitor sem. Phasellus sed dolor at justo auctor facilisis id ut nulla. Nulla ut nisl rutrum, sollicitudin odio et, hendrerit nisi. Morbi sit amet odio iaculis, fermentum neque eget, lobortis nulla. Duis viverra sem enim, faucibus hendrerit nisi iaculis ac. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras auctor leo sit amet elit condimentum, nec feugiat erat sollicitudin. Vestibulum semper accumsan enim in bibendum. Etiam urna dui, fringilla quis facilisis a, lacinia in augue. Curabitur at ipsum sollicitudin, gravida nisl ac, egestas ex. Aliquam ut cursus purus, eget hendrerit felis.</p>

      <p>Aenean pharetra auctor nibh, quis mattis felis ullamcorper eu. Proin tincidunt erat in nulla tempor, eget sollicitudin mauris porttitor. Sed non congue eros. Praesent sed lobortis massa. Suspendisse ornare odio vitae velit ultricies, in tempus nulla malesuada. Praesent a mauris nec nisl convallis volutpat. Nullam ligula lorem, sodales ultrices porttitor non, pretium eget risus. Fusce suscipit magna id enim scelerisque, ac convallis magna rutrum.
      </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non quam blandit, eleifend dui eget, dapibus enim. Aliquam erat volutpat. Maecenas in metus egestas, faucibus leo quis, vestibulum arcu. Duis hendrerit facilisis nibh ut imperdiet. Fusce suscipit placerat dolor, vitae euismod risus. Ut lectus magna, iaculis vel ex vel, efficitur rhoncus sapien. Suspendisse potenti. Sed gravida feugiat nisi, in volutpat nulla porta non. Vestibulum ac sodales felis. Pellentesque sed dui eu justo efficitur iaculis. Quisque at magna vel est posuere dapibus facilisis eget libero. Phasellus egestas sit amet nisi non dapibus. Nulla lectus mi, vulputate aliquam leo a, luctus iaculis odio.</p>

      <p>Nam dolor nisi, pretium nec mollis cursus, aliquet vitae nunc. Cras dignissim ut velit elementum bibendum. Fusce rutrum velit ac lorem cursus, in consequat turpis posuere. Quisque ut purus vel ipsum cursus faucibus. Etiam nec elit sapien. Duis ultrices commodo diam at scelerisque. In in leo velit. In interdum tellus diam, ultrices fermentum lectus maximus a.</p>

      <p>Phasellus cursus tellus mi, eget bibendum nunc viverra in. Etiam ultricies placerat gravida. Ut et urna a lectus tincidunt faucibus a ac leo. Suspendisse potenti. Donec justo lorem, consectetur aliquam pellentesque id, ultrices dapibus justo. Suspendisse maximus dictum ante eu cursus. Quisque velit leo, pretium ac nisl vel, porttitor vehicula tellus. Vestibulum nec diam ante. Vivamus ornare enim at arcu dictum ultrices. Aenean laoreet magna sit amet quam tempus, nec pulvinar tellus rhoncus. Suspendisse potenti. Duis auctor felis ex, ac ultricies ipsum blandit non. Morbi elit orci, posuere et scelerisque vel, pulvinar ac velit. Sed sit amet dapibus dolor. Proin quis nisi sed erat ullamcorper vehicula. Vestibulum consectetur dolor suscipit purus gravida, quis pellentesque elit laoreet.</p>

      <p>Praesent et risus et neque pulvinar placerat vitae sed diam. Maecenas nisl odio, mattis in quam at, pulvinar ullamcorper nunc. Etiam aliquam enim vel turpis ultrices efficitur. Praesent sed faucibus justo. In pellentesque dictum quam, at porttitor sem. Phasellus sed dolor at justo auctor facilisis id ut nulla. Nulla ut nisl rutrum, sollicitudin odio et, hendrerit nisi. Morbi sit amet odio iaculis, fermentum neque eget, lobortis nulla. Duis viverra sem enim, faucibus hendrerit nisi iaculis ac. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras auctor leo sit amet elit condimentum, nec feugiat erat sollicitudin. Vestibulum semper accumsan enim in bibendum. Etiam urna dui, fringilla quis facilisis a, lacinia in augue. Curabitur at ipsum sollicitudin, gravida nisl ac, egestas ex. Aliquam ut cursus purus, eget hendrerit felis.</p>

      <p>Aenean pharetra auctor nibh, quis mattis felis ullamcorper eu. Proin tincidunt erat in nulla tempor, eget sollicitudin mauris porttitor. Sed non congue eros. Praesent sed lobortis massa. Suspendisse ornare odio vitae velit ultricies, in tempus nulla malesuada. Praesent a mauris nec nisl convallis volutpat. Nullam ligula lorem, sodales ultrices porttitor non, pretium eget risus. Fusce suscipit magna id enim scelerisque, ac convallis magna rutrum.
      </p>
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
