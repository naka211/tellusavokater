<meta charset="utf-8">
<link href="images/icon-fav.ico" rel="shortcut icon"/>
<meta name="author" content="tho" /> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title>Index</title>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.css" />
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
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

      $('.fancybox-media').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        helpers : {
          media : {}
        }
      });

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
  

<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type='text/javascript' src='js/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='js/jquery.easing.1.3.js'></script>

<script type='text/javascript' src='js/tho.js'> </script> 

   