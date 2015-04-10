<?php 
defined('_JEXEC') or die;
$tmpl = JURI::base()."templates/forsidetheme/mobile/";

$doc = JFactory::getDocument();
$db = JFactory::getDBO();            

$option   = JRequest::getCmd('option');
$view   = JRequest::getCmd('view');

$temp   = JRequest::getString('id');
$temp   = explode(':', $temp);

$id   = $temp[0];

 /*Checking if we are making up an article page */
  if ($option == 'com_content' && $view == 'article' && $id)
 {        
    /* Trying to get CATEGORY title from DB */
    $db->setQuery('SELECT cat.title FROM #__categories cat RIGHT JOIN #__content cont ON cat.id = cont.catid WHERE cont.id='.$id);   
    $category_title = $db->loadResult();
               
  /* Printing category title*/
  if ($category_title) 
   {
      $tag =  new JHelperTags;
      $taginfo = $tag->getItemTags('com_content.article', $id);        
  }               
}


if ($option == 'com_contact' && ($view == 'category' or $view == 'contact') && $id)
 {            
      $tag =  new JHelperTags;
      $taginfo = $tag->getItemTags('com_contact.contact', $id); 
               
}

?>

<!DOCTYPE html>
<html>
<head>
<jdoc:include type="head" />
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo $tmpl;?>css/reset.css">
<link type="text/css" rel="stylesheet" href="<?php echo $tmpl;?>css/jquery.mmenu.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $tmpl;?>css/styles-moblie.css" />
<link rel="stylesheet" href="<?php echo $tmpl;?>fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
<script type='text/javascript' src="<?php echo $tmpl;?>js/jquery-1.8.3.min.js"></script>
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
  });
</script>
<!-- JS  MENU Top-Left jquery.mmenu.oncanvas.js-->
<script type="text/javascript" src="<?php echo $tmpl;?>js/jquery.mmenu.min.all.js"></script>
<script type="text/javascript" src="<?php echo $tmpl;?>fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="<?php echo $tmpl;?>fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript" src="<?php echo $tmpl;?>fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="text/javascript">
 $(document).ready(function() {
    $("#menu-left").mmenu({ 
       offCanvas: {
          position  : "right"
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
<!--<script type='text/javascript' src='<?php echo $tmpl;?>js/jquery.min.js'></script>-->
<script type='text/javascript' src='<?php echo $tmpl;?>js/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='<?php echo $tmpl;?>js/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='<?php echo $tmpl;?>js/tho.js'> </script>
<script type="text/javascript">
/*jQuery(document).ready(function($){
      $("#SubscribeNewsLetter").click(function(){
    $("#NewsLetterContainer").dialog(
    {
        modal: true,
        width: 300,
        resizable: false,
        position: ['center', 250]

     } );
});
});


jQuery(document).ready(function($)
{

  $(".mooga").fancybox(
  {
    'padding'                : 10,
    'autoScale'              : false,
    'transitionIn'           : 'none',
    'transitionOut'          : 'none',
    'hideOnContentClick'   : false,
    'width'                  : 725,
    'height'                 : 408,
    'type'                   : 'swf',
  'swf'      : {'allowfullscreen' : 'true'}
  });
});*/
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30758619-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!--[if IE 8]>  
<link rel="stylesheet" href="/templates/forsidetheme/css/ie8.css" type="text/css">
<![endif]-->
<!--[if IE 7]>  
<link rel="stylesheet" href="/templates/forsidetheme/css/ie7.css" type="text/css">
<![endif]-->

<meta property="og:image" content="http://www.tellusadvokater.dk/images/banners/tellusfb4.png" />
</head><body>
<div id="page">
	<div id="header" class="mm-fixed-top"> <a href="" class="logo"><img src="<?php echo $tmpl;?>img/logo.png"></a>
		<div class="headright"> <a href="#menu-left" class="bntMenuleft"><img src="<?php echo $tmpl;?>img/bntMenuleft.png"></a> </div>
		<!--headright--> 
	</div>
	<!--ppCartcredit-->
	<div id="content" class="w-content">
		<div class="banner-box clearfix">
			<div id="banner" class="clearfix"> <img src="<?php echo $tmpl;?>img/<?php if(JUri::getInstance()->toString() == JUri::base()){echo "forside" ;} else { echo "default" ;} ?>.jpg" alt=""> </div>
			<!--#banner--> 
		</div>
		<!--.banner-box-->
		
		<div class="eachBox <?php if(JUri::getInstance()->toString() == JUri::base()){echo "news" ;}?>">
		
			<?php if(JUri::getInstance()->toString() != JUri::base()){?>
			<!-- search box -->
			<jdoc:include type="modules" name="position-5"/>
			<jdoc:include type="modules" name="searchbox" style="xhtml" />
			<?php }?>
			
			<?php if(JUri::getInstance()->toString() == JUri::base()){ ?>
			<jdoc:include type="modules" name="position-1" style="xhtml" />
			<div class="line"><img src="<?php echo $tmpl;?>img/line.jpg" alt=""></div>
			<?php };?>
			
			 <?php if( (JUri::getInstance()->toString() != JUri::base()) && $this->countModules('position-3')){ ?>
			<div class="w-moduletable">
			<jdoc:include type="modules" name="position-3" style="xhtml" />
			</div>
			<?php };?>
			
			<?php if(JUri::getInstance()->toString() == JUri::base()){ ?>
			<jdoc:include type="modules" name="position-2" style="xhtml" />
			<?php }?>
			
			<?php  if(JUri::getInstance()->toString() != JUri::base()){ ?>
			<jdoc:include type="component" />
			<?php }?>
			
			<?php if(JUri::getInstance()->toString() != JUri::base()){ ?>
				<?php if(isset($taginfo)&&!empty($taginfo)){
	  
				//for the tags information ?>
				<div class="article-rightcolum">
				<?php foreach ($taginfo as $key => $value) {?>
				<div class="article-rightcolumtitle">
				<?php // echo $value->title;?>
				</div>
				<div class="aricle-rightcolumcontent">
				<?php echo $value->description;?>
				</div>
				<div class="NewsDevider" style="margin-top: 5px; margin-bottom: 5px;">&nbsp;</div>
				<?php }?>
				</div>
				<?php }?>
				<jdoc:include type="modules" name="position-1" style="xhtml" />
			<?php }else{?>
				<?php if ($this->countModules('position-14')) : ?>
				 <jdoc:include type="modules" name="position-14"/>
				<?php endif;?>
			<?php }?>
		</div>
		<div id="footer">
			<div class="eachBox links bottom-link">
				<div class="col-1"> <img src="<?php echo $tmpl;?>img/logo2.png" alt="">
					<p>Majsmarken 1, 7190 Billund<br>
						Tlf: 76 60 23 30<br>
						Email: <a href="mailto:tellus@tellusadvokater.dk">tellus@tellusadvokater.dk</a></p>
				</div>
				<!--col-1-->
				<div class="col-2">
					<h3><a href="index.php?option=com_sitemap&view=default&Itemid=206">Sitemap</a></h3>
					<p>John Tranums Vej 25, 6705 Esbjerg Ø<br>
						Tlf: 76 60 23 30<br>
						Email: <a href="mailto:tellus@tellusadvokater.dk">tellus@tellusadvokater.dk</a></p>
				</div>
				<!--col-2-->
				<div class="clearfix"></div>
				<p class="text-center">Advokatanpartsselskab</p>
				<a class="btn" href="<?php echo JURI::base();?>index.php?option=com_users&task=registration.set_mobile_session&value=0&url=<?php echo base64_encode(JURI::current());?>">- Gå til websiden</a> </div>
			<!--eachBox bottom-links--> 
		</div>
		<!--End #footer--> 
	</div>
	<!--End #content-->
	<!--<nav id="menu-left">
		<div class="divWrapAll">
			<ul class="ulMenu">
				<li class="menu_active"><a href="index.php">FORSIDE</a></li>
				<li><a href="about.php">OM OS</a></li>
				<li><a href="questions.php">SPØRGSMÅL</a></li>
				<li><a href="advice.php">RÅDGIVNING</a></li>
				<li><a href="contact.php">KONTAKT</a></li>
				<li><a href="cooperation.php">SAMARBEJDE</a></li>
				<li><a href="articles.php">ARTIKLER</a></li>
				<li><a href="newsletter.php">NYHEDER</a></li>
			</ul>
		</div>
	</nav>-->
	<?php if ($this->countModules('position-0')) : ?>
	<nav id="menu-left">
		<div class="divWrapAll">
			<jdoc:include type="modules" name="position-0" style="xhtml" />
		</div>
	</nav>
	<?php endif ; ?>
	<script type="text/javascript">
		$(document).ready(function(){	
			$('.btnMenu').addClass("btnActive");
			$('.ulCate').hide();
			$('.ulMenu').show();
			
			$('.btnMenu').click(function(){
				$(this).addClass("btnActive");
				$('.btnCate').removeClass("btnActive");	    	
				$('.ulCate').hide();
				$('.ulMenu').show();
			});
			
			$('.btnCate').click(function(){
				$(this).addClass("btnActive");
				$('.btnMenu').removeClass("btnActive");    	
				$('.ulCate').show();
				$('.ulMenu').hide();
			});
		});
	</script> 
</div>
</body>
</html>