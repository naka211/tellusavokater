<?php

defined('_JEXEC') or die;

//Detect mobile
session_start();
$config =& JFactory::getConfig();
$showPhone = $config->get( 'show_phone' );
$enablePhone = $config->get( 'enable_phone' );
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
if(!isset($_SESSION['mobile'])){
	if($detect->isMobile()){
		$_SESSION['mobile'] = true;
	}
}
if($showPhone){
	$_SESSION['mobile'] = $showPhone;
}
if ( ($showPhone || $detect->isMobile()) && ($enablePhone) && ($_SESSION['mobile'])) {
    include('index_mobile.php');
    return;
}
//Detect mobile end

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

$doc->addStyleSheet('templates/' . $this->template . '/css/page.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/menu.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/base.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/jquery-ui.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/jquery.fancybox.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/style.css');
$doc->addScript($this->baseurl . '/media/jui/js/jquery.js', 'text/javascript');
$doc->addScript($this->baseurl . '/media/jui/js/jquery.min.js', 'text/javascript');
$doc->addScript($this->baseurl . '/media/jui/js/jquery-migrate.js', 'text/javascript');
$doc->addScript($this->baseurl . '/media/jui/js/jquery-noconflict.js', 'text/javascript');
$doc->addScript('/templates/' . $this->template . '/js/jquery-ui.min.js', 'text/javascript');
$doc->addScript('/templates/' . $this->template . '/js/jquery.easing-1.3.pack.js', 'text/javascript');
$doc->addScript('/templates/' . $this->template . '/js/jquery.fancybox.pack.js', 'text/javascript');
$doc->addScript('/templates/' . $this->template . '/js/jquery.mousewheel-3.0.4.pack.js', 'text/javascript');
$doc->addScript('/templates/' . $this->template . '/js/vah1sbe.js', 'text/javascript');
$doc->addScript('/templates/' . $this->template . '/js/base.js', 'text/javascript');
$doc->addScript('/templates/' . $this->template . '/js/ga.js', 'text/javascript');

?>

<!DOCTYPE html>
<html>

<head>

    <jdoc:include type="head" />

  

<script type="text/javascript">
    

    try{Typekit.load();}catch(e){}

    jQuery(document).ready(function($){
        $("#SubMenu_levelThree ul li ul li:last-child").css("margin-bottom","20px")
    });


// jQuery(document).ready(function($){
// var logoWidth = $(".logo").width();
// var TopmenuWidth = $('#TopMenu').width();
// var menuwapper = logoWidth+TopmenuWidth;
// var menuwapperWidth = menuwapper+'px';
// if(menuwapper>960){
// $('.menuwapper').css('width',menuwapperWidth);
// }
// });

jQuery(document).ready(function($){
var submenuLiCount = $("#SubMenu_levelThree").height();
var context = $('#ContentText').height();
var righshadow = $('#NewsContainer_subpage').height();
if((submenuLiCount>context)||(righshadow>context)){
  if(submenuLiCount>righshadow){
  var resultheight = submenuLiCount+'px';
    }else{
  var resultheight = righshadow+'px';
    }
  $('#ContentText').css('min-height',resultheight);
  $('.category-module li').css('font-weight','normal');
}
});

jQuery(document).ready(function($){
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
});




</script>
<style type="text/css">.tk-futura-pt{font-family:"futura-pt",sans-serif;}</style>
<link rel="stylesheet" href="http://use.typekit.com/k/vah1sbe-d.css?3bb2a6e53c9684ffdc9a9bfe1a5b2a62e66f7c34abca5e6ba275936416220532a0fdb3a3f9797d5d0193e0124b21a504396b0b257b02ce86080b792834da65ed2ea2070eed07c18ad4f75dc64a89d06914c957f3a9efdba65bf75fb64e1ace4851651ca87919a2037e49b6ce2a0c7bb2c0db890eaac954253ea850df74ea25a79241a5e44510c7fd621d91b5b14919bd111530dda151df7de2a926e777c2e26b3b1e9dbf1875428bbbc8ce089f3ae4626be5dfff"> 
<style type="text/css">
#SubImage {
    background: url('templates/<?php echo  $this->template ;?>/images/<?php if(JUri::getInstance()->toString() == JUri::base()){
      echo "forside" ;} else {
      echo "default" ;} ?>.jpg') #fff center center scroll ;
    margin: 0px;
    padding: 0px;
    -moz-background-size: cover;
    background-size: cover;
    /*height: 420px;*/
}
<?php if(JUri::getInstance()->toString() == JUri::base()){?>
#mod-search-searchword{
margin-right: 24px;
}
<?php }?>
</style>


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
</head>
<body>
  <div id="fb-root"></div>
  <div id="TopContent" >
    <div id="TopGreenBar" style="position: absolute; top: 15px;">
      <div class="wrapper">
        <div class="logo">
         <a href="/"><img src="templates/<?php echo  $this->template ;?>/images/tellus_logo.png" alt="Tellus Advokater"></a>
        </div>
        <?php if ($this->countModules('position-0')) : ?>
        <div id="TopMenu">
         <jdoc:include type="modules" name="position-0" style="xhtml" />
        </div>
         <?php endif ; ?>
      </div>
    </div>

    <div id="SubImage">
      <div id="ImageRaster">
        <div id="Overlay"></div>
        <?php 
        ;?>
      </div>
    </div>
  </div>
 <jdoc:include type="message" />
  <div id="TemplateContent">
    <div class="wrapper" style="position: relative;">
      <?php if(JUri::getInstance()->toString() != JUri::base()){?>
      <div id="SearchBox" <?php if(JUri::getInstance()->toString() == JUri::base()){?>style=" background: #fff; width: 240px;position: relative;float: right;margin-top: 41px;"<?php }?>
      >
      <!-- search box -->
      <jdoc:include type="modules" name="searchbox" style="xhtml" />
      </div>
      <?php }?>
      
    
      <?php 
      if(JUri::getInstance()->toString() == JUri::base())
      { ?>
        <div id="NewsContainer">
      
      
      <!-- NewsContainer modules -->
      
      <jdoc:include type="modules" name="position-1" style="xhtml" />
      </div>
      <?php };?>
      
      <?php 
      if(JUri::getInstance()->toString() != JUri::base())
      { ?>
      <div class="SubMenuShadow">
        <div id="SubMenu_levelThree">   
  <jdoc:include type="modules" name="position-3" style="xhtml" />
          </div>
      </div>
      <?php };?>
      <?php 
      if(JUri::getInstance()->toString() == JUri::base())
      { ?>
      <div id="AboutUsText">
      <!-- about us modules -->
        <jdoc:include type="modules" name="position-2" style="xhtml" />
      
      </div>
      <?php }?>
      <?php  if(JUri::getInstance()->toString() != JUri::base())
      { ?>
      <div id="ContentText">
	  <jdoc:include type="modules" name="position-5"/>
      <jdoc:include type="component" />
      </div>
      <?php }?>
      <?php 
      if(JUri::getInstance()->toString() != JUri::base())
      { ?>

      

      <div id="NewsContainer_subpage">
       <?php 
      if(isset($taginfo)&&!empty($taginfo)){
  
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

      <!-- NewsContainer modules -->

      <jdoc:include type="modules" name="position-1" style="xhtml" />
      
      </div>
      <?php }else{?>
     
      

      <?php if ($this->countModules('position-14')) : ?>
       <div id="NewsContainer_subpagefront">
         <jdoc:include type="modules" name="position-14" style="rounded" />
       </div>
      <?php endif;?>
      </div>
      <?php }?>

      <div class="bottom_bg" style="clear: both;"></div>
    </div>
  </div>

  <div id="BottomContent">
    <div class="wrapper">
      <div class="inner_wrapper" style="width: 670px!important;">
        <div class="logo" style="float: left; position: relative; top: -18px;">
          <a href="http://www.tellusadvokater.dk/">
          <img src="templates/<?php echo  $this->template ;?>/images/tellus_mini_logo.png" alt="Tellus Advokater" />
          </a>
        </div>

        <div class="adress" style="float: left;">
          <p>Majsmarken 1, 7190 Billund</p>

          <p>Tlf: 76 60 23 30</p>

          <p>Email: <a href="mailto:tellus@tellusadvokater.dk">tellus@tellusadvokater.dk</a></p>
        </div>

        <div class="adress" style="float: left;">
          <p>John Tranums Vej 25, 6705 Esbjerg Ø</p>

          <p>Tlf: 76 60 23 30</p>

          <p>Email: <a href="mailto:tellus@tellusadvokater.dk">tellus@tellusadvokater.dk</a></p>
        </div>

        <div class="adress" style="float: left; margin-top: 8px; margin-left:22px!important; font-size: 15px; color: #54890E;">
          <i><a href="index.php?option=com_sitemap&view=default&Itemid=206">Sitemap</a></i><br />
		  <?php if($detect->isMobile()){?>
		<i><a href="<?php echo JURI::base();?>index.php?option=com_users&task=registration.set_mobile_session&value=1&url=<?php echo base64_encode(JURI::current());?>">TIL MOBILSIDEN</a></i>
		<?php }?>
        </div>
      </div>

      <div id="WhatWeAre" style="clear: both; letter-spacing: 3px; font-size: 12px; color: #999; height: 20px; text-align: center; width: 960px;">
        Advokatanpartsselskab
      </div>
    </div>
  </div>
  <script type="text/javascript">
//<![CDATA[
  jQuery(document).ready(function($) {
    $("#NewsLetterContainer input[type=text]").focus(function() {

        if($(this).val() == $(this).get(0).defaultValue)
        {
            $(this).val("");
        }

    }).blur(function() {

        if($(this).val() == "")
        {
            $(this).val( $(this).get(0).defaultValue );
        }

    });
  });
  //]]>
  </script><!-- DOWNLOAD FOLDERS -->

  <div id="DownloadContainer" title="Download pjecer" style="display:none;">
    Her kan du downloade vores pjecer.

    <ul>
      <li><a href="http://www.tellusadvokater.dk/upload/files/TELLUSAdvokater.pdf" target="_blank">TELLUS Advokater - Jura på jysk</a></li>

      <li><a href="http://www.tellusadvokater.dk/upload/files/pdf/fb14.pdf" target="_blank">Forretningsbetingelser</a></li>

      <li><a href="http://www.tellusadvokater.dk/upload/files/pdf/testamente%202013%206%20sider.pdf" target="_blank">Testamenter</a></li>

      <li><a href="http://www.tellusadvokater.dk/upload/files/pdf/familie%20og%20arveret%202013.pdf" target="_blank">Familie- og arveret</a></li>

      <li><a href="http://www.tellusadvokater.dk/upload/files/pdf/ps14.pdf" target="_blank">Privat skifte</a></li>

      <li><a href="http://www.tellusadvokater.dk/upload/files/pdf/selskaber.pdf" target="_blank">Selskabsdannelse</a></li>

      <li><a href="http://www.tellusadvokater.dk/upload/files/pdf/bestyrelse.pdf" target="_blank">Bestyrelse - Sådan</a></li>
    </ul>
  </div>

  <div id="fancybox-tmp"></div>

  <div id="fancybox-loading"></div>

  <div id="fancybox-overlay"></div>

  <div id="fancybox-wrap">
    <div id="fancybox-outer">
      <div class="fancybox-bg" id="fancybox-bg-n"></div>

      <div class="fancybox-bg" id="fancybox-bg-ne"></div>

      <div class="fancybox-bg" id="fancybox-bg-e"></div>

      <div class="fancybox-bg" id="fancybox-bg-se"></div>

      <div class="fancybox-bg" id="fancybox-bg-s"></div>

      <div class="fancybox-bg" id="fancybox-bg-sw"></div>

      <div class="fancybox-bg" id="fancybox-bg-w"></div>

      <div class="fancybox-bg" id="fancybox-bg-nw"></div>

      <div id="fancybox-content"></div><a id="fancybox-close"></a>

      <div id="fancybox-title"></div><a href="javascript:;" id="fancybox-left"><span class="fancy-ico" id="fancybox-left-ico"></span></a><a href="javascript:;" id="fancybox-right"><span class="fancy-ico" id="fancybox-right-ico"></span></a>
    </div>
  </div>

  <div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable" tabindex="-1" role="dialog" aria-labelledby="ui-dialog-title-NewsLetterContainer" style="display: none; z-index: 1002; outline: 0px; height: auto; width: 300px; top: 537px; left: 520.5px;">
    <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">
      <span class="ui-icon ui-icon-closethick">close</span></a>
    </div>

    <div id="NewsLetterContainer" style="width: auto; min-height: 36.71875px; height: auto;" class="ui-dialog-content ui-widget-content" scrolltop="0" scrollleft="0">
    <jdoc:include type="modules" name="position-5" style="xhtml" />
    </div>

    <div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix">
      <div class="ui-dialog-buttonset">
        <button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false"><span class="ui-button-text">Tilmeld</span></button>
      </div>
    </div>
  </div>


</body>




</html>



