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
 * Представление
 * 
 * @package FormManager\Storage
 * @author  Peter Gribanov <info@peter-gribanov.ru>
 */
class FormManager_Viwe implements FormManager_Viwe_Interface {

	/**
	 * Название скина
	 * 
	 * @var string
	 */
	private $skin = self::DEFAULT_SKIN;


	/**
	 * Скини по умолчанию
	 * 
	 * @var string
	 */
	const DEFAULT_SKIN = '.default';


	/**
	 * Устанавливает название используемого скина
	 * 
	 * @param string $skin Названия скина
	 * 
	 * @return boolaen
	 */
	public function setSkin($skin) {
		$this->skin = $skin;
	}

	/**
	 * Возвращает отрисованный шаблон
	 * 
	 * @param array  $vars     Данные
	 * @param string $template Шаблон
	 * 
	 * @return string
	 */
	public function render($vars, $template) {
		extract($vars, EXTR_SKIP | EXTR_REFS);
		ob_start();
		include FORM_MANAGER_TEMPLATES_PATH.self::path($template);
		return ob_get_clean();
	}

}