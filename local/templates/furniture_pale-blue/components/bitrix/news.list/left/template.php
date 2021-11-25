<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<div class="block-list">
<?foreach($arResult["ITEMS"] as $arItem):?>
<div class="plate_hide">
    <div class="news_name" ><?echo $arItem["DISPLAY_ACTIVE_FROM"]?> дата публикации </div>
    <div class="news_content">
        <p> <? echo $arItem['PROPERTIES']['HEADING']['~VALUE'];?></p>
<!--        --><?// echo $arItem['PROPERTIES']['IMG']['~VALUE'];?>

        <div class="img">
            <img src="<?=CFile::GetPath($arItem['PROPERTIES']['IMG']['~VALUE'])?>">
        </div>


    </div>
    <div class="news_plate">

        <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["PREVIEW_TEXT"]?>

        </a>
    </div>
</div>

<?endforeach;?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>

<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>



