<?php
/**
 * FormManager package
 * 
 * @package   FormManager
 * @author    Peter Gribanov <info@peter-gribanov.ru>
 * @version   4.0 SVN: $Revision: 41 $
 * @since     $Date: 2011-10-01 00:28:31 +0400 (Сб, 01 окт 2011) $
 * @link      http://peter-gribanov.ru/open-source/form-manager/4.0/
 * @copyright 2008 by Peter Gribanov
 * @license   http://peter-gribanov.ru/license	GNU GPL Version 3
 */

// для работы функции spl_autoload_register нужен php версии 5.1.2 и старше
if (version_compare(phpversion(), '5.1.2', '<') == true) {
	exit('Requires PHP 5.1.2');
}

/**
 * Корневой путь к библиотеке на сервере
 * 
 * @todo DocBlox не ципляет комментарий
 * 
 * @var string
 */
define('FORM_MANAGER_PATH', dirname(__FILE__));

// определение http пути к дирректории
// http путь по умолчанию
$http_path = '/';
$path = realpath($_SERVER['DOCUMENT_ROOT']);
if (dirname(__FILE__) != $path && strpos($path, dirname(__FILE__)) === 0) {
	$http_path = str_replace(dirname(__FILE__), '', $path).'/';
}

/**
 * Корневой HTTP путь к библиотеке на сервере
 * 
 * @var string
 */
define('FORM_MANAGER_HTTP_PATH', $http_path);

unset($http_path, $path);

/**
 * Версия менеджера форм
 * 
 * @var string
 */
define('FORM_MANAGER_VERSION', '4.0');

/**
 * Версия пользовательского интерфейса для менеджера форм
 * 
 * @var string
 */
define('FORM_MANAGER_GUI_VERSION', '2.0');


if (!function_exists('p')) {
	/**
	 * Функция отладки, обычно определяется во внешней библиотеке debuger
	 * 
	 * @author Peter Gribanov <info@peter-gribanov.ru>
	 * 
	 * @param $var Выводимая переменная
	 */
	function p($var) {
		echo '<p style="border:1px #ccc dashed;background:#efe">'.highlight_string(print_r($var, true), true).'</p>';
	}
}

// подключение автолоудера
require dirname(__FILE__).'/autoload.php';
