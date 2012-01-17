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
 * Фабрика полей
 * 
 * @package FormManager\Gui\Field
 * @author  Peter S. Gribanov <info@peter-gribanov.ru>
 */
class FormManager_Gui_Field_Factory implements FormManager_Gui_Element_Factory_Interface {

	/**
	 * Возвращает список всех полей
	 * 
	 * @return array
	 */
	public function getList() {
		// TODO требуется реализация
	}

	/**
	 * Проверяет наличие поля с таким именем
	 * 
	 * @param string $name Название поля
	 * 
	 * @return boolean
	 */
	public function isExists($name) {
		// TODO требуется реализация
	}

	/**
	 * Возвращает объект конкретного поля
	 * 
	 * @param string $name Название поля
	 * 
	 * @return FormManager_Gui_Field_Abstract
	 */
	public function get($name) {
		// TODO требуется реализация
	}

}