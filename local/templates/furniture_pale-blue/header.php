<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

<?$APPLICATION->ShowHead();?>
<link href="<?=SITE_TEMPLATE_PATH?>/common.css" type="text/css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/colors.css" type="text/css" rel="stylesheet" />

	<!--[if lte IE 6]>
	<style type="text/css">
		
		#banner-overlay { 
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>images/overlay.png', sizingMethod = 'crop'); 
		}
		
		div.product-overlay {
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>images/product-overlay.png', sizingMethod = 'crop');
		}
		
	</style>
	<![endif]-->


	<title><?$APPLICATION->ShowTitle()?></title>

    <?
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/main.css");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/script.js");
    ?>

</head>
<body>
	<div id="page-wrapper">
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<div id="header">
			
			<table id="logo" >
				<tr>
					<td><a href="<?=SITE_DIR?>" title="<?=GetMessage('CFT_MAIN')?>"><?
$APPLICATION->IncludeFile(
	SITE_DIR."include/company_name.php",
	Array(),
	Array("MODE"=>"html")
);
?></a></td>
				</tr>
			</table>
			
			<div id="top-menu">
				<div id="top-menu-inner">
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_multilevel", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "horizontal_multilevel",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
				</div>
			</div>

			<div id="top-icons">
				<a href="<?=SITE_DIR?>" class="home-icon" title="<?=GetMessage('CFT_MAIN')?>">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path d="M18.121,9.88l-7.832-7.836c-0.155-0.158-0.428-0.155-0.584,0L1.842,9.913c-0.262,0.263-0.073,0.705,0.292,0.705h2.069v7.042c0,0.227,0.187,0.414,0.414,0.414h3.725c0.228,0,0.414-0.188,0.414-0.414v-3.313h2.483v3.313c0,0.227,0.187,0.414,0.413,0.414h3.726c0.229,0,0.414-0.188,0.414-0.414v-7.042h2.068h0.004C18.331,10.617,18.389,10.146,18.121,9.88 M14.963,17.245h-2.896v-3.313c0-0.229-0.186-0.415-0.414-0.415H8.342c-0.228,0-0.414,0.187-0.414,0.415v3.313H5.032v-6.628h9.931V17.245z M3.133,9.79l6.864-6.868l6.867,6.868H3.133z"></path>
                    </svg>
                </a>
				<a href="<?=SITE_DIR?>search/" class="search-icon" title="<?=GetMessage('CFT_SEARCH')?>">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path d="M18.125,15.804l-4.038-4.037c0.675-1.079,1.012-2.308,1.01-3.534C15.089,4.62,12.199,1.75,8.584,1.75C4.815,1.75,1.982,4.726,2,8.286c0.021,3.577,2.908,6.549,6.578,6.549c1.241,0,2.417-0.347,3.44-0.985l4.032,4.026c0.167,0.166,0.43,0.166,0.596,0l1.479-1.478C18.292,16.234,18.292,15.968,18.125,15.804 M8.578,13.99c-3.198,0-5.716-2.593-5.733-5.71c-0.017-3.084,2.438-5.686,5.74-5.686c3.197,0,5.625,2.493,5.64,5.624C14.242,11.548,11.621,13.99,8.578,13.99 M16.349,16.981l-3.637-3.635c0.131-0.11,0.721-0.695,0.876-0.884l3.642,3.639L16.349,16.981z"></path>
                    </svg>
                </a>
				<a href="<?=SITE_DIR?>contacts/" class="feedback-icon" title="<?=GetMessage('CFT_FEEDBACK')?>">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path d="M17.388,4.751H2.613c-0.213,0-0.389,0.175-0.389,0.389v9.72c0,0.216,0.175,0.389,0.389,0.389h14.775c0.214,0,0.389-0.173,0.389-0.389v-9.72C17.776,4.926,17.602,4.751,17.388,4.751 M16.448,5.53L10,11.984L3.552,5.53H16.448zM3.002,6.081l3.921,3.925l-3.921,3.925V6.081z M3.56,14.471l3.914-3.916l2.253,2.253c0.153,0.153,0.395,0.153,0.548,0l2.253-2.253l3.913,3.916H3.56z M16.999,13.931l-3.921-3.925l3.921-3.925V13.931z"></path>
                    </svg>
                </a>


                <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"social_link",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "social",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "LINK",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "social_link"
	),
	false
);?>
<!--форма связи--------------------------------------------------------------->

            <?$APPLICATION->IncludeComponent(
	"bitrix:iblock.element.add.form",
	"feedback1",
	array(
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_DETAIL_PICTURE" => "",
		"CUSTOM_TITLE_DETAIL_TEXT" => "",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_NAME" => "ФИО",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "",
		"CUSTOM_TITLE_TAGS" => "",
		"DEFAULT_INPUT_SIZE" => "30",
		"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
		"ELEMENT_ASSOC" => "CREATED_BY",
		"GROUPS" => array(
			0 => "1",
			1 => "2",
			2 => "3",
			3 => "4",
			4 => "5",
		),
		"IBLOCK_ID" => "11",
		"IBLOCK_TYPE" => "form",
		"LEVEL_LAST" => "Y",
		"LIST_URL" => "",
		"MAX_FILE_SIZE" => "0",
		"MAX_LEVELS" => "100000",
		"MAX_USER_ENTRIES" => "100000",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
		"PROPERTY_CODES" => array(
			0 => "27",
			1 => "NAME",
		),
		"PROPERTY_CODES_REQUIRED" => array(
			0 => "27",
			1 => "NAME",
		),
		"RESIZE_IMAGES" => "N",
		"SEF_MODE" => "N",
		"STATUS" => "ANY",
		"STATUS_NEW" => "N",
		"USER_MESSAGE_ADD" => "",
		"USER_MESSAGE_EDIT" => "Спасибо, ваша заявка добавлена ",
		"USE_CAPTCHA" => "N",
		"AJAX_MODE" => "Y",
		"COMPONENT_TEMPLATE" => "feedback1"
	),
	false
);?>

<!--форма связи--------------------------------------------------------------->

			</div>




		</div>
		
		<div id="banner">		
			<table id="banner-layout">
				<tr>
					<td id="banner-image"><div><img src="<?=SITE_TEMPLATE_PATH?>/images/head.jpg" alt=""/></div></td>
					<td id="banner-slogan">
<?
$APPLICATION->IncludeFile(
	SITE_DIR."include/motto.php",
	Array(),
	Array("MODE"=>"html")
);
?>
					</td>
				</tr>
			</table>
			<div id="banner-overlay"></div>	
		</div>

        <div class="bg_news">
            <div class="bg_news_block">
                <div class="bg_news_block_inner">
                    <h3><?=GetMessage('CFT_NEWS')?></h3>
            <?
            $APPLICATION->IncludeFile(
                SITE_DIR."include/news.php",
                Array(),
                Array("MODE"=>"html")
            );
            ?>
                </div>
            </div>
        </div>

		<div id="content">
		
			<div id="sidebar">
<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"left",
	array(
		"ROOT_MENU_TYPE" => "left",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => "left",
		"DELAY" => "N"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	));?>

<!--Тут должны были быть новости ----------------------------------------------------------------->

<!--				<div class="content-block">-->
<!--					<div class="content-block-inner">-->
<!--						<h3>--><?//=GetMessage('CFT_NEWS')?><!--</h3>-->
<?//
//$APPLICATION->IncludeFile(
//	SITE_DIR."include/news.php",
//	Array(),
//	Array("MODE"=>"html")
//);
//?>
<!--					</div>-->
<!--				</div>-->

<!--Тут должны были быть новости ----------------------------------------------------------------->

				<div class="content-block">
					<div class="content-block-inner">
						
<?
$APPLICATION->IncludeComponent("bitrix:search.form", "flat", Array(
	"PAGE" => "#SITE_DIR#search/",
),
	false
);
?>
					</div>
				</div>

				<div class="information-block">
					<div class="top"></div>
					<div class="information-block-inner">
						<h3><?=GetMessage('CFT_FEATURED')?></h3>
<?
$APPLICATION->IncludeFile(
	SITE_DIR."include/random.php",
	Array(),
	Array("MODE"=>"html")
);
?>						
					</div>
					<div class="bottom"></div>
				</div>
			</div>
		
			<div id="workarea">
				<h1 id="pagetitle"><?$APPLICATION->ShowTitle(false);?></h1>