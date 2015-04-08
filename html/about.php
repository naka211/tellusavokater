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

          <?php require_once('cate3.php'); ?>

          <div class="template">
            <h2>Virksomheder</h2>
            <p>Herunder finder du de spørgsmål, vi oftest støder på, når samtalen omhandler virksomhedsrådgivning:</p>
            <h4>Hvordan starter jeg?</h4>
            <p>At starte egen virksomhed er en kompliceret affære. Du skal have styr på dit forretningskoncept, på økonomien og på den struktur, din virksomhed skal have. Du skal derfor have kontakt med både en virksomhedsrådgiver, en revisor og en advokat. Vi har det hele i huset hos TELLUS Advokater.</p>
            <h4>Skal jeg oprette et selskab?</h4>
            <p>Et selskab kan være en god idé, hvis du gerne vil holde virksomheden og privaten adskilt, eller hvis du nemt skal kunne optage flere medejere i firmaet.</p>
            <h4>Hvordan klarer jeg papirarbejdet?</h4>
            <p>Virksomhedens kontrakter udgør en stor opgave. Du bør lade en advokat gennemgå kontrakterne for at sikre, at de overholder formelle krav, og at du ikke har overset noget af ”det med småt”. TELLUS Advokater kan også hjælpe dig med at finde en ekstern bogholder, hvis du vil have bogholderiet og lønudbetalingerne lagt ”ud af huset”.</p>
            <h4>Hvad er virksomhedspant?</h4>
            <p>Virksomhedspant er en pantsætning typisk af din virksomheds varelager, inventar og fakturaer. Virksomhedspantet skal tinglyses, men det begrænser ikke køb og salg af dine varer på samme måde som en almindelig pantsætning. Du kan altså uden at spørge panthaveren sælge det pantsatte varelager som led i den almindelige drift af din virksomhed</p>
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
            <p><strong>For mere information omkring virksomheder, kontakt venligst:</strong></p>
            <p>Ellen Marie Sørensen, advokat (L)<br>
            Marianne Rask, advokat<br>
            Jacob Carl, advokat</p>
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