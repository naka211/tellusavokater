<nav id="menu-left">
	<div class="divWrapAll">
	    <ul class="ulMenu"> 
	        <li class="<?php if(isset($t) && $t == 1) echo 'menu_active'; ?>"><a href="index.php">FORSIDE</a></li>
	        <li class="<?php if(isset($t) && $t == 2) echo 'menu_active'; ?>"><a href="about.php">OM OS</a></li>
	        <li class="<?php if(isset($t) && $t == 3) echo 'menu_active'; ?>"><a href="questions.php">SPØRGSMÅL</a></li>
	        <li class="<?php if(isset($t) && $t == 4) echo 'menu_active'; ?>"><a href="advice.php">RÅDGIVNING</a></li>
	        <li class="<?php if(isset($t) && $t == 5) echo 'menu_active'; ?>"><a href="contact.php">KONTAKT</a></li>
	        <li class="<?php if(isset($t) && $t == 6) echo 'menu_active'; ?>"><a href="cooperation.php">SAMARBEJDE</a></li>
	        <li class="<?php if(isset($t) && $t == 7) echo 'menu_active'; ?>"><a href="articles.php">ARTIKLER</a></li>
	        <li class="<?php if(isset($t) && $t == 8) echo 'menu_active'; ?>"><a href="newsletter.php">NYHEDER</a></li>
	    </ul>
	</div>
	
</nav>  
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