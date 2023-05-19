<?php get_header(); ?>
<style>
  .container {
  min-height: 100vh;
  border: 1px solid cyan;
  position: relative;
  overflow: hidden;
}

.image-container {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
}

.image-frame {
  height: 100vh;
  width: 100%;
  border: 1px solid orange;
  z-index: 1;
  position: absolute;
  top: 0;
  left: 0;
}

.image {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  object-fit: cover;
}

.section {
  height: 100vh;
  border: 1px solid pink;
  position: absolute;
  top: 0;
/*   right: 0; */
/*   bottom: 0; */
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 2;
}

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
  display: flex;
  flex-direction: row;
  width: calc(50%);
  height: auto;
}

.sticky-content .wrapper .images ul {
  display: flex;
  flex-direction: column;
  width: 100%;
}

.sticky-content .wrapper .images ul li {
  display: flex;
  margin: 0;
  position: relative;
  height: 80vh;
  width: 100%;
  overflow: hidden;
}

.sticky-content .wrapper .images ul li img {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  height: 100%;
}

.sticky-content .wrapper .images ul li:not(:first-of-type) {
  margin-top: 5%;
}

.sticky-content .wrapper .images ul li:not(:first-of-type) img {
  /*margin-top: 50%;*/


</style>
  

<div class="container">
  <h1>Start content</h1>
</div>
<div class="container pin-container">
  
  <div class="image-container">
    <div class="image-frame image-frame-1">
      <svg class="image">
        <rect width="100%" height="100%" fill="#90caf9"></rect>
      </svg>
    </div>
    <div class="image-frame image-frame-2">
      <svg class="image">
        <rect width="100%" height="100%" fill="#a5d6a7"></rect>
      </svg>
    </div>
  </div>
  
  <div class="section section-1">
    <h1>Section 1 content</h1>
  </div>
  <div class="section section-2">
    <h1>Section 2 content</h1>
  </div>
</div>
<div class="container">
  <h1>More content</h1>
</div>



<div class="sticky-content">
  <div class="wrapper">
    <div class="text">
      <div class="clipper">
        <h1>Title</h1>
        <p>Text</p>
      </div>
    </div>
    <div class="images">
      <ul>
        <li><img data-speed="0" src="https://wallpapercave.com/wp/vxkQgbd.jpg"></li>
        <li><img data-speed="0.2" src="https://wallpapercave.com/wp/vxkQgbd.jpg"></li>
      </ul>
    </div>
  </div>
</div>

<div class="zoomer">
    <div class="images">
      <div class="clipper">
        <img data-speed="0.5" src="https://wallpapercave.com/wp/vxkQgbd.jpg">
      </div>
    </div>
    <div class="text" data-speed="0.1">
      <div class="clipper">
        <h2>Lipsum</h2>
      </div>
    </div>
  </div>


<div class="sticky-content">
  <div class="wrapper">
    <div class="text">
      <div class="clipper">
        <h1>This works well now</h1>
        <p>Text</p>
      </div>
    </div>
    <div class="images">
      <ul>
        <li><img data-speed="0" src="https://wallpapercave.com/wp/vxkQgbd.jpg"></li>
        <li><img data-speed="0.2" src="https://wallpapercave.com/wp/vxkQgbd.jpg"></li>
      </ul>
    </div>
  </div>
</div>

<div class="sticky-content">
  <div class="wrapper">
    <div class="text">
      <div class="clipper">
        <h1>This works well also but....</h1>
        <p>Text</p>
      </div>
    </div>
    <div class="images">
      <ul>
        <li><img data-speed="0" src="https://wallpapercave.com/wp/vxkQgbd.jpg"></li>
        <li><img data-speed="0.2" src="https://wallpapercave.com/wp/vxkQgbd.jpg"></li>
      </ul>
    </div>
  </div>
</div>

<div class="zoomer">
    <div class="images">
      <div class="clipper">
        <img data-speed="0.5" src="https://wallpapercave.com/wp/vxkQgbd.jpg">
      </div>
    </div>
    <div class="text" data-speed="0.1">
      <div class="clipper">
        <h2>Lipsum</h2>
      </div>
    </div>
  </div>


<div class="sticky-content">
  <div class="wrapper">
    <div class="text">
      <div class="clipper">
        <h1>This latest title isn't working</h1>
        <p>Text</p>
      </div>
    </div>
    <div class="images">
      <ul>
        <li><img data-speed="0" src="https://wallpapercave.com/wp/vxkQgbd.jpg"></li>
        <li><img data-speed="0.2" src="https://wallpapercave.com/wp/vxkQgbd.jpg"></li>
      </ul>
    </div>
  </div>
</div>





<header class="container-gsap">
  <h2 class="container__headline">Tonya this is/isnt working!</h2>
</header>
<div class="pin-spacer">
  <section class="container container-gsap hero">
    <div class="hero__inner">
      <div class="hero__images row">
        <div class="col-lg-12">
          <img class="hero__image" src="https://exagen.co.uk.webheads.temporarywebsiteaddress.com/wp-content/uploads/2023/04/Background.jpg">
        </div>
      </div>
      <div class="hero__content row">
        <div class="col-lg-6"></div>
        <div class="col-lg-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sagittis arcu sed urna aliquam rutrum. In nec augue vel diam molestie euismod vitae sed augue. Nulla lobortis volutpat odio, nec ultrices purus aliquet ac. Aliquam a dolor quis orci vulputate aliquet in ut metus. Ut gravida, est consectetur commodo cursus, eros turpis facilisis est, id dictum mauris ipsum et elit. Nullam sed porttitor justo. Aliquam vel volutpat nunc. Curabitur ut nisi non nisi vehicula scelerisque et eu purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum maximus magna sed varius tempus. Sed efficitur tortor orci, non congue neque aliquet quis. Morbi aliquam est malesuada mi suscipit, sed blandit velit facilisis.

Nullam molestie gravida nisi, ac porta velit imperdiet eget. Quisque ex eros, vestibulum et libero id, volutpat feugiat quam. Vestibulum faucibus mi non quam ornare, nec faucibus risus vulputate. Suspendisse porttitor lacinia dolor, ac posuere velit malesuada non. Morbi placerat mauris sollicitudin mauris tincidunt viverra viverra quis nibh. Etiam placerat eleifend ex quis pretium. Sed porta sollicitudin convallis. Aliquam massa libero, varius eu varius nec, ornare nec diam. Pellentesque malesuada enim ac tortor hendrerit, nec faucibus odio vestibulum. Nullam lobortis urna ut ligula bibendum, vel euismod ligula porta. Phasellus vitae porta lectus. Nunc tristique condimentum nulla non tristique. Nunc sed lacus tristique, cursus urna et, lobortis ante. Mauris non nibh eu ipsum auctor aliquam. Etiam eu quam placerat, iaculis dolor a, rutrum elit.

Ut eget sem justo. Sed sodales tempus scelerisque. Nam dolor velit, congue quis augue quis, dapibus venenatis odio. Donec vehicula vel magna nec tincidunt. Nulla in orci at tortor auctor dictum. Nunc malesuada felis sed sem placerat suscipit. Ut ut velit ullamcorper, viverra ex et, mattis neque. Duis id magna nisl.

Praesent auctor nec velit id posuere. Suspendisse nec hendrerit odio, vel mattis lectus. Maecenas sagittis vehicula egestas. Vivamus lobortis volutpat felis sed consectetur. Praesent bibendum non quam ac ullamcorper. In quis lectus sed ligula bibendum varius ac et mi. Nam ac metus pharetra, convallis risus at, elementum orci. Curabitur viverra vel orci non accumsan. Nunc mattis auctor felis, nec imperdiet enim dictum a. Aliquam vel sem quis velit ornare vulputate eget ut purus.

Vivamus quis ante auctor, egestas ante ut, fermentum lacus. Sed eget mi ac lectus varius auctor. Curabitur ac sapien orci. Cras nisl tellus, maximus eu eleifend vitae, laoreet in eros. Donec rutrum mi ac augue tincidunt elementum. Vivamus vitae bibendum est. Curabitur tincidunt elit dui, et imperdiet mauris auctor eu. In a fringilla quam. Nullam fermentum hendrerit lacus, nec cursus urna pharetra vitae. Duis vestibulum felis eu malesuada finibus. Quisque consectetur, mauris eu ornare efficitur, dui nunc interdum diam, a laoreet quam enim ac ipsum. Integer at erat velit. In a tincidunt urna, vel mollis metus.</div>
      </div>
    </div>
  </section>
</div>
<footer class="container-gsap">
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
