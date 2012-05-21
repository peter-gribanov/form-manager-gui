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
 * Пакета форм версии 4.0
 * 
 * @package FormManager\Package
 * @author  Peter Gribanov <info@peter-gribanov.ru>
 */
class FormManager_Package_Fm40 implements FormManager_Package_Interface {

	/**
	 * Фабрика комплекса программ
	 * 
	 * @var FormManager_Factory|null
	 */
	private $factory = null;

	/**
	 * Фабрика элементов
	 * 
	 * @var FormManager_Element_Factory|null
	 */
	private $element_factory = null;


	/**
	 * Конструктор
	 * 
	 * @param FormManager_Factory $factory Фабрика комплекса программ
	 */
	public function __construct(FormManager_Factory $factory) {
		$this->factory = $factory;
	}

	/**
	 * Загружает форму
	 * 
	 * @param array   $form    Описание формы
	 * @param Closure $handler Обработчик результата
	 * @param array   $input   Входные данные
	 * 
	 * @return FormManager_Package_Form_Interface
	 */
	public function controller($form, Closure $handler, array $input = array()) {
		if (!$this->element_factory) {
			$this->element_factory = new FormManager_Element_Factory();
		}
		$form = new FormManager_Package_Fm40_Form(
			$this->element_factory->assign($form)->setValue($input),
			$this->factory->View()
		);
		return $form->setHandler($handler);
	}

	/**
	 * Возвращает список всех элиментов
	 * 
	 * @return array
	 */
	public function getElements() {
		// рефлексия
		return array();
	}

	/**
	 * Возвращает форму для составления параметров элимента
	 * 
	 * @param string $name Название элимента
	 * 
	 * @return array
	 */
	public function getElementForm($name) {
		// рефлексия
		
		// заглушка для формы
		if ($name == 'Form') {
			return array(
				'element'  => 'Form',
				'name'     => 'noname',
				'label'    => 'No name',
				'filters'  => array(),
				'children' => array(),
				'settings' => 'Settings form'
			);
		}
		return array();
	}

	/**
	 * Возвращает список всех фильтров
	 * 
	 * @return array
	 */
	public function getFilters() {
		// рефлексия
		return array();
	}

	/**
	 * Возвращает форму для составления параметров фильтра
	 * 
	 * @param string $name Название фильтра
	 * 
	 * @return array
	 */
	public function getFilterForm($name) {
		// рефлексия
		return array();
	}

}