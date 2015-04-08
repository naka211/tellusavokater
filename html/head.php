<meta charset="utf-8">
<link href="images/icon-fav.ico" rel="shortcut icon"/>
<meta name="author" content="tho" /> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title>Index</title>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.css" />
<link type="text/css" rel="stylesheet" href="css/styles-moblie.css" />
<script type='text/javascript' src="js/jquery-1.8.3.min.js"></script>
  
<script type="text/javascript">
WebFontConfig = {
  google: { families: [ 'Raleway::latin' ] }
};
(function() {
  var wf = document.createElement('script');
  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})(); </script>

<script type="text/javascript">
  $(document).ready(function() {
      //$('.cate-item:not(:first)').hide();
      //$('.w-cate h2:first').addClass('active');
      $('.cate-item').hide();
      $('.w-cate h2').click(function() {
          $('.active').removeClass('active');
          $('.cate-item').fadeOut('normal');
          if($(this).next('.cate-item').is(':hidden') == true) {
          $(this).addClass('active');
          $(this).next('.cate-item').fadeIn('normal');
          }
      });
      /*$('.w-cate h2').hover(function(){//over
          $('.iconDown').addClass('iconUp');
      },function() {//out
          $('.iconDown').removeClass('iconUp');
      });*/

      /*$('.w-cate h2').click (function(){
          if($('.iconDown').hasClass('iconDown')) {
            $('.iconDown').addClass('iconUp');
          } else
            $('.iconDown').removeClass('iconUp');
          });*/


  });
</script>

  

<!-- JS  MENU Top-Left jquery.mmenu.oncanvas.js-->
<script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>
<script type="text/javascript">
 $(document).ready(function() {
    $("#menu-left").mmenu({ 
       offCanvas: {
          position  : "right"
       }
    });
 });
</script>;.
  
<script type='text/javascript' src='js/jquery.min.js'></script>
<script type='text/javascript' src='js/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='js/tho.js'> </script> 

   