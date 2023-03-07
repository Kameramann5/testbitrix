<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
CJSCore::Init(array('jquery'));
$templateFolder = &$this->GetFolder();
?>
<script type="text/javascript" src="<?=$templateFolder.'/js/jquery.jshowoff.min.js'?>"></script>
<script type="text/javascript" src="<?=$templateFolder.'/js/script.js'?>"></script>
	<!-- Swiper -->
    <div class="swiper-container-product-page" >
        <div class="swiper-wrapper">

		<?
if(count($arResult) > 0){
	?>

<?
        shuffle($arResult["ITEMS"]);
		foreach($arResult["ITEMS"] as $key => $arItem)
		{
			?>
			<div class="swiper-slide">	<a href="<?=$arItem["PROPS"]["LINK"]["VALUE"]?>"><img src="<?=CFile::GetPath($arItem['PREVIEW_PICTURE'])?>" alt=""/></a></div>
			<?
		}
		?>
			<?
}
else {
	echo "";
}
?>




        </div>
        
    </div>

