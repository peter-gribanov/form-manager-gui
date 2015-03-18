<?
/**
 * Шапка шаблона
 * 
 * @param string $title
 * @param string $content
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?if(!empty($title)):?><?=$title?> - <?endif;?>FormManager</title>
<link rel="stylesheet" type="text/css" href="<?=self::path('css/ui-lightness/jquery-ui-1.8.20.custom.css')?>" media="all" />
<link rel="stylesheet" type="text/css" href="<?=self::path('css/gui.css')?>" media="all" />
<script type="text/javascript" src="<?=self::path('js/jquery-1.7.2.min.js')?>"></script>
<script type="text/javascript" src="<?=self::path('js/jquery-ui-1.8.20.custom.min.js')?>"></script>
<script type="text/javascript" src="<?=self::path('js/main.js')?>"></script>
</head>
<body>
<?=$content?>
</body>
</html>