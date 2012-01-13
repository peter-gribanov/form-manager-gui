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
 * Хранилища в файлах
 * 
 * @package FormManager\Storage
 * @author  Peter Gribanov <info@peter-gribanov.ru>
 */
class FormManager_Storage_File implements FormManager_Storage_Interface {

	/**
	 * Загружает форму
	 * 
	 * @return string $name Название формы
	 * 
	 * @return FormManager_Model_Form
	 */
	public function load($name) {
		// TODO требуется реализация
	}

	/**
	 * Сохраняет форму
	 * 
	 * @param FormManager_Model_Form $form Объект формы
	 * 
	 * @return boolean
	 */
	public function save(FormManager_Model_Form $form) {
		// TODO требуется реализация
	}

	/**
	 * Удаляет форму
	 * 
	 * @param string $name Название формы
	 * 
	 * @return boolean
	 */
	public function remove($name) {
		// TODO требуется реализация
	}

	/**
	 * Возвращает список всех форм
	 * 
	 * @return array
	 */
	public function getList() {
		// TODO требуется реализация
	}

}