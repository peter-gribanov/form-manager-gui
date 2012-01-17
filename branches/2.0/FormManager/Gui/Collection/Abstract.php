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
 * Коллекции элементов формы в редакторе форм
 * 
 * @package FormManager\Gui\Collection
 * @author  Peter S. Gribanov <info@peter-gribanov.ru>
 */
abstract class FormManager_Gui_Collection_Abstract implements FormManager_Gui_Element_Interface {

	/**
	 * Возвращает коллекцию полей для составления элемента
	 * 
	 * @return FormManager_Model_Collection_Nested
	 */
	public function getForm() {
		// TODO сделать базовую реализацию
	}

	/**
	 * Собирает объект колекции из массива
	 * 
	 * @param array $data
	 * 
	 * @return FormManager_Model_Collection_Nested
	 */
	public function assemble(array $data) {
		// TODO сделать базовую реализацию
	}

	/**
	 * Разбирает объект колекции на массив
	 * 
	 * @param FormManager_Model_Collection_Nested $collection
	 * 
	 * @return array
	 */
	public function disassemble(FormManager_Model_Collection_Nested $collection) {
		// TODO сделать базовую реализацию
	}

}