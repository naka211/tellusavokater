<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');

JHtml::_('behavior.framework');

// Create some shortcuts.
$params		= &$this->item->params;
$n			= count($this->items);
$listOrder	= $this->escape($this->state->get('list.ordering'));
$listDirn	= $this->escape($this->state->get('list.direction'));

// Check for at least one editable article
$isEditable = false;

if (!empty($this->items))
{
	foreach ($this->items as $article)
	{
		if ($article->params->get('access-edit'))
		{
			$isEditable = true;
			break;
		}
	}
}
?>

<?php if (empty($this->items)) : ?>

	<?php if ($this->params->get('show_no_articles', 1)) : ?>
	<p><?php echo JText::_('COM_CONTENT_NO_ARTICLES'); ?></p>
	<?php endif; ?>

<?php else : ?>


<div >
	<?php foreach ($this->items as $i => $article) : ?>
	<div class="NewsListLarge">
	<?php if (in_array($article->access, $this->user->getAuthorisedViewLevels())) : ?>
							<h2>
							<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($article->slug, $article->catid)); ?>">
								<?php echo $this->escape($article->title); ?>
							</a>
							</h2>
	
	
	<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($article->slug, $article->catid)); ?>">
	<?php 
	//Logikken er følgende: Hvis meta description findes, anvend denne ellers anvend introtekst (til read more streg i artiklen) ellers anvend fuld tekst.
	//Alle tre muligheder klippes ved 200 tegn.
	echo mb_substr(strip_tags(($article->metadesc =='' ? $article->introtext : $article->metadesc)),0,300,'utf-8').'..'; ?>
	<?php //echo mb_substr(strip_tags($article->text),0,100,'utf-8').'..';?>
	
	</a>
	<?php endif;?>
	</div>
	<?php endforeach; ?>

	</div>


	<?php // Code to add a link to submit an article. ?>

	<?php // Add pagination links ?>

<?php  endif; ?>
