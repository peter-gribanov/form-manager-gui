<?
/**
 * Шблон коллекции элиментов
 * 
 * @param array $collection
 */
?>
<fieldset class="b-collection el-<?=strtolower($collection['element'])?>">
	<legend title="<?=$collection['label']?>"><?=$collection['element']?></legend>
	<section class="b-child">
		<?foreach($collection['children'] as $child):?>
			<?if(isset($child['children'])):?>
				<?=self::inc('editor/collection.tpl', array('collection' => $child))?>
			<?else:?>
				<?=self::inc('editor/element.tpl', array('element' => $child))?>
			<?endif;?>
		<?endforeach;?>
	</section>
	<section class="b-filters">
		<?foreach($collection['filters'] as $filter):?>
			<?=self::inc('editor/filter.tpl', array('filter' => $filter))?>
		<?endforeach;?>
	</section>
	<section class="b-sttings">
		<h3>Settings</h3>
		<ul class="b-crumbs">
			<li><?=$collection['element']?></li>
		</ul>
		<div class="b-sttings-form" data-control="settings">
			<?=$collection['settings']?>
		</div>
	</section>
</fieldset>