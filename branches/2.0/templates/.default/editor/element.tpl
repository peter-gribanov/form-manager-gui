<?
/**
 * Шблон элимента
 * 
 * @param array $element
 */
?>
<fieldset class="b-element el-<?=strtolower($element['element'])?>">
	<legend title="<?=$element['label']?>"><?=$element['element']?></legend>
	<section class="b-filters">
		<?foreach($element['filters'] as $filter):?>
			<?=self::inc('editor/filter.tpl', array('filter' => $filter))?>
		<?endforeach;?>
	</section>
	<section class="b-sttings">
		<h3>Settings</h3>
		<ul class="b-crumbs">
			<li><?=$element['element']?></li>
		</ul>
		<div class="b-sttings-form" data-control="settings">
			<?=$element['settings']?>
		</div>
	</section>
</fieldset>