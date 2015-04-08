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
          <div class="w-search">
            <input type="text" placeholder="Indtast søgeord her">
            <a class="btnGo" href="#"></a>
          </div>
          
          <?php require_once('cate.php'); ?>

          <div class="asked-question mb20">
            <h2>Ofte stillede spørgsmål</h2>
            <p>I menuen til venstre kan du se hvilke spørgsmål, vi oftest bliver stillet.<br>
            Klik på punkterne for at se alle spørgsmål/svar.<br>
            Har du et spørgsmål, som du ikke kan finde svar på, er du velkommen til at skrive til os på tellus@tellusadvokater.dk<br>
            Eller klik på knappen "Skriv spørgsmål" ude til højre.</p>
          </div>
          <div class="face clearfix">
            <div class="face-left">
              <a class="mb5 d-block" href="#"><img src="img/face1.png" alt=""></a>
              <a href="#"><img src="img/face2.png" alt=""></a>
            </div>
            <div class="face-right">
              <p>Vær den første af vennerne, der synes godt om dette.</p>
            </div>
            <div class="clearfix"></div>
            <div class="line mt15"><img src="img/line.jpg" alt=""></div>
            <a class="btn" href="#">- Skriv spørgsmål</a>
          </div>
          <a class="btn2" href="newsletter.php">- Tilmeld nyhedsbrev</a>
          <a class="btn2" href="#">- Download pjecer her</a>
        </div>

      <?php require_once('footer.php'); ?>
      </div><!--End #content--> 
      <?php require_once('menu-left.php'); ?>
    </div><!--End #Page--> 
  </body>
</html>