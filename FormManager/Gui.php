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
 * Пользовательский интерфейс
 * 
 * @package FormManager\Storage
 * @author  Peter Gribanov <info@peter-gribanov.ru>
 */
class FormManager_Gui implements FormManager_Gui_Interface {

	/**
	 * Фабрика комплекса программ
	 * 
	 * @var FormManager_Factory|null
	 */
	private $factory = null;


	/**
	 * Конструктор
	 * 
	 * @param FormManager_Factory $factory Фабрика комплекса программ
	 */
	public function __construct(FormManager_Factory $factory) {
		$this->factory = $factory;
	}

	/**
	 * Возвращает редактор форму
	 * 
	 * @param array  $input Входные данные
	 * 
	 * @return array
	 */
	public function createForm(array $input = array()) {
		$status = null;
		$form = $this->factory->Package()->getElementForm('Form');
		if ($input) {
			// TODO приведение к виду
			$status = $this->factory->Storage()->save($input);
			$form = $input;
		}
		//$form['sttings'] = $this->factory->Package()->getElementForm('Form', $form);
		return array(
			'status'   => $status,
			'form'     => $form,
			'elements' => $this->factory->Package()->getElements(),
			'filters'  => $this->factory->Package()->getFilters()
		);
	}

	/**
	 * Возвращает редактор форму
	 * 
	 * @param string $name  Название формы
	 * @param array  $input Входные данные
	 * 
	 * @return array
	 */
	public function editForm($name, array $input = array()) {
		$status = null;
		$form = $this->factory->Storage()->get($name);
		$form = $form['structure'];
		if ($input) {
			// TODO приведение к виду
			$this->factory->Storage()->update($input, $name);
			$form = $input;
		}
		//$form['settings'] = $this->factory->Package()->getElementForm('Form', $form);
		return array(
			'status'   => $status,
			'form'     => $form,
			'elements' => $this->factory->Package()->getElements(),
			'filters'  => $this->factory->Package()->getFilters()
		);
	}

	/**
	 * Отрисовывает форму
	 * 
	 * @param array $params Параметры получения списка форм
	 * 
	 * @return array
	 */
	public function getFormList(array $params = array()) {
		return $this->factory->Storage()->getList($params);
	}

	/**
	 * Возвращает контроллер формы
	 * 
	 * @param string       $name    Название формы
	 * @param array        $input   Входные данные
	 * @param Closure|null $handler Обработчик результата
	 * 
	 * @return FormManager_Package_Form_Interface|null
	 */
	public function getFormController($name, array $input = array(), Closure $handler = null) {
		if ($form = $this->factory->Storage()->get($name)) {
			$form = $this->factory->Package()->controller($form, $input);
			if (!($form instanceof FormManager_Package_Form_Interface)) {
				$form = null;
			} elseif ($handler) {
				$form->setHandler($handler);
			}
		}
		return $form;
	}

	/**
	 * Возвращает список всех элиментов
	 * 
	 * @param string $name Название формы
	 * 
	 * @return boolaen
	 */
	public function deleteForm($name) {
		return $this->factory->Storage()->delete($name);
	}

}