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
                <a href="./index.html" class="header__logo">
                    <img width="300" height="92" src="/local/templates/inner/assets/images/svg/logo-yanicode.svg" alt="yanicode">
                </a>
                <div class="header__burger header__burger_close">
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                </div>
                <div class="header-nav">
                    <nav class="nav-list">
                        <a href="./index.html" class="nav-list__item">ГЛАВНАЯ</a>
                        <a href="./services.html" class="nav-list__item">УСЛУГИ</a>
                    </nav>
                    <div class="header__phone">
                        <a href="tel:+79114510616">+79114510616</a>
                    </div>

                </div>
            </div>
        </div>
    </header>
