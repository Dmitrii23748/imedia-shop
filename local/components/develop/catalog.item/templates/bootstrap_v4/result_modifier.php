<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

var_dump($arResult['ITEM']);
foreach ($arResult["ITEMS"] as $key => $arItem) {
    var_dump($arResult["ITEMS"]);
    // var_dump($arItem["PROPERTIES"]["MORE_PHOTO"]);

    // $arWaterMark = array(
    //     array(
    //         "name" => "watermark",
    //         "position" => "bottomright", // Положение
    //         "type" => "image",
    //         "size" => "real",
    //         "file" => $_SERVER["DOCUMENT_ROOT"] . '/upload/copy.png', // Путь к картинке
    //         "fill" => "exact",
    //     )
    // );
    // $arFileTmp = CFile::ResizeImageGet(
    //     $arElement["DETAIL_PICTURE"],
    //     array("width" => 250, "height" => 127),
    //     BX_RESIZE_IMAGE_EXACT,
    //     true,
    //     $arWaterMark
    // );
};




// var_dump($arItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"]);