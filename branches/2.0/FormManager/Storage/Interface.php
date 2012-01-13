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
 * Интерфейс хранилища
 * 
 * @package FormManager\Storage
 * @author  Peter Gribanov <info@peter-gribanov.ru>
 */
interface FormManager_Storage_Interface {

	/**
	 * Загружает форму
	 * 
	 * @return string $name Название формы
	 * 
	 * @return FormManager_Model_Form
	 */
	public function load($name);

	/**
	 * Сохраняет форму
	 * 
	 * @param FormManager_Model_Form $form Объект формы
	 * 
	 * @return boolean
	 */
	public function save(FormManager_Model_Form $form);

	/**
	 * Удаляет форму
	 * 
	 * @param string $name Название формы
	 * 
	 * @return boolean
	 */
	public function remove($name);

	/**
	 * Возвращает список всех форм
	 * 
	 * @return array
	 */
	public function getList();

}