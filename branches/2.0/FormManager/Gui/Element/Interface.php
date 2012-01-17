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
 * Интерфейс элемента формы в редакторе форм
 * 
 * @package FormManager\Gui\Element
 * @author  Peter S. Gribanov <info@peter-gribanov.ru>
 */
interface FormManager_Gui_Element_Interface {

	/**
	 * Возвращает коллекцию полей для составления элемента
	 * 
	 * @return FormManager_Model_Collection_Nested
	 */
	public function getForm();

	/**
	 * Собирает объект элемента из массива
	 * 
	 * @param array $data
	 * 
	 * @return FormManager_Model_Element
	 */
	public function assemble(array $data);

	/**
	 * Разбирает объект элемента на массив
	 * 
	 * @param FormManager_Model_Element $element
	 * 
	 * @return array
	 */
	public function disassemble(FormManager_Model_Element $element);

}