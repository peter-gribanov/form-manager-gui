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
 * Интерфейс фабрики элементов
 * 
 * @package FormManager\Gui\Collector\Factor
 * @author  Peter S. Gribanov <info@peter-gribanov.ru>
 */
interface FormManager_Gui_Collector_Element_Factory_Interface extends FormManager_Gui_Collector_Factory_Interface{

	/**
	 * Возвращает объект конкретного элемента
	 * 
	 * @param string $name Название элемента
	 * 
	 * @return FormManager_Gui_Element_Interface
	 */
	public function get($name);

}