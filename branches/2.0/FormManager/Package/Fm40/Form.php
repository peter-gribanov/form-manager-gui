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
 * Форма
 * 
 * @package FormManager\Package
 * @author  Peter Gribanov <info@peter-gribanov.ru>
 */
class FormManager_Package_Fm40_Form implements FormManager_Package_Form_Interface {

	/**
	 * Форма
	 * 
	 * @var FormManager_Collection_Form
	 */
	private $form = null;

	/**
	 * Обработчик результата
	 * 
	 * @var Closure
	 */
	private $handler = null;

	/**
	 * Представление
	 * 
	 * @var FormManager_View_Interface|null
	 */
	private $view = null;


	/**
	 * Конструктор
	 * 
	 * @param FormManager_Collection_Form $form    Объект формы
	 * @param FormManager_View_Interface  $vive    Объект представления
	 */
	public function __construct(FormManager_Collection_Form $form, FormManager_View_Interface $vive) {
		$this->form = $form;
		$this->view = $vive;
	}

	/**
	 * Устанавливает обработчик успешного заполнения формы
	 * 
	 * @param Closure $handler Обработчик
	 * 
	 * @return FormManager_Package_Fm40_Form
	 */
	public function setHandler(Closure $handler) {
		$this->handler = $handler;
		return $this;
	}

	/**
	 * Отрисовывает форму
	 * 
	 * @param string|null $template Шаблон
	 * 
	 * @return string
	 */
	public function render($template = null) {
		if ($this->form->isChanged()) {
			// выполнение первичной фильтрации, без нее isValid почти всегда будит true
			$values = $this->form->getValue();
			if ($this->form->isValid()) {
				try {
					$message = call_user_func_array($this->handler, array($values));
					$message = array_merge(
						$this->form->getDecorator('success') ?: array(),
						(array)$message
					);
					$this->form->addDecorator('success', $message);
				} catch (FormManager_Exception $e) {
					$message = array_merge(
						$this->form->getDecorator('errors') ?: array(),
						(array)$exeption->getMessage()
					);
					$this->form->addDecorator('errors', $message);
				}
			}
		}
		return $this->view->render(
			array('element' => $this->form->assemble()),
			$template ?: 'form.tpl'
		);
	}

}