<?php
/**
 * FormManager GUI package
 * 
 * @package   FormManagerGui
 * @author    Peter Gribanov <info@peter-gribanov.ru>
 * @version   2.0 SVN: $Revision: 192 $
 * @since     $Date: 2011-12-30 20:15:26 +0400 (Fri, 30 Dec 2011) $
 * @link      http://code.google.com/p/form-manager-gui/
 * @copyright 2008 by Peter Gribanov
 * @license   http://peter-gribanov.ru/license	GNU GPL Version 3
 */

/**
 * Редактор формы
 * 
 * @package FormManager\Gui
 * @author  Peter S. Gribanov <info@peter-gribanov.ru>
 */
class FormManager_Gui_Editor {

	/**
	 * Создает форму для редактирования другой формы
	 * Если форма для редактирования не передана создает новую форму
	 * 
	 * @param FormManager_Model_Form|null $form Редактируемая форма
	 * 
	 * @return FormManager_Model_Form
	 */
	public function getEditor(FormManager_Model_Form $form = null) {
		if (!($form instanceof FormManager_Model_Form)) {
			$form = new FormManager_Model_Form();
		}
		// TODO требуется реализация
	}

}