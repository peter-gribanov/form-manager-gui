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
 * Интерфейс пакета форм
 * 
 * @package FormManager\Package
 * @author  Peter Gribanov <info@peter-gribanov.ru>
 */
interface FormManager_Package_Interface {

	/**
	 * Загружает форму
	 * 
	 * @param array   $form    Описание формы
	 * @param Closure $handler Обработчик результата
	 * @param array   $input   Входные данные
	 * 
	 * @return FormManager_Package_Form_Interface
	 */
	public function controller($form, Closure $handler, array $input = array());

	/**
	 * Возвращает список всех элиментов
	 * 
	 * @return array
	 */
	public function getElements();

	/**
	 * Возвращает форму для составления параметров элимента
	 * 
	 * @param string $name Название элимента
	 * 
	 * @return array
	 */
	public function getElementForm($name);

	/**
	 * Возвращает список всех фильтров
	 * 
	 * @return array
	 */
	public function getFilters();

	/**
	 * Возвращает форму для составления параметров фильтра
	 * 
	 * @param string $name Название фильтра
	 * 
	 * @return array
	 */
	public function getFilterForm($name);

}