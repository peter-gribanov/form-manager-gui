<?
/**
 * Шапка шаблона
 * 
 * @param string $title
 * @param string $charset
 * @param string $content
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=!empty($charset) ? $charset : 'utf-8'?>" />
<title><?if(!empty($title)):?><?=$title?> - <?endif;?>FormManager</title>
</head>
<body>
<?=$content?>
</body>
</html>