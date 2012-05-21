<?
/**
 * Редактор форм
 * 
 * @param boolean|null $status
 * @param array        $collection
 * @param array        $elements
 * @param array        $filters
 */
$elements = array(
	array('title' => 'Текст', 'name' => 'Text'),
	array('title' => 'Группа радио кнопок', 'name' => 'RadioGroup'),
);
$filters = array(
	array('title' => 'Не пустой', 'name' => 'NotEmpty'),
	array('title' => 'Проверка Email', 'name' => 'Email'),
);
?>
<section class="b-editor">
	<h1>Form Editor</h1>
	<?if($status):?>
		<div class="success">Все гуд</div>
	<?elseif($status === false):?>
		<div class="error">Есть баг</div>
	<?endif;?>
	<form action="" method="post">
	<section class="b-structure">
		<h3>Structure</h3>
		<?=self::inc('editor/collection.tpl', array('collection' => $form))?>
	</section>
	<section class="b-palette">
		<section class="b-elements active">
			<h3>Elements</h3>
			<ul>
				<?foreach($elements as $element):?>
					<li title="<?=$element['title']?>"><?=$element['name']?></li>
				<?endforeach;?>
			</ul>
		</section>
		<section class="b-filters">
			<h3>Filters</h3>
			<ul>
				<?foreach($filters as $filter):?>
					<li title="<?=$filter['title']?>"><?=$filter['name']?></li>
				<?endforeach;?>
			</ul>
		</section>
	</section>
	<section class="b-trash" data-control="trash"></section>
	<button class="b-submit" type="submit">Submit</button>
</form>
</section>