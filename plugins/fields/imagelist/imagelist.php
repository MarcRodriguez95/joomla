<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Fields.Imagelist
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JLoader::import('components.com_fields.libraries.fieldslistplugin', JPATH_ADMINISTRATOR);

/**
 * Fields Imagelist Plugin
 *
 * @since  __DEPLOY_VERSION__
 */
class PlgFieldsImagelist extends FieldsListPlugin
{
	/**
	 * Transforms the field into an XML element and appends it as child on the given parent. This
	 * is the default implementation of a field. Form fields which do support to be transformed into
	 * an XML Element mut implemet the JFormDomfieldinterface.
	 *
	 * @param   stdClass    $field   The field.
	 * @param   DOMElement  $parent  The field node parent.
	 * @param   JForm       $form    The form.
	 *
	 * @return  DOMElement
	 *
	 * @since   3.7.0
	 */
	public function onCustomFieldsPrepareDom($field, DOMElement $parent, JForm $form)
	{
		$fieldNode = parent::onCustomFieldsPrepareDom($field, $parent, $form);

		if (!$fieldNode)
		{
			return $fieldNode;
		}

		$fieldNode->setAttribute('hide_default', 'true');
		$fieldNode->setAttribute('directory', '/images/' . $fieldNode->getAttribute('directory'));

		return $fieldNode;
	}
}
