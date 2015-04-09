<!DOCTYPE html>
<html>
  <head>
      <?php require_once('head.php'); ?>  
  </head>
<body>
  <div id="page">
      <?php require_once('header.php'); ?> 
      <div id="content" class="w-content">  
        <div class="banner-box clearfix">
            <div id="banner" class="clearfix">  
              <img src="img/banner.jpg" alt="">
            </div> <!--#banner--> 
        </div><!--.banner-box-->

        <div class="eachBox"> 
          <div class="w_breadcrumb"><!-- START: Modules Anywhere -->
            <ul class="breadcrumb">
              <li><a class="pathway" href="/filippa/">Forside</a></li>
              <li class="active"><span>Site map</span></li>
            </ul><!-- END: Modules Anywhere -->
          </div>

          <div class="w-search">
            <input type="text" placeholder="Indtast søgeord her">
            <a class="btnGo" href="#"></a>
          </div>

          <?php require_once('cate2.php'); ?>

          <div class="sitemap">
            <h2>Site map</h2>
            <p><strong>Categories</strong></p>
            <ul class="list-sitemap">
              <li><a href="#">Link 1</a></li>
              <li><a href="#">Link 2</a></li>
            </ul>
          </div>

          
          
        </div>

      <?php require_once('footer.php'); ?>
      </div><!--End #content--> 
      <?php require_once('menu-left.php'); ?>
    </div><!--End #Page--> 
  </body>
</html>