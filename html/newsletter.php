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

          <?php require_once('cate2.php'); ?>

          <div class="contact">
            <h2>Tilmeld nyhedsbrev</h2>
            <p>Du kan forvente 1 månedligt nyhedsbrev fra TELLUS Advokater med relevante nyheder. Du kan altid afmelde nyhedsbrevet igen.</p>
            <div class="frm-contact clearfix">
              <label for="">Navn</label>
              <input type="text" placeholder="Skriv dit navn her.">
              <label for="">E-mail</label>
              <input type="text">
              <button class="btnSend">Send</button>
              <button class="btnSlet">Slet</button>
            </div>
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
          </div>

          <div class="news">
            <h2 class="black">Seneste nyt fra <span class="uppercase">TELLUS</span></h2>
            <article class="news-item">
              <p><strong><a href="#">Forskellen er stor på ejerskifteforsikringer</a></strong></p>
              <p><a href="#">Advokat Marianne Rask har skrevet en artikel om hvad du skal sikre dig, når du tegner en ejerskifteforsikring. ..</a></p>
              <p class="date">Oprettet d.11-03-2015</p>
            </article>
            <article class="news-item">
              <p><strong><a href="#">Forskellen er stor på ejerskifteforsikringer</a></strong></p>
              <p><a href="#">Advokat Marianne Rask har skrevet en artikel om hvad du skal sikre dig, når du tegner en ejerskifteforsikring. ..</a></p>
              <p class="date">Oprettet d.11-03-2015</p>
            </article>
          </div>
          
        </div>

      <?php require_once('footer.php'); ?>
      </div><!--End #content--> 
      <?php require_once('menu-left.php'); ?>
    </div><!--End #Page--> 
  </body>
</html>