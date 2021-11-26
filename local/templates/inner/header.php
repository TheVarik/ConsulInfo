<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $APPLICATION->ShowTitle() ?></title>
    <?php $APPLICATION->ShowHead(); ?>
<link rel="stylesheet" href="/local/templates/inner/assets/template_styles.css"
</head>

<body>
<div id="panel"><?php $APPLICATION->ShowPanel() ?></div>
    <header class="header">
    
        <div class="container">
            <div class="header-wrapper">
                <a href="./index.php" class="header__logo">
                    <img width="300" height="92" src="/local/templates/inner/assets/images/svg/logo-yanicode.svg" alt="yanicode">
                </a>
                <div class="header__burger header__burger_close">
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                </div>
                <div class="header-nav">
        <nav class="nav-list">
				 <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "Yanicode",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "left",
                        "USE_EXT" => "N"
                    )
                    );?>
        </nav>
            </div>
            </div>
        </div>
    </header>
