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
 * Поле формы в редакторе форм
 * 
 * @package FormManager\Gui\Field
 * @author  Peter S. Gribanov <info@peter-gribanov.ru>
 */
abstract class FormManager_Gui_Field_Abstract implements FormManager_Gui_Element_Interface {

	/**
	 * Возвращает коллекцию полей для составления элемента
	 * 
	 * @return FormManager_Model_Collection_Nested
	 */
	public function getForm() {
		// TODO сделать базовую реализацию
	}

	/**
	 * Собирает объект поля из массива
	 * 
	 * @param array $data
	 * 
	 * @return FormManager_Model_Field_Abstract
	 */
	public function assemble(array $data) {
		// TODO сделать базовую реализацию
	}

	/**
	 * Разбирает объект поля на массив
	 * 
	 * @param FormManager_Model_Field_Abstract $element
	 * 
	 * @return array
	 */
	public function disassemble(FormManager_Model_Field_Abstract $field) {
		// TODO сделать базовую реализацию
	}

}