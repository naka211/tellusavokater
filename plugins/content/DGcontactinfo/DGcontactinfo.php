<?php
# ---------------------------------------------------------------------------------

/**
 * @package		Contact Information Plugin 2.5.1
 * @type		Plugin (Content)
 * @filename	DGcontactinfo.php
 * @folder		<root>/plugins/content/DGcontactinfo
 * @version		2.5.1
 * @modified	07 January 2013
 * @author 		Edward Cupler
 * @website		www.digitalgreys.com
 * @email		ecupler@digitalgreys.com
 * @copyright 	Copyright (C) 2013 Digital Greys. All rights reserved.
 * @license 	http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 *
 * Contact Information Plugin is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

# ---------------------------------------------------------------------------------

/** ensure this file is being included by a parent file */
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.plugin.plugin' );

/*load language file for plugin frontend*/
$lang = JFactory::getLanguage();
$lang->load('plg_content_DGcontactinfo', JPATH_ADMINISTRATOR);

class plgContentDGcontactinfo extends JPlugin 
{

	public function __construct(&$subject, $config) {
		parent::__construct($subject, $config);
	}
	
	public function onContentPrepare($context, &$article, &$params, $page = 0) 
	{
		global $mainframe;
		
		if (JString::strpos($article->text, '{/dgcontactinfo}') === false) {
			return true;
		}
		
		$regex = "#{dgcontactinfo.*?\}(.*?){/dgcontactinfo}#s";

		$article->text = preg_replace_callback( $regex, array(&$this,'botcontactinfo_replacer'), $article->text );
		return true;
	}

	protected function botcontactinfo_replacer ( &$matches ) {
		
		$database = JFactory::getDBO();
		$idarray = explode(" ", $matches[0]);
		$contact_id = intval($idarray[1]);
		$query = 'SELECT * FROM #__contact_details WHERE id =' .$contact_id;
		$database->setQuery( $query );
		$contacts = $database->loadObject();
		if (!$contacts) {
			return '(invalid contact id)';
		} else {
			$row = new StdClass;
			$row->slug = $contact_id . ':' . $contacts->alias;
			$contactsParams = json_decode($contacts->params);
			$contact_html=$matches[1];
			$contactLink=JRoute::_('index.php?option=com_contact&view=contact&id=' . $contact_id );
			if ($this->params->def('linkToContact', 1) == 1) {
				$contact_html=str_replace("[name]", '<a href="'.$contactLink.'">' . $contacts->name . '</a>',$contact_html);
			} else {
				$contact_html=str_replace("[name]",$contacts->name,$contact_html);
			}
			$contact_html=str_replace("[position]",$contacts->con_position,$contact_html);
			$contact_html=str_replace("[con_position]",$contacts->con_position,$contact_html);
			$contact_html=str_replace("[email]",$contacts->email_to,$contact_html);
			$contact_html=str_replace("[email_to]",$contacts->email_to,$contact_html);
			$contact_html=str_replace("[address]",$contacts->address,$contact_html);
			$contact_html=str_replace("[city]",$contacts->suburb,$contact_html);
			$contact_html=str_replace("[suburb]",$contacts->suburb,$contact_html);
			$contact_html=str_replace("[state]",$contacts->state,$contact_html);
			$contact_html=str_replace("[zip]",$contacts->postcode,$contact_html);
			$contact_html=str_replace("[postcode]",$contacts->postcode,$contact_html);
			$contact_html=str_replace("[country]",$contacts->country,$contact_html);
			$contact_html=str_replace("[telephone]",$contacts->telephone,$contact_html);
			$contact_html=str_replace("[fax]",$contacts->fax,$contact_html);
			$contact_html=str_replace("[misc]",$contacts->misc,$contact_html);
			if ($contacts->webpage != '') {
				/*link to web page*/
				$webpage = str_replace("http://", "", $contacts->webpage );
				if ($this->params->def('newWindow', 1) == 1) {
					$webpage = '<a href="http://'.$webpage.'" target="_blank">'.$webpage.'</a>';
				} else {
					$webpage = '<a href="http://'.$webpage.'">'.$webpage.'</a>';
				}
			} else {
				$webpage = '';
			}
			$contact_html=str_replace("[webpage]",$webpage,$contact_html);
			$contact_html=str_replace("[mobile]",$contacts->mobile,$contact_html);
			$contact_html=str_replace("[alias]",$contacts->alias,$contact_html);

			/*Thumbnail Image*/
		
			if ($contacts->image == '') {
				$contacts->image = '/plugins/content/DGcontactinfo/default.jpg';
			}

			$DGimageSize = $this->params->def('DGimageSize', 250);
			

			if ($DGimageSize > 0) {
				if ($this->params->def('imgAspectRatio', 1) > 0) {
					$imgSizes = '&w='.$DGimageSize;
				} else {
					$imgSizes = '&w='.$DGimageSize.'&h='.$DGimageSize;
				}
				$imgPath=JURI::base() . 'plugins/content/DGcontactinfo/includes/timthumb.php?src=' . JURI::root() . $contacts->image . $imgSizes ;
			} else {
				$imgPath=JURI::root() . $contacts->image;
			}
			
			if (is_file( JPATH_BASE . '/'. $contacts->image )) {
				$DGimage = '<img src="'. $imgPath .'" title="' . $contacts->name . '" alt="' . $contacts->name . '" class="contactIcon"  />';
			} else {
				$DGimage = 'No image found';
			}
			
			if ($this->params->def('linkImgToContact', 1) == 1) {
				$contact_html=str_replace('[image]','<a href="'.$contactLink.'">'.$DGimage.'</a>',$contact_html);				
			} else {
				$contact_html=str_replace('[image]',$DGimage,$contact_html);
			}
			
			$contact_html=str_replace("[vcard]",'<a href="' . JRoute::_('index.php?option=com_contact&amp;view=contact&amp;id='.$contact_id . '&amp;format=vcf') . '">' . JText::_('PLG_CONTENT_DGCONTACT_VCARD') . '</a>',$contact_html);

			foreach(range('a', 'e') as $char) {
				$linkName='link'.$char.'_name';
				$link='link'.$char;
				$linkas='<a href="'.$contactsParams->$link.'">'.$contactsParams->$linkName.'</a>';
				$contact_html=str_replace("[link".$char."]",$linkas,$contact_html);
			}
			return $contact_html;
		}
	}
}
?>