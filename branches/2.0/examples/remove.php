<? include '../init.php'?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FormManager</title>
</head>
<body>
<?
if (isset($_GET['form'])) {
	$factory = new FormManager_Factory();
	echo $factory->Viwe()->render($factory->Gui()->deleteForm($_GET['form']), 'remove.tpl');
}
?>
</body>
</html>