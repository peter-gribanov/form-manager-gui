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
	 * @param string $name Название формы
	 * @param array  $input Входные данные
	 * 
	 * @return array
	 */
	public function getEditor($name = null, array $input = array());

	/**
	 * Отрисовывает форму
	 * 
	 * @param array $params Параметры получения списка форм
	 * 
	 * @return array
	 */
	public function getFormList(array $params = array());

	/**
	 * Возвращает список всех элиментов
	 * 
	 * @param string  $name    Название формы
	 * @param Closure $hendler Обработчик результата
	 * @param array   $input   Входные данные
	 * 
	 * @return array
	 */
	public function getForm($name, Closure $hendler, array $input = array());

	/**
	 * Возвращает список всех элиментов
	 * 
	 * @param string $name Название формы
	 * 
	 * @return boolaen
	 */
	public function deleteForm($name);

}