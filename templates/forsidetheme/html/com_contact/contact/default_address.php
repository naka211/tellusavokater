<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * marker_class: Class based on the selection of text, none, or icons
 * jicon-text, jicon-none, jicon-icon
 */
?>
<dl class="contact-adlress dl-horizontal">
	<?php if (($this->params->get('adlress_check') > 0) &&
		($this->contact->adlress || $this->contact->suburb  || $this->contact->state || $this->contact->country || $this->contact->postcode)) : ?>
		<?php if ($this->params->get('adlress_check') > 0) : ?>
			<dt>
				<span class="<?php echo $this->params->get('marker_class'); ?>" >
					<?php echo $this->params->get('marker_adlress'); ?>
				</span>
			</dt>
		<?php endif; ?>

		<?php if ($this->contact->adlress && $this->params->get('show_street_adlress')) : ?>
			<dl>
				<span class="contact-street">
					<?php echo $this->contact->adlress .'<br/>'; ?>
				</span>
			</dl>
		<?php endif; ?>

		<?php if ($this->contact->suburb && $this->params->get('show_suburb')) : ?>
			<dl>
				<span class="contact-suburb">
					<?php echo $this->contact->suburb .'<br/>'; ?>
				</span>
			</dl>
		<?php endif; ?>
		<?php if ($this->contact->state && $this->params->get('show_state')) : ?>
			<dl>
				<span class="contact-state">
					<?php echo $this->contact->state . '<br/>'; ?>
				</span>
			</dl>
		<?php endif; ?>
		<?php if ($this->contact->postcode && $this->params->get('show_postcode')) : ?>
			<dl>
				<span class="contact-postcode">
					<?php echo $this->contact->postcode .'<br/>'; ?>
				</span>
			</dl>
		<?php endif; ?>
		<?php if ($this->contact->country && $this->params->get('show_country')) : ?>
		<dl>
			<span class="contact-country">
				<?php echo $this->contact->country .'<br/>'; ?>
			</span>
		</dl>
		<?php endif; ?>
	<?php endif; ?>

<?php if ($this->contact->email_to && $this->params->get('show_email')) : ?>
	<dt>
		<span class="<?php echo $this->params->get('marker_class'); ?>" >
			<?php echo nl2br($this->params->get('marker_email')); ?>
		</span>
	</dt>
	<div class="contact-email">
		<span class="contact-emailto">
			<?php echo $this->contact->email_to; ?>
		</span>
	</div>
<?php endif; ?>

<?php if ($this->contact->telephone && $this->params->get('show_telephone')) : ?>
	<dt>
		<span class="<?php echo $this->params->get('marker_class'); ?>" >
			<?php echo $this->params->get('marker_telephone'); ?>
		</span>
	</dt>
	<div class="contact-telephone">
		<span class="contact-telephone">
			<?php echo nl2br($this->contact->telephone); ?>
		</span>
	</div>
<?php endif; ?>
<?php if ($this->contact->fax && $this->params->get('show_fax')) : ?>
	<dt>
		<span class="<?php echo $this->params->get('marker_class'); ?>" >
			<?php echo $this->params->get('marker_fax'); ?>
		</span>
	</dt>
	<dl>
		<span class="contact-fax">
		<?php echo nl2br($this->contact->fax); ?>
		</span>
	</dl>
<?php endif; ?>
<?php if ($this->contact->mobile && $this->params->get('show_mobile')) :?>
	<dt>
		<span class="<?php echo $this->params->get('marker_class'); ?>" >
			<?php echo $this->params->get('marker_mobile'); ?>
		</span>
	</dt>
	<dl>
		<span class="contact-mobile">
			<?php echo nl2br($this->contact->mobile); ?>
		</span>
	</dl>
<?php endif; ?>
<?php if ($this->contact->webpage && $this->params->get('show_webpage')) : ?>
	<dt>
		<span class="<?php echo $this->params->get('marker_class'); ?>" >
		</span>
	</dt>
	<dl>
		<span class="contact-webpage">
			<a href="<?php echo $this->contact->webpage; ?>" target="_blank">
			<?php echo JStringPunycode::urlToUTF8($this->contact->webpage); ?></a>
		</span>
	</dl>
<?php endif; ?>
</dl>
