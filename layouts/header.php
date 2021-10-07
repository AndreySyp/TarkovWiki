<!DOCTYPE html>
<html  lang="ru">
<head>
    <meta charset="utf-8">
    <title><?php echo $title?></title>
    <meta name="description" content="<?php echo $description?>">

    <link rel="shortcut icon" type="image/x-icon" href="/tarkovWiki/favicon.ico" >
    <link rel="stylesheet" type="text/css" href="/tarkovWiki/style/reset.css"/>
    <link rel="stylesheet" type="text/css" href="/tarkovWiki/style/table/styleTable.css" >
    <link rel="stylesheet" type="text/css" href="/tarkovWiki/style/slider/slider.css"/>
    <link rel="stylesheet/less" type="text/css" href="/tarkovWiki/style/myStyle.less"/>

    <script src="//cdn.jsdelivr.net/npm/less@3.13" ></script>
    <script src="/tarkovWiki/js/jquery-latest.js"></script>
    <script src="/tarkovWiki/js/jquery.tablesorter.js"></script>
    <script src="/tarkovWiki/js/jquery.tablesorter.pager.js"></script>
    <script src="/tarkovWiki/js/script.js"></script>
</head>
<body>
    <header>
        <a href="/tarkovWiki/index.php">
            <img src="/tarkovWiki/images/header.png" alt="ESCAPE FROM TARKOV RuWIKI" >
        </a>
    </header>

    <nav class="menu">
        <ul>
            <li class="menu_list">
                <a href="/tarkovWiki/index.php">Главная</a>
            </li>
            <li class="menu_list">
                <a href="/tarkovWiki/pages/allAmmo.php">Патроны</a>
                <ul>
                    <li class="menu_link"><a  href="/tarkovWiki/pages/545Ammo.php">Патроны 5.45x39 мм</a></li>
                    <li class="menu_link"><a  href="/tarkovWiki/pages/556Ammo.php">Патроны 5.56x45 мм</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div id="content">
        <main>