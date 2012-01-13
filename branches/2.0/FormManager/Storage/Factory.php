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
 * Фабрика хранилища
 * 
 * @package FormManager\Collector
 * @author  Peter Gribanov <info@peter-gribanov.ru>
 */
class FormManager_Storage_Factory {

	/**
	 * TODO добавить описание
	 * 
	 * @var FormManager_Storage_Interface|null
	 */
	private static $storage = null;


	/**
	 * TODO добавить описание
	 * 
	 * @return FormManager_Storage_Interface
	 */
	public static function getInstance() {
		if (!self::$storage) {
			$conf = include FORM_MANAGER_PATH.'config.php';
			$class_name = strtoupper($conf['storage-type']).substr($conf['storage-type'], 1);
			$class_name = 'FormManager_Storage_'.$class_name;
			try {
				$objects = new $class_name();
			} catch (Cms_AutoLoad_Exception $e) {
				$objects = null;
			}
			if (!($objects instanceof $class_name) || !($objects instanceof FormManager_Storage_Interface)) {
				throw new FormManager_Exceptions_ObjectType('Не удалось найти класс: '.$class_name);
			}
		}
		return self::$storage;
	}

}