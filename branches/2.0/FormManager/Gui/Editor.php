<?php
/**
 * FormManager GUI package
 * 
 * @package   FormManagerGui
 * @author    Peter Gribanov <info@peter-gribanov.ru>
 * @version   2.0 SVN: $Revision: 192 $
 * @since     $Date: 2011-12-30 20:15:26 +0400 (Fri, 30 Dec 2011) $
 * @link      http://code.google.com/p/form-manager-gui/
 * @copyright 2008 by Peter Gribanov
 * @license   http://peter-gribanov.ru/license	GNU GPL Version 3
 */

/**
 * Редактор формы
 * 
 * @package FormManager\Gui
 * @author  Peter S. Gribanov <info@peter-gribanov.ru>
 */
class FormManager_Gui_Editor {

	/**
	 * @var array
	 */
	private $input = array();

	/**
	 * Сборщик формы
	 * 
	 * @var FormManager_Gui_Collector_Form|null
	 */
	private $collector = null;


	/**
	 * Конструктор
	 */
	public function __construct() {
		$this->collector = new FormManager_Gui_Form();
	}

	/**
	 * Устанавливает входные данные
	 * 
	 * @param array $input Входные данные
	 */
	public function setInput(array $input = array()) {
		$this->input = array_merge($this->input, $input);
	}

	/**
	 * Устанавливает редактируемую форму
	 * 
	 * @param FormManager_Model_Form $form Редактируемая форма
	 */
	public function setForm(FormManager_Model_Form $form) {
		$this->input = array_merge($this->input, $this->collector->disassemble($form));
	}

	/**
	 * Создает форму для редактирования другой формы
	 * Если форма для редактирования не передана создает новую форму
	 * 
	 * @return FormManager_Model_Form
	 */
	public function assemble() {
		return $this->collector->getForm($this->input);
	}

	/**
	 * @return FormManager_Model_Form
	 */
	public function export() {
		return $this->collector->assemble($this->input);
	}
}