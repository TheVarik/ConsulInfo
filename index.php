<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Демонстрационная версия продукта «1С-Битрикс: Управление сайтом»");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Каталог книг");
?><main class="website-workarea"> <section class="banner banner_before1" style="background-image: url('/local/templates/inner/assets/images/banner_blog.jpg');">
<div class="banner-wrapper">
	<div class="container">
		<div class="banner__content">
			<p>
				 Более 20-ти лет управляю<br>
				 творческими проектами в<br>
				 брендинге.
			</p>
			<p>
 <b class="text_gold">
				Моя личная миссия: </b>делать<br>
				 вас богаче, а ваших<br>
				 клиентов счастливее!
			</p>
		</div>
	</div>
</div>
<div class="container">
<div class="stages">
                    <div class="stages__item">
                        <div class="stages__step">01</div>
                        <div class="stages__desc-step">АУДИТ</div>
                    </div>
                    <div class="stages__item">
                        <div class="stages__step">02</div>
                        <div class="stages__desc-step">СТРАТЕГИЯ</div>
                    </div>
                    <div class="stages__item">
                        <div class="stages__step">03</div>
                        <div class="stages__desc-step">КОНЦЕПЦИЯ</div>
                    </div>
                    <div class="stages__item">
                        <div class="stages__step">04</div>
                        <div class="stages__desc-step">ДИЗАЙН</div>
                    </div>
                    <div class="stages__item">
                        <div class="stages__step">05</div>
                        <div class="stages__desc-step">КОММУНИКАЦИИ</div>
                    </div>
</div>
</section>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"Yanicode",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
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
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MEDIA_PROPERTY" => "",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "2",
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
		"PROPERTY_CODE" => array("",""),
		"SEARCH_PAGE" => "/search/",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SLIDER_PROPERTY" => "",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_RATING" => "N",
		"USE_SHARE" => "N"
	)
);?>
 </main><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>