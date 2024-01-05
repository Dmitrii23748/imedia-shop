<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

foreach ($arResult["ITEMS"] as $key => $arItem) {
    var_dump($arItem["PROPERTIES"]["MORE_PHOTO"]);
}
//  Что делать дальше не понятно!!!!!!!!!!!!!!!!!!!!!

// var_dump($arItem["PROPERTIES"]["MORE_PHOTO"]);