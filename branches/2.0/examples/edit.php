<? include '../init.php'?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FormManager</title>
</head>
<body>
<div class="nav">
	<ul>
		<li><a href="list.php">Список форм</a></li>
		<?if(!empty($_GET['form'])):?>
			<li><a href="show.php?f=<?=$_GET['form']?>">Посмотреть Форму</a></li>
			<li><a href="remove.php?f=<?=$_GET['form']?>">Удалить форму</a></li>
		<?endif;?>
	</ul>
</div>
<?
$factory = new FormManager_Factory();
$editor = $factory->Gui()->getEditor(isset($_GET['form']) ? $_GET['form'] : null, $_POST);
echo $factory->Viwe()->render($editor, 'editor.tpl');
?>
</body>
</html>