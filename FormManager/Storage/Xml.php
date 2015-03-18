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
 * Хранилища в файлах в формате XML
 * 
 * @package FormManager\Storage
 * @author  Peter Gribanov <info@peter-gribanov.ru>
 */
class FormManager_Storage_Xml implements FormManager_Storage_Interface {

	/**
	 * Загружает форму
	 * 
	 * @param string $name Название формы
	 * 
	 * @return array
	 */
	public function get($name) {
		// TODO требуется реализация
	}

	/**
	 * Сохраняет форму
	 * 
	 * @param array $form Описание формы
	 * 
	 * @return boolean
	 */
	public function save($form) {
		// TODO требуется реализация
	}

	/**
	 * Обновление форму
	 * 
	 * @param array  $form Описание формы
	 * @param string $name Название формы
	 * 
	 * @return boolean
	 */
	public function update($form, $name) {
		// TODO требуется реализация
	}

	/**
	 * Удаляет форму
	 * 
	 * @param string $name Название формы
	 * 
	 * @return boolean
	 */
	public function delete($name) {
		// TODO требуется реализация
	}

	/**
	 * Возвращает список всех форм
	 * 
	 * @param array $params Параметры получения списка форм
	 * 
	 * @return array
	 */
	public function getList(array $params) {
		// TODO требуется реализация
	}

}