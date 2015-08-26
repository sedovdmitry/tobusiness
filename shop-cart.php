<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Электронное Снабжение</title>

        <link href='http://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic'
            rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet"
            type="text/css">

        <link href='http://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
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
                <?php include('templates/leftSidebarCatalog.php'); ?>

                <?php include('templates/firstHeader.php'); ?>

                <div class="grid_9">

                    <?php include('templates/header.php'); ?>

                    <div class="inner_container">
                        <div class="col_1of1">
                            <section class="box widget find">
                                <div class="bh-position-title">
                                    <div class="uk-container uk-container-center">
                                        <div class="uk-panel">
                                            <h1>Корзина</h1>
                                        </div>
                                    </div>
                                </div>

                                <div class="bh-position bh-position-default">
                                    <div class="uk-container uk-container-center">

                                        <ul class="uk-breadcrumb">
                                            <li>
                                                <a href="index.php">Главная</a>
                                            </li>
                                            <li>
                                                <a href="catalog.php">Каталог</a>
                                            </li>
                                            <li class="uk-active">
                                                <span>Корзина</span>
                                            </li>
                                        </ul>

                                        <div class="uk-overflow-container">
                                            <table class="uk-table uk-table-hover uk-text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Изображение</th>
                                                        <th>Наименование</th>
                                                        <th class="uk-text-center">Количество</th>
                                                        <th class="uk-text-center">Допустимы</th>
                                                        <th class="uk-text-center">Удалить</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="shop-singleproduct.html">
                                                                <img alt="Product Image" height="75" src="images/shop_product-01-1.jpg"
                                                                    width="100">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="bh-text-uppercase uk-link-reset" href="shop-singleproduct.html">Авто шина 12.00R20 Кама-310</a><br>
                                                            <span class="uk-text-muted uk-text-small">No. 0977450240002</span>
                                                        </td>
                                                        <td class="uk-text-center">
                                                            <form class="uk-form"><input class="uk-form-width-mini" placeholder="1" type="number"></form>
                                                        </td>
                                                        <td class="uk-text-left">
                                                            <div class="uk-form-row">
                                                                <div class="uk-form-controls uk-form-controls-text">
                                                                    <input checked id="form-s-r1" name="radio1" type="radio">
                                                                    <label for="form-s-r1">Новые оригиналы</label><br>
                                                                    <label><input name="radio1" type="radio">
                                                                        Аналоги</label><br>
                                                                    <label><input name="radio1" type="radio">
                                                                        Восстановленные</label><br>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="uk-text-center">
                                                            <a href="#">
                                                                <i class="uk-icon-times"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="shop-singleproduct.html">
                                                                <img alt="Product Image" height="75" src="images/shop_product-07-1.jpg"
                                                                    width="100">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a class="bh-text-uppercase uk-link-reset" href="shop-singleproduct.html">Wayfarer Glasses</a><br>
                                                            <span class="uk-text-muted uk-text-small">No. 0977450240003</span>
                                                        </td>
                                                        <td class="uk-text-center">
                                                            <form class="uk-form"><input class="uk-form-width-mini" placeholder="1" type="number"></form>
                                                        </td>
                                                        <td class="uk-text-left">
                                                            <div class="uk-form-row">
                                                                <div class="uk-form-controls uk-form-controls-text">
                                                                    <input checked id="form-s-r2" name="radio2" type="radio">
                                                                    <label for="form-s-r2">Новые оригиналы</label><br>
                                                                    <label><input name="radio2" type="radio">
                                                                        Аналоги</label><br>
                                                                    <label><input name="radio2" type="radio">
                                                                        Восстановленные</label><br>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="uk-text-center">
                                                            <a href="#">
                                                                <i class="uk-icon-times"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="12"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <form class="uk-form uk-grid" data-uk-margin>
                                            <div class="uk-width-1-1 uk-text-right">
                                                <button class="uk-buttonUpdate">Обновить корзину</button>
                                                <a class="uk-buttonShop uk-button-primary" href="shop-checkout.html">
                                                    <i class="uk-icon-check"></i>
                                                    Оформить Покупку</a>
                                            </div>
                                        </form>
                                    </section>

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
                    var demo = new countUp('myTargetElement', 0, 1600, 0, 10, options);
                    demo.start();
                }
            </script>
            <script src="app/js/countUpSettings.min.js" type="text/javascript"></script>

        </html>