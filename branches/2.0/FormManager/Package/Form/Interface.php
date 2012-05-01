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
 * Интерфейс формы
 * 
 * @package FormManager\Package
 * @author  Peter Gribanov <info@peter-gribanov.ru>
 */
interface FormManager_Package_Form_Interface {

	/**
	 * Отрисовывает форму
	 * 
	 * @param string|null $template Шаблон
	 * 
	 * @return string
	 */
	public function render($template = null);

}