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
 * Фабрика колекций
 * 
 * @package FormManager\Gui\Collector\Collection
 * @author  Peter S. Gribanov <info@peter-gribanov.ru>
 */
class FormManager_Gui_Collector_Collection_Factory implements FormManager_Gui_Collector_Element_Factory_Interface {

	/**
	 * Возвращает список всех колекций
	 * 
	 * @return array
	 */
	public function getList() {
		// TODO требуется реализация
	}

	/**
	 * Проверяет наличие колекции с таким именем
	 * 
	 * @param string $name Название колекции
	 * 
	 * @return boolean
	 */
	public function isExists($name) {
		// TODO требуется реализация
	}

	/**
	 * Возвращает объект конкретной колекции
	 * 
	 * @param string $name Название колекции
	 * 
	 * @return FormManager_Gui_Collection_Abstract
	 */
	public function get($name) {
		// TODO требуется реализация
	}
}