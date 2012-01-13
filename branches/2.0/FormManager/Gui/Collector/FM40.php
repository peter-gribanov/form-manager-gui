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
 * Интерфейс сборщика объекта формы
 * 
 * @package FormManager\Collector
 * @author  Peter Gribanov <info@peter-gribanov.ru>
 */
interface FormManager_Collector_FM40 {

	/**
	 * Собирает объект формы из массива
	 * 
	 * @param array $data
	 * 
	 * @return FormManager_Model_Form
	 */
	public function assemble(array $data){
		// TODO требуется реализация
	}

	/**
	 * Разбирает объект формы на массив
	 * 
	 * @param FormManager_Model_Form $form
	 * 
	 * @return array
	 */
	public function disassemble(FormManager_Model_Form $form){
		// TODO требуется реализация
	}

}