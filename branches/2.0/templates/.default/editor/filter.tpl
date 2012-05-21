<?
/**
 * Шблон фильтра
 * 
 * @param array $filter
 */
?>
<fieldset class="b-filter el-<?=strtolower($filter['name'])?>">
	<legend title="<?=$filter['title']?>"><?=$filter['name']?></legend>
	<section class="b-sttings">
		<h3>Settings</h3>
		<ul class="b-crumbs">
			<li><?=$filter['name']?></li>
		</ul>
		<div class="b-sttings-form" data-control="settings">
			<?=$filter['settings']?>
		</div>
	</section>
</fieldset>