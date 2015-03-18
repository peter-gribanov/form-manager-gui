<?php
include '../init.php';
$factory = new FormManager_Factory();
// контроллер редактора
if (isset($_GET['form'])) {
	$editor = $factory->Gui()->editForm($_GET['form'], $_POST);
} else {
	$editor = $factory->Gui()->createForm($_POST);
}
echo $factory->View()->render($editor, array('html.tpl', 'layout/simple.tpl', 'editor/index.tpl'));