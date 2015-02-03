<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package megatherium
 */

get_header(); ?>
<div class="main-sec">
<div class="col-md-8">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <div class="slider-img">
            <img src="http://hd.wallpaperswide.com/thumbs/shopping-t2.jpg" alt="img1">
        </div>
      <div class="carousel-caption">
      
      </div>
    </div>
    <div class="item">
        <div class="slider-img">
            <img src="http://en.clipdealer.com/preview/image/000/836/631/previews/6--836631-Shopping%20Bags.jpg" alt="img2">
        </div>
        <div class="carousel-caption">
       
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
   
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    
  </a>
</div>
</div>
<div class="slider-side col-md-4">
    <div class="content1">
        <div class="img1 col-xs-4">
            <img src="http://wpuploads.appadvice.com/wp-content/uploads/2013/11/Product-RED.jpg">
        </div>
        <div class="img-desc1 col-xs-8">
            <h4>Sample Text</h4>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
    <div class="content2">
        <div class="img-desc2 col-xs-8">
            <h4>Sample Text</h4>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="img2 col-xs-4">
            <img src="http://images.appleinsider.com/product-red-ipod-mock2.gif">
        </div>
        
    </div>
</div>
</div>
<?php get_footer(); ?>