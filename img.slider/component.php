<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$r = 0;
$arFilter_map = Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"], "ACTIVE"=>"Y");		
$res_map = CIBlockElement::GetList(Array($arParams["SORT_BY1"]=>$arParams["SORT_ORDER1"]), $arFilter_map, false, false, Array());
while($ob_map = $res_map->GetNextElement())
{
	$r++;
	$arFields_map = $ob_map->GetFields();	
	$arProps_map = $ob_map->GetProperties();
	$arResult["ITEMS"][$r] = $arFields_map;
	$arResult["ITEMS"][$r]["PROPS"] = $arProps_map;
}
$this->IncludeComponentTemplate();
?>
