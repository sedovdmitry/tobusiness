<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Электронное Снабжение</title>

        <link href='http://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic'
            rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet"
            type="text/css">

        <meta content="width=device-width, initial-scale=1" name="viewport">

        <!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"> -->
        <link href="images/apple-touch-icon.png" rel="apple-touch-icon-precomposed">

        <!-- bundle style -->
        <link href="app/css/bundle.min.css" rel="stylesheet"/>

        <link href='fonts/style.css' rel='stylesheet prefetch'>

    </head>

    <body>

        <div class="container">
            <div class="page-wrap">

                <?php include('templates/firstHeaderDemand.php'); ?>

                <div class="grid_9">
                    <style>
                        .nav ul {
                            margin-top: 24px;
                        }
                        .uk-buttonUpdate {
                            margin-top: 40px;
                        }
                    </style>
                    <?php include('templates/header.php'); ?>

                </div>

                <div class="grid_12">

                    <div class="inner_container">
                        <div class="col_1of1">
                            <section class="box widget find">
                                <div class="bh-position-title">
                                    <div class="uk-container uk-container-center">
                                        <div class="uk-panel">
                                            <h1>Отслеживание спроса</h1>
                                        </div>
                                    </div>
                                </div>

                                <div class="bh-position bh-position-default">
                                    <div class="uk-container uk-container-center">

                                        <ul class="uk-breadcrumb">
                                            <li>
                                                <a href="index.php">Главная</a>
                                            </li>
                                            <li class="uk-active">
                                                <span>Спрос</span>
                                            </li>
                                        </ul>

                                        <!--
                                        <div align="center" class="uk-alert uk-alert-large uk-animation-shake" id="invoice-info" data-uk-alert>
                                            <a href="http://new.tobusiness.ru/tender/invoicedocuments/"><button class="uk-buttonShop btn-large">
                                            <i class="uk-icon-reply"></i>
                                            Покупатель запросил счет на товары</button></a>
                                        </div> -->

                                        <div class="uk-alert-danger uk-alert-large uk-animation-shake" data-uk-alert
                                            id="invoice-info">
                                            <a class="uk-alert-close uk-close" href=""></a>
                                            <a href="http://new.tobusiness.ru/tender/invoicedocuments/">
                                                Покупатель запросил счет на товары</a>
                                        </div>

                                        <span class="" id="action-info"></span>

                                        <div class="uk-overflow-container">

                                            <!-- Panel-box 1 -->

                                            <div class="uk-grid col_1of1 uk-grid-match" data-uk-grid-margin>
                                                <div class="uk-width-medium-2-10">
                                                    <div class="uk-panel">
                                                        <img alt="Product Image" height="75" src="images/shop_product-01-1.jpg"
                                                            width="100">
                                                    </div>
                                                </div>
                                                <div class="uk-width-medium-3-10">
                                                    <div class="uk-panel">
                                                        <a class="bh-text-uppercase uk-link-reset" href="shop-singleproduct.html">Цилиндр тормозной главный с вакуумным усилителем в сборе (2 контурная с-ма) YUEJIN 1041/1020, штук</a><br>
                                                        <span class="uk-text-muted uk-text-small">Категории: ПАЗ-3205</span><br>
                                                        <span class="uk-text-muted uk-text-small">Кат. номер: 0977450240002</span><br>
                                                        <span class="uk-text-success uk-text-medium">
                                                            <b>Количество в заявке: 1</b>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="uk-width-medium-3-10">
                                                    <div class="uk-panel uk-text-nowrap">
                                                        <form class="uk-form">

                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                <label>

                                                                    <i class="uk-icon-cube"></i>

                                                                </label>
                                                                <div class="uk-form-icon">
                                                                    <input class="uk-form-width-small offer-delivery" for="input-range"
                                                                        id="stock-24" type="number" value="1">
                                                                </div>
                                                                <span class="uk-text-muted uk-text-small">ед.</span><br>

                                                                <br>

                                                                <div class="uk-form-row">
                                                                    <label>
                                                                        <i class="uk-icon-truck"></i>
                                                                    </label>

                                                                    <input class="uk-form-width-mini offer-delivery" id="stock-24" type="number"
                                                                        value="0">

                                                                    <span class="uk-text-muted uk-text-small">дн.</span>
                                                                </div>

                                                                <div class="uk-form-row">
                                                                    <div class="uk-text-left">
                                                                        <label>
                                                                            <i class="uk-icon-info"></i>
                                                                        </label>
                                                                        <select>
                                                                            <option>Новый оригинал</option>
                                                                            <option>Новый аналог</option>
                                                                            <option>Восстановленный</option>
                                                                        </select>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="uk-width-medium-2-10">
                                                    <div class="uk-panel">

                                                        <form class="uk-form">
                                                                <div class="uk-form-row">

                                                                    <div class="uk-form-icon">
                                                                        <i class="uk-icon-rouble"></i>
                                                                        <input class="uk-form-width-small offer-delivery" id="stock-24" type="number"
                                                                            value="0">
                                                                    </div>
                                                                    <br/>

                                                                </div>

                                                                <button act="offer-send" class="uk-buttonUpdate" id="ordersend-22" rel="22">
                                                                    <i class="uk-icon-envelope-o"></i>
                                                                    Отправить</button>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>


                                            <div class="uk-grid col_1of1 uk-grid-match" data-uk-grid-margin>
                                                <div class="uk-width-medium-2-10">
                                                    <div class="uk-panel">
                                                        <img alt="Product Image" height="75" src="images/shop_product-01-1.jpg"
                                                            width="100">
                                                    </div>
                                                </div>
                                                <div class="uk-width-medium-3-10">
                                                    <div class="uk-panel">
                                                        <a class="bh-text-uppercase uk-link-reset" href="shop-singleproduct.html">Генератор 90 А ПАЗ</a><br>
                                                        <span class="uk-text-muted uk-text-small">Категории: ПАЗ-3205</span><br>
                                                        <span class="uk-text-muted uk-text-small">Кат. номер: 0977450240002</span><br>
                                                        <span class="uk-text-success uk-text-medium">
                                                            <b>Количество в заявке: 1</b>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="uk-width-medium-3-10">
                                                    <div class="uk-panel uk-text-nowrap">
                                                        <form class="uk-form">

                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                <label>

                                                                    <i class="uk-icon-cube"></i>

                                                                </label>
                                                                <div class="uk-form-icon">
                                                                    <input class="uk-form-width-small offer-delivery" for="input-range"
                                                                        id="stock-24" type="number" value="1">
                                                                </div>
                                                                <span class="uk-text-muted uk-text-small">ед.</span><br>

                                                                <br>

                                                                <div class="uk-form-row">
                                                                    <label>
                                                                        <i class="uk-icon-truck"></i>
                                                                    </label>

                                                                    <input class="uk-form-width-mini offer-delivery" id="stock-24" type="number"
                                                                        value="0">

                                                                    <span class="uk-text-muted uk-text-small">дн.</span>
                                                                </div>

                                                                <div class="uk-form-row">
                                                                    <div class="uk-text-left">
                                                                        <label>
                                                                            <i class="uk-icon-info"></i>
                                                                        </label>
                                                                        <select>
                                                                            <option>Новый оригинал</option>
                                                                            <option>Новый аналог</option>
                                                                            <option>Восстановленный</option>
                                                                        </select>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="uk-width-medium-2-10">
                                                    <div class="uk-panel">

                                                        <form class="uk-form">
                                                                <div class="uk-form-row">

                                                                    <div class="uk-form-icon">
                                                                        <i class="uk-icon-rouble"></i>
                                                                        <input class="uk-form-width-small offer-delivery" id="stock-24" type="number"
                                                                            value="0">
                                                                    </div>
                                                                    <br/>

                                                                </div>

                                                                <button act="offer-send" class="uk-buttonUpdate" id="ordersend-22" rel="22">
                                                                    <i class="uk-icon-envelope-o"></i>
                                                                    Отправить</button>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            </div> <!-- grid -->



                                            <!--  //Panel-box 1 -->

                                            <br><br>

                                            <!-- uk-panel-box 2 -- >

                                            <div class="uk-grid uk-grid-match" data-uk-grid-margin>
                                                <div class="uk-width-medium-2-10">
                                                    <div class="uk-panel">
                                                        <img alt="Product Image" height="75" src="images/shop_product-01-1.jpg"
                                                            width="100">
                                                    </div>
                                                </div>
                                                <div class="uk-width-medium-3-10">
                                                    <div class="uk-panel">
                                                        <a class="bh-text-uppercase uk-link-reset" href="shop-singleproduct.html">Генератор 90 А ПАЗ</a><br>
                                                        <span class="uk-text-muted uk-text-small">Категории: ПАЗ-3205</span><br>
                                                        <span class="uk-text-muted uk-text-small">Кат. номер: 0977450240002</span><br>
                                                        <span class="uk-text-success uk-text-medium">
                                                            <b>Количество в заявке: 1</b>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="uk-width-medium-3-10">
                                                    <div class="uk-panel uk-text-nowrap">
                                                        <form class="uk-form">

                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                <label>

                                                                    <i class="uk-icon-cube"></i>

                                                                </label>
                                                                <div class="uk-form-icon">
                                                                    <input class="uk-form-width-small offer-delivery" for="input-range"
                                                                        id="stock-24" type="number" value="1">
                                                                </div>
                                                                <span class="uk-text-muted uk-text-small">ед.</span><br>

                                                                <br>

                                                                <div class="uk-form-row">
                                                                    <label>
                                                                        <i class="uk-icon-truck"></i>
                                                                    </label>

                                                                    <input class="uk-form-width-mini offer-delivery" id="stock-24" type="number"
                                                                        value="0">

                                                                    <span class="uk-text-muted uk-text-small">дн.</span>
                                                                </div>

                                                                <div class="uk-form-row">
                                                                    <div class="uk-text-left">
                                                                        <label>
                                                                            <i class="uk-icon-info"></i>
                                                                        </label>
                                                                        <select>
                                                                            <option>Новый оригинал</option>
                                                                            <option>Новый аналог</option>
                                                                            <option>Восстановленный</option>
                                                                        </select>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="uk-width-medium-2-10">
                                                    <div  class="uk-panel ">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        <code>.uk-panel-box</code>
                                                        <form class="uk-form">
                                                                

                                                                    <div class="uk-form-icon">
                                                                        <i class="uk-icon-rouble"></i>
                                                                        <input class="uk-form-width-small offer-delivery" id="stock-24" type="number"
                                                                            value="0">
                                                                    </div>
                                                                    <br/>

                                                                

                                                                <button act="offer-send" class="uk-buttonUpdate" id="ordersend-22" rel="22">
                                                                    <i class="uk-icon-envelope-o"></i>
                                                                    Отправить</button>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- // uk-panel-box 2 -- >

                                            <br>

                                            <!-- uk-panel-box test - 1 -- >

                                            <div class="uk-grid" data-uk-grid-margin>
                                                <div class="uk-width-medium-1-3">
                                                    <div class="uk-panel uk-panel-box">
                                                        <h3 class="uk-panel-title">Title</h3>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        <code>.uk-panel-box</code>
                                                    </div>
                                                </div>
                                                <div class="uk-width-medium-1-3">
                                                    <div class="uk-panel uk-panel-box">
                                                        <h3 class="uk-panel-title">Title</h3>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        <code>.uk-panel-box</code>
                                                    </div>
                                                </div>
                                                <div class="uk-width-medium-1-3">
                                                    <div class="uk-panel uk-panel-box">
                                                        <h3 class="uk-panel-title">Title</h3>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        <code>.uk-panel-box</code>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- //uk-panel-box test - 1 -- >

                                            <!-- uk-panel-box test - 2 -- >

                                            <div class="uk-grid" data-uk-grid-margin>
                                                <div class="uk-width-medium-1-3">
                                                    <div class="uk-panel uk-panel-box">
                                                        <h3 class="uk-panel-title">Title</h3>
                                                        Lorem
                                                    </div>
                                                </div>
                                                <div class="uk-width-medium-1-3">
                                                    <div class="uk-panel uk-panel-box">
                                                        <h3 class="uk-panel-title">Title</h3>
                                                        Lorem kjhkjhkljkljlkjlkjklj jlkjlkjlkj
                                                    </div>
                                                </div>
                                                <div class="uk-width-medium-1-3">
                                                    <div class="uk-panel uk-panel-box">
                                                        <h3 class="uk-panel-title">Title</h3>
                                                        Lorem
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- // uk-panel-box test - 2 -- >

                                            <!--// END Panel-box -->

                                            <table class="uk-table uk-table-hover uk-table-striped uk-text-break">
                                                <thead>
                                                    <tr>
                                                        <th class="uk-width-2-10"></th>
                                                        <th class="uk-width-4-10"></th>
                                                        <th class="uk-width-2-10"></th>
                                                        <th class="uk-width-2-10"></th>
                                                    </tr>
                                                </thead>
                                                <tbody id="catalog-orders">
                                                    <tr>
                                                        <td class="uk-text-center uk-text-middle">
                                                            <img alt="Product Image" height="75" src="images/shop_product-01-1.jpg"
                                                                width="100">
                                                        </td>
                                                        <td class="uk-text-middle">
                                                            <a class="bh-text-uppercase uk-link-reset" href="shop-singleproduct.html">Генератор 90 А ПАЗ</a><br>
                                                            <span class="uk-text-muted uk-text-small">Категории: ПАЗ-3205</span><br>
                                                            <span class="uk-text-muted uk-text-small">Кат. номер: 0977450240002</span><br>
                                                            <span class="uk-text-success uk-text-medium">
                                                                <b>Количество в заявке: 1</b>
                                                            </span>
                                                        </td>
                                                        <td class="uk-text-left uk-text-middle uk-text-nowrap">
                                                            <form class="uk-form">

                                                                <div class="uk-form-controls uk-form-controls-text">
                                                                    <label>

                                                                        <i class="uk-icon-cube"></i>

                                                                    </label>
                                                                    <div class="uk-form-icon">
                                                                        <input class="uk-form-width-small offer-delivery" for="input-range"
                                                                            id="stock-24" type="number" value="1">
                                                                    </div>
                                                                    <span class="uk-text-muted uk-text-small">ед.</span><br>

                                                                    <br>

                                                                    <div class="uk-form-row">
                                                                        <label>
                                                                            <i class="uk-icon-truck"></i>
                                                                        </label>

                                                                        <input class="uk-form-width-mini offer-delivery" id="stock-24" type="number"
                                                                            value="0">

                                                                        <span class="uk-text-muted uk-text-small">дн.</span>
                                                                    </div>

                                                                    <div class="uk-form-row">
                                                                        <div class="uk-text-left">
                                                                            <label>
                                                                                <i class="uk-icon-info"></i>
                                                                            </label>
                                                                            <select>
                                                                                <option>Новый оригинал</option>
                                                                                <option>Новый аналог</option>
                                                                                <option>Восстановленный</option>
                                                                            </select>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </form>
                                                        </td>
                                                        <td class="uk-text-center uk-text-nowrap">
                                                            <form class="uk-form">
                                                                <div class="uk-form-row">

                                                                    <div class="uk-form-icon">
                                                                        <i class="uk-icon-rouble"></i>
                                                                        <input class="uk-form-width-small offer-delivery" id="stock-24" type="number"
                                                                            value="0">
                                                                    </div>
                                                                    <br/>

                                                                </div>

                                                                <button act="offer-send" class="uk-buttonUpdate" id="ordersend-22" rel="22">
                                                                    <i class="uk-icon-envelope-o"></i>
                                                                    Отправить</button>

                                                            </div>
                                                        </form>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="uk-text-center uk-text-middle">
                                                        <img alt="Product Image" height="75" src="images/shop_product-07-1.jpg"
                                                            width="100">
                                                    </td>
                                                    <td class="uk-text-middle">
                                                        <span class="bh-text-uppercase">Цилиндр тормозной главный с вакуумным усилителем
                                                            в сборе (2 контурная с-ма) YUEJIN 1041/1020, штук</span><br>
                                                        <span class="uk-text-muted uk-text-small">Категории: YUEJIN</span><br>
                                                        <span class="uk-text-muted uk-text-small">Кат. номер: 0977450240002</span><br>
                                                        <span class="uk-text-success uk-text-medium">
                                                            <b>Количество в заявке: 2</b>
                                                        </span>
                                                    </td>
                                                    <td class="uk-text-left uk-text-middle uk-text-nowrap">
                                                        <form class="uk-form">

                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                <label>

                                                                    <i class="uk-icon-cube"></i>

                                                                </label>
                                                                <div class="uk-form-icon">
                                                                    <input class="uk-form-width-small offer-delivery" id="stock-24" type="number"
                                                                        value="1">
                                                                </div>
                                                                <span class="uk-text-muted uk-text-small">ед.</span><br>

                                                                

                                                                <br>

                                                                <div class="uk-form-row">
                                                                    <label>
                                                                        <i class="uk-icon-truck"></i>
                                                                    </label>

                                                                    <input class="uk-form-width-mini offer-delivery" id="stock-24" type="number"
                                                                        value="0">

                                                                    <span class="uk-text-muted uk-text-small">дн.</span>
                                                                </div>

                                                                <div class="uk-form-row">
                                                                    <div class="uk-text-left">
                                                                        <label>
                                                                            <i class="uk-icon-info"></i>
                                                                        </label>
                                                                        <select>
                                                                            <option>Новый оригинал</option>
                                                                            <option>Новый аналог</option>
                                                                            <option>Восстановленный</option>
                                                                        </select>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </form>
                                                    </td>
                                                    <td class="uk-text-center uk-text-nowrap">
                                                        <form class="uk-form">
                                                            <div class="uk-form-row">

                                                                <div class="uk-form-icon">
                                                                    <i class="uk-icon-rouble"></i>
                                                                    <input class="uk-form-width-small offer-delivery" id="stock-24" type="number"
                                                                        value="0">
                                                                </div>
                                                                <br/>

                                                            </div>

                                                            <button act="offer-send" class="uk-buttonUpdate" id="ordersend-22" rel="22">
                                                                <i class="uk-icon-envelope-o"></i>
                                                                Отправить</button>

                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="uk-text-center uk-text-middle">
                                                    <img alt="Product Image" height="75" src="images/shop_product-01-1.jpg"
                                                        width="100">
                                                </td>
                                                <td class="uk-text-middle">
                                                    <a class="bh-text-uppercase uk-link-reset" href="shop-singleproduct.html">Генератор 90 А ПАЗ</a><br>
                                                    <span class="uk-text-muted uk-text-small">Категории: ПАЗ-3205</span><br>
                                                    <span class="uk-text-muted uk-text-small">Кат. номер: 0977450240002</span><br>
                                                    <span class="uk-text-success uk-text-medium">
                                                        <b>Количество в заявке: 1</b>
                                                    </span>
                                                </td>
                                                <td class="uk-text-left uk-text-middle uk-text-nowrap">
                                                    <form class="uk-form">

                                                        <div class="uk-form-controls uk-form-controls-text">
                                                            <label>

                                                                <i class="uk-icon-cube"></i>

                                                            </label>
                                                            <div class="uk-form-icon">
                                                                <input class="uk-form-width-small offer-delivery" id="stock-24" type="number"
                                                                    value="1">
                                                            </div>
                                                            <span class="uk-text-muted uk-text-small">ед.</span><br>

                                                            <br>

                                                            <div class="uk-form-row">
                                                                <label>
                                                                    <i class="uk-icon-truck"></i>
                                                                </label>

                                                                <input class="uk-form-width-mini offer-delivery" id="stock-24" type="number"
                                                                    value="0">

                                                                <span class="uk-text-muted uk-text-small">дн.</span>
                                                            </div>

                                                            <div class="uk-form-row">
                                                                <div class="uk-text-left">
                                                                    <label>
                                                                        <i class="uk-icon-info"></i>
                                                                    </label>
                                                                    <select>
                                                                        <option>Новый оригинал</option>
                                                                        <option>Новый аналог</option>
                                                                        <option>Восстановленный</option>
                                                                    </select>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </form>
                                                </td>
                                                <td class="uk-text-center uk-text-nowrap">
                                                    <form class="uk-form">
                                                        <div class="uk-form-row">

                                                            <div class="uk-form-icon">
                                                                <i class="uk-icon-rouble"></i>
                                                                <input class="uk-form-width-small offer-delivery" id="stock-24" type="number"
                                                                    value="0">
                                                            </div>
                                                            <br/>

                                                        </div>

                                                        <button act="offer-send" class="uk-buttonUpdate" id="ordersend-22" rel="22">
                                                            <i class="uk-icon-envelope-o"></i>
                                                            Отправить</button>

                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="uk-text-center uk-text-middle">
                                                <img alt="Product Image" height="75" src="images/shop_product-07-1.jpg"
                                                    width="100">
                                            </td>
                                            <td class="uk-text-middle">
                                                <span class="bh-text-uppercase">Цилиндр тормозной главный с вакуумным усилителем
                                                    в сборе (2 контурная с-ма) YUEJIN 1041/1020, штук</span><br>
                                                <span class="uk-text-muted uk-text-small">Категории: YUEJIN</span><br>
                                                <span class="uk-text-muted uk-text-small">Кат. номер: 0977450240002</span><br>
                                                <span class="uk-text-success uk-text-medium">
                                                    <b>Количество в заявке: 2</b>
                                                </span>
                                            </td>
                                            <td class="uk-text-left uk-text-middle uk-text-nowrap">
                                                <form class="uk-form">

                                                    <div class="uk-form-controls uk-form-controls-text">
                                                        <label>

                                                            <i class="uk-icon-cube"></i>

                                                        </label>
                                                        <div class="uk-form-icon">
                                                            <input class="uk-form-width-small offer-delivery" id="stock-24" type="number"
                                                                value="1">
                                                        </div>
                                                        <span class="uk-text-muted uk-text-small">ед.</span><br>

                                                        

                                                        <br>

                                                        <div class="uk-form-row">
                                                            <label>
                                                                <i class="uk-icon-truck"></i>
                                                            </label>

                                                            <input class="uk-form-width-mini offer-delivery" id="stock-24" type="number"
                                                                value="0">

                                                            <span class="uk-text-muted uk-text-small">дн.</span>
                                                        </div>

                                                        <div class="uk-form-row">
                                                            <div class="uk-text-left">
                                                                <label>
                                                                    <i class="uk-icon-info"></i>
                                                                </label>
                                                                <select>
                                                                    <option>Новый оригинал</option>
                                                                    <option>Новый аналог</option>
                                                                    <option>Восстановленный</option>
                                                                </select>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </form>
                                            </td>
                                            <td class="uk-text-center uk-text-nowrap">
                                                <form class="uk-form">

                                                    <div class="uk-form-row">

                                                        <div class="uk-form-icon">
                                                            <i class="uk-icon-rouble"></i>
                                                            <input class="uk-form-width-small offer-delivery" id="stock-24" type="number"
                                                                value="0">
                                                        </div>
                                                        <br/>
                                                        <!-- <span class="uk-text-muted uk-text-small">не включая стоимость транспортировки</span> -->
                                                    </div>

                                                    <div class="uk-form-row uk-text-bottom">

                                                        <button act="offer-send" class="uk-buttonUpdate" id="ordersend-22" rel="22">
                                                            <i class="uk-icon-envelope-o"></i>
                                                            Отправить</button>

                                                    </div>

                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br/>

                    </section>
                    <br/>

                    <!--
                <div class="uk-width-medium">
                    <div class="uk-panel uk-panel-box uk-panel-header">
                        <h3 class="uk-panel-title">Товаров</h3>
                        <span class="uk-float-left">Cart Subtotal</span>
                        <span class="uk-float-right">$209.80</span>
                        <br>
                        <span class="uk-float-left">Доставка <a href="#shop-cart-shipping" data-uk-modal>(калькуляция)</a></span>
                        <span class="uk-float-right">Бесплатная доставка</span>
                        <br><br>
                        <span class="uk-float-left">Итоговая стоимость</span>
                        <span class="uk-float-right">$209.80</span>

                        <div id="shop-cart-shipping" class="uk-modal">
                            <div class="uk-modal-dialog">
                                <form class="uk-form">
                                    <div class="uk-grid" data-uk-margin="{cls:'uk-margin-top'}">
                                        <div class="uk-width-medium-1-1">
                                            <select>
                                                <option>United Kingdom (UK)</option>
                                                <option>United Stated (US)</option>
                                            </select>
                                        </div>
                                        <div class="uk-width-medium-1-1">
                                            <input type="text" placeholder="State / county" class="uk-form-large uk-width-1-1">
                                        </div>
                                        <div class="uk-width-medium-1-1">
                                            <input type="text" placeholder="Postcode / ZIP" class="uk-form-large uk-width-1-1">
                                        </div>
                                        <div class="uk-width-1-1">
                                            <button class="uk-button uk-button-primary uk-float-right">Update Totals</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
          -->

                    <script>
                        var ckeck_url = 'http://new.tobusiness.ru/tender/orderscheck/';
                        var send_url = '/index.php?plugin=tender&cmd=offersend';
                        var order_url = 'http://new.tobusiness.ru/tender/orderline/{ACT_ID}.html';
                        var invoice_url = 'http://new.tobusiness.ru/tender/checkinvoice/';
                        var invView = 'http://new.tobusiness.ru/tender/invoicedocuments/';
                        var curent_oreders = new Array();

                        $(document).ready(function () {
                            checkOrders();
                            setInterval(checkOrders, 1000 * 60 * 3);
                            checkInvoice();
                            setInterval(checkInvoice, 1000 * 60 * 3);
                        });
                    </script>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- gtid_9 -->

<?php include('templates/sliderLogos.php'); ?>

<?php include('templates/footer.php'); ?>

</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"
type="text/javascript"></script>
<script src="app/js/allScripts.min.js" type="text/javascript"></script>
<script src="js/components/tooltip.min.js" type="text/javascript"></script>

<script>
// set countUp options
var options = {
    useEasing: true, // toggle easing
    useGrouping: false, // 1,000,000 vs 1000000
    separator: '', // character to use as a separator
    decimal: '.', // character to use as a decimal
}
var useOnComplete = false;
var useEasing = true;
var useGrouping = true;

// create instance
window.onload = function () {
    // fire animation
    // var element = document.querySelector('.jumbo');
    var demo = new countUp('myTargetElement', 0, 300, 0, 10, options);
    demo.start();
}
</script>
<script src="app/js/countUpSettings.min.js" type="text/javascript"></script>
<script src="js/components/tooltip.min.js" type="text/javascript"></script>

</html>