<link rel="stylesheet" href="/local/templates/inner/assets/template_styles.css">
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$themeClass = isset($arParams['TEMPLATE_THEME']) ? ' bx-'.$arParams['TEMPLATE_THEME'] : '';
?>
<section class="container">
		<?foreach($arResult["ITEMS"] as $arItem):?>
            <div class="blog-list">
                <a href="./blog-details.html" class="blog">
                    <div class="blog__img">
                        <img width="100%" height="100%" src=<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?> alt="">
                    </div>
                    <div class="blog__desc">
                        <div class="blog__title">
                            <?echo $arItem["NAME"]?>
                        </div>
                        <div class="blog__date">
                            <?if ($arItem["ACTIVE_FROM"] == ""):?>
                                <?echo $arItem["TIMESTAMP_X"];?>
                        <?php /* echo '<pre>' ?>
                        <?php print_r($arItem); ?>
                        <?php echo '</pre>' ?>
                            <?*/else:?>
                        <? echo $arItem["DISPLAY_DATE"];?>
                        <? echo $arItem["ACTIVE_DATE_FORMAT"];?>
                        <? echo $arItem["ACTIVE_FROM"];?>
                        <?endif?>
                    </div>
                        <div class="blog_article">
						<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                            <?echo $arItem["PREVIEW_TEXT"];?>
						<?endif;?>
                        </div>
                    </div>
                </a>
			</div>
        <?endforeach?>
  </s>