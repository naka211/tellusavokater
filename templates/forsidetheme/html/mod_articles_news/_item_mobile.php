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
<article class="news-item">
	<p><strong><a href="<?php echo $item->link;?>"><?php echo $item->title;?></a></strong></p>
	<p><a href="<?php echo $item->link;?>"><?php echo mb_substr(strip_tags(($item->metadesc =='' ? $item->introtext : $item->metadesc)),0,200,'utf-8').'..';?></a></p>
	<p class="date">Oprettet d.<?php echo date('d-m-Y',strtotime($item->created));?></p>
</article>
<?php return;?>