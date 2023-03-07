<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
 $arComponentParameters = array(
    "GROUPS" => array(
        "oneslide"    =>  array(
            "NAME"  =>  "Группы товаров",
            "SORT"  =>  "300",
        ),
      
            "twoslide"    =>  array(
                "NAME"  =>  "Последний элемент",
                "SORT"  =>  "400",
            )
    ),
"PARAMETERS" => array(

"NAME" => array(
    "MULTIPLE" => "Y",
    "PARENT" => "oneslide",
    "NAME" => "id разделов (для фильтрации по бренду сделать пробел от id и вписать англ. буквами бренд) (бренд можно узнать в ссылке после фильтрации в каталоге после слов: /brand-is-) (пример: 2240 zolder)",
    "TYPE" => "STRING", 
    "DEFAULT"=>"",
),

"LASTNAME" => array(
    "PARENT" => "twoslide",
    "NAME" => "Название",
    "TYPE" => "STRING", 
    "DEFAULT"=>"",
),
"LASTNAME2" => array(
    "PARENT" => "twoslide",
    "NAME" => "Название 2 (ниже)",
    "TYPE" => "STRING", 
    "DEFAULT"=>"",
),
"LASTNAME3" => array(
    "PARENT" => "twoslide",
    "NAME" => "Ссылка",
    "TYPE" => "STRING", 
    "DEFAULT"=>"",
),








),
);
?>
