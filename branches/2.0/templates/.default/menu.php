<div class="nav">
	<ul>
		<li><a href="list.php">Список форм</a></li>
		<?if(!empty($_GET['form'])):?>
			<li><a href="show.php?f=<?=$_GET['form']?>">Посмотреть Форму</a></li>
			<li><a href="remove.php?f=<?=$_GET['form']?>">Удалить форму</a></li>
		<?endif;?>
	</ul>
</div>