<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
CJSCore::Init(array('jquery'));
$templateFolder = &$this->GetFolder();
?>
<script type="text/javascript" src="<?=$templateFolder.'/js/jquery.jshowoff.min.js'?>"></script>
<script type="text/javascript" src="<?=$templateFolder.'/js/script.js'?>"></script>
<?
if(count($arResult) > 0){
	?>
	<div id="slider">
		<?
        shuffle($arResult["ITEMS"]);
		foreach($arResult["ITEMS"] as $key => $arItem)
		{
			?>
			<a href="<?=$arItem["PROPS"]["LINK"]["VALUE"]?>"><img src="<?=CFile::GetPath($arItem['PREVIEW_PICTURE'])?>" alt=""/></a>
			<?
		}
		?>
	</div>
	<?
}
else {
	echo "";
}
?>

