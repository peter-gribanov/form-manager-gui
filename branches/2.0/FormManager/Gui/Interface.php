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
 * Интерфейс пользовательского интерфейса
 * 
 * @package FormManager\Storage
 * @author  Peter Gribanov <info@peter-gribanov.ru>
 */
interface FormManager_Gui_Interface {

	/**
	 * Конструктор
	 * 
	 * @param FormManager_Factory $factory Фабрика комплекса программ
	 */
	public function __construct(FormManager_Factory $factory);

	/**
	 * Возвращает редактор форму
	 * 
	 * @param array  $input Входные данные
	 * 
	 * @return array
	 */
	public function createForm(array $input = array());

	/**
	 * Возвращает редактор форму
	 * 
	 * @param string $name Название формы
	 * @param array  $input Входные данные
	 * 
	 * @return array
	 */
	public function editForm($name, array $input = array());

	/**
	 * Отрисовывает форму
	 * 
	 * @param array $params Параметры получения списка форм
	 * 
	 * @return array
	 */
	public function getFormList(array $params = array());

	/**
	 * Возвращает контроллер формы
	 * 
	 * @param string       $name    Название формы
	 * @param array        $input   Входные данные
	 * @param Closure|null $handler Обработчик результата
	 * 
	 * @return FormManager_Package_Form_Interface|null
	 */
	public function getFormController($name, array $input = array(), Closure $handler = null);

	/**
	 * Возвращает список всех элиментов
	 * 
	 * @param string $name Название формы
	 * 
	 * @return boolaen
	 */
	public function deleteForm($name);

}