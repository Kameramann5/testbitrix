<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<div class="group-product">
   <?foreach($arResult["NAME"] as $val):?>
<?php
$res = CIBlockSection::GetByID($val);   $ar_res = $res->GetNext();  ?>
<?php   $URL = CFile::GetPath($ar_res['PICTURE']);  $activeElements = CIBlockSection::GetSectionElementsCount($val, Array("CNT_ACTIVE"=>"Y"));  
if($val ) {
?>
<?php 
$result = explode(' ',$val);
$url_spec = $result[1];
?>

<div class="group-product-item">
<div>
<?php if($url_spec) {  ?>
	<a  href="<? echo $ar_res['SECTION_PAGE_URL']; ?>filter/brand-is-<? echo $url_spec; ?>/apply/"><img src="<?=$URL?>"></a>
<?php } else {     ?>
<a  href="<? echo $ar_res['SECTION_PAGE_URL']; ?>"><img src="<?=$URL?>"></a>
<?php  } ?>

</div>
<div>
<?php if($url_spec) {  ?>
<a href="<? echo $ar_res['SECTION_PAGE_URL']; ?>filter/brand-is-<? echo $url_spec; ?>/apply/"><span><? echo $ar_res['NAME']; ?></span></a>
<?php } else {    ?>
<a href="<? echo $ar_res['SECTION_PAGE_URL']; ?>"><span><? echo $ar_res['NAME']; ?></span></a>
<?php  } ?>





<br>
<br>
<span class="group-product-item-col"><?php echo $activeElements; ?> товаров</span>
</div>
</div>
<?php }  ?>

<?endforeach;?>
<div class="group-product-item">
<div></div>
<div><a href="   <?php echo $arResult["LASTNAME3"]; ?>">
<span>   <?php echo $arResult["LASTNAME"]; ?></span>

</a>
<br>
<br>
<span class="col_product">   <?php echo $arResult["LASTNAME2"]; ?></span>
<i class="svg inline  svg-inline-privacy_policy" aria-hidden="true">
			<svg width="11" height="7" viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.5 1L5.5 6L10.5 0.999998" stroke="#B6B5B5" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
			</i>
</div>
</div>



</div>



<?foreach($arResult["NAME"] as $va):?>
	<?php
$res = CIBlockSection::GetByID(45580);   $ar_res = $res->GetNext();  ?>
<?php   $URL = CFile::GetPath($ar_res['PICTURE']);  $activeElements = CIBlockSection::GetSectionElementsCount($va, Array("CNT_ACTIVE"=>"Y"));  ?>
<? echo $ar_res['NAME']; ?>
	
	
	
	
	
	<?endforeach;?>
