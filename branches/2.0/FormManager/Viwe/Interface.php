<?php
/**
 * FormManager GUI package
 * 
 * @package   FormManagerGui
 * @author    Peter Gribanov <info@peter-gribanov.ru>
 * @version   2.0 SVN: $Revision: 41 $
 * @since     $Date: 2011-10-01 00:28:31 +0400 (Сб, 01 окт 2011) $
 * @link      http://code.google.com/p/form-manager-gui/
 * @copyright 2008 by Peter Gribanov
 * @license   http://peter-gribanov.ru/license	GNU GPL Version 3
 */

/**
 * Интерфейс представления
 * 
 * @package FormManager\Storage
 * @author  Peter Gribanov <info@peter-gribanov.ru>
 */
interface FormManager_Viwe_Interface {

	/**
	 * Устанавливает название используемого скина
	 * 
	 * @param string $skin Названия скина
	 * 
	 * @return boolaen
	 */
	public function setSkin($skin);

	/**
	 * Возвращает отрисованный шаблон
	 * 
	 * @param array  $vars     Данные
	 * @param string $template Шаблон
	 * 
	 * @return string
	 */
	public function render(array $vars, $template);

}