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
 * Фабрика комплекса программ
 * 
 * @package FormManager
 * @author  Peter Gribanov <info@peter-gribanov.ru>
 */
class FormManager_Factory {

	/**
	 * Представление
	 * 
	 * @var FormManager_View_Interface|null
	 */
	private $view = null;

	/**
	 * Павкет форм
	 * 
	 * @var FormManager_Package_Interface|null
	 */
	private $package = null;

	/**
	 * Хранилище
	 * 
	 * @var FormManager_Storage_Interface|null
	 */
	private $storage = null;

	/**
	 * Пользовательский интерфейс
	 * 
	 * @var FormManager_Gui_Interface|null
	 */
	private $gui = null;


	/**
	 * Возвращает представление
	 * 
	 * @param FormManager_View_Interface|null $view Представление
	 * 
	 * @return FormManager_View_Interface
	 */
	public function View(FormManager_View_Interface $view = null) {
		if ($view) {
			$this->view = $view;
		} elseif (!$this->view) {
			$this->view = new FormManager_View();
		}
		return $this->view;
	}

	/**
	 * Возвращает пакет форм
	 * 
	 * @param FormManager_Package_Interface|null $package Пакет форм
	 * 
	 * @return FormManager_Package_Interface
	 */
	public function Package(FormManager_Package_Interface $package = null) {
		if ($package) {
			$this->package = $package;
		} elseif (!$this->package) {
			$this->package = new FormManager_Package_Fm40($this);
		}
		return $this->package;
	}

	/**
	 * Возвращает хранилище
	 * 
	 * @param FormManager_Storage_Interface|null $storage Хранилище
	 * 
	 * @return FormManager_Storage_Interface
	 */
	public function Storage(FormManager_Storage_Interface $storage = null) {
		if ($storage) {
			$this->storage = $storage;
		} elseif (!$this->storage) {
			$this->storage = new FormManager_Storage_Bridge('php');
		}
		return $this->storage;
	}

	/**
	 * Возвращает пользовательский интерфейс
	 * 
	 * @param FormManager_Gui_Interface|null $gui Пользовательский интерфейс
	 * 
	 * @return FormManager_Gui_Interface
	 */
	public function Gui(FormManager_Gui_Interface $gui = null) {
		if ($gui) {
			$this->gui = $gui;
		} elseif (!$this->gui) {
			$this->gui = new FormManager_Gui($this);
		}
		return $this->gui;
	}

}