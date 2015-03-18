<div class="nav">
	<ul>
		<li><a href="<?=self::url('examples/list.php')?>">Список форм</a></li>
		<?if(!empty($_GET['form'])):?>
			<li><a href="<?=self::url('examples/show.php?f='.$_GET['form'])?>">Посмотреть Форму</a></li>
			<li><a href="<?=self::url('examples/remove.php?f='.$_GET['form'])?>">Удалить форму</a></li>
		<?endif;?>
	</ul>
</div>