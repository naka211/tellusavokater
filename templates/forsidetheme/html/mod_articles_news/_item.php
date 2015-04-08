<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$item_heading = $params->get('item_heading', 'h4');
?>
<div class="ShowFirstItem">
<?php if ($params->get('item_title')) : ?>

	<<?php echo $item_heading; ?> class="newsflash-title<?php echo $params->get('moduleclass_sfx'); ?>">
	<?php if ($params->get('link_titles') && $item->link != '') : ?>
		<a href="<?php echo $item->link;?>" style="color:#000;">
			<?php echo $item->title;?></a>
	<?php else : ?>
		<?php echo $item->title; ?>
	<?php endif; ?>
	</<?php echo $item_heading; ?>>

<?php endif; ?>

<?php if (!$params->get('intro_only')) :
	echo $item->afterDisplayTitle;
endif; ?>

<?php echo $item->beforeDisplayContent; ?>


<p style="font-size: 13px; color: #999;">
<?php 
	//Logikken er følgende: Hvis meta description findes, anvend denne ellers anvend introtekst (til read more streg i artiklen) ellers anvend fuld tekst.
	//Alle tre muligheder klippes ved 200 tegn.
	echo '<a class="readmore" href="'.$item->link.'">'.mb_substr(strip_tags(($item->metadesc =='' ? $item->introtext : $item->metadesc)),0,200,'utf-8').'..'.'</a>'; ?>
</p>

<?php 
	//P.t. ønsker vi ikke "læs mere". derfor sæætes && 1==2 ind
	if (1==2 && isset($item->link) && $item->readmore != 0 && $params->get('readmore')) :
	echo '<a class="readmore" href="'.$item->link.'">'.$item->linkText.'</a>';
endif; ?> 
</div>
<p style="font-size: 10px; color: #999;">Oprettet d.<?php echo date('d-m-Y',strtotime($item->created));?></p>
<div class="NewsDevider"></div>