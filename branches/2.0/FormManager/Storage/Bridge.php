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
class FormManager_Storage_Bridge implements FormManager_Storage_Interface {

	/**
	 * Компонент хронилища
	 * 
	 * @var FormManager_Storage_Interface
	 */
	private $component = null;


	/**
	 * Конструктор
	 * 
	 * @param string $component Название компонента
	 * @param array  $params    Параметры инициализации компонента
	 */
	public function __construct($component, array $params = array()) {
		$component = ucfirst(strtolower($component));
		$component = 'FormManager_Storage_'.$component;
		$this->component = new $component($params);
	}

	/**
	 * Загружает форму
	 * 
	 * @param string $name Название формы
	 * 
	 * @return array
	 */
	public function get($name) {
		if ($form = $this->component->get($name)) {
			return unserialize($form);
		}
		return null;
	}

	/**
	 * Сохраняет форму
	 * 
	 * @param array $form Описание формы
	 * 
	 * @return boolean
	 */
	public function save($form) {
		return $this->component->save(serialize($form));
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
		return $this->component->update(serialize($form), $name);
	}

	/**
	 * Удаляет форму
	 * 
	 * @param string $name Название формы
	 * 
	 * @return boolean
	 */
	public function delete($name) {
		return $this->component->delete($name);
	}

	/**
	 * Возвращает список всех форм
	 * 
	 * @param array $params Параметры получения списка форм
	 * 
	 * @return array
	 */
	public function getList(array $params) {
		return $this->component->getList($params);
	}

}