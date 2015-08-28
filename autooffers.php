<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Электронное Снабжение</title>

        <link href='http://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic'
            rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet"
            type="text/css">

        <link
            href='http://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic'
            rel='stylesheet' type='text/css'>
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
                                            <h1>Автоответ</h1>
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
                                                <span>Автоответ</span>
                                            </li>
                                        </ul>

                                        <div class="uk-margin-top uk-margin-bottom uk-panel-box uk-text-center">
                                            <form action="http://new.tobusiness.ru/tender/autooffers/" class="uk-form"
                                                method="post"/>
                                            Фильтр по категории
                                            <select name="category">
                                                <option value="all">- все категории -</option>
                                                <option value="18">&nbsp;&nbsp;КамАЗ</option>
                                                <option value="201">&nbsp;&nbsp;АМАЗ</option>
                                            </select>
                                            <button class="uk-buttonUpdate">
                                                <i class="uk-icon-filter"></i>
                                                Применить</button>
                                            <a class="uk-buttonShop uk-button-primary" id="addnew">
                                                <i class="uk-icon-plus"></i>
                                                Добавить автоответ</a>
                                        </form>
                                    </div>

                                    <div class="uk-overflow-container">
                                        <table class="uk-table uk-table-hover uk-text-break">
                                            <thead>
                                                <tr>
                                                    <th>Наименование</th>
                                                    <th>Количество</th>
                                                    <th class="uk-text-center">Цена</th>
                                                    <th class="uk-text-center uk-text-break">Отсрочка отгрузки, дней</th>
                                                    <th class="uk-text-center uk-text-break">Вариант поставки</th>
                                                    <th class="uk-text-center">Действия</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a class="bh-text-uppercase uk-link-reset" href="shop-singleproduct.html">Авто шина 12.00R20 Кама-310</a><br>
                                                        <span class="uk-text-muted uk-text-small">No. 0977450240002</span>
                                                    </td>
                                                    <td class="uk-text-center uk-text-middle">
                                                        <span>15</span>
                                                    </td>
                                                    <td class="uk-text-center uk-text-nowrap uk-text-middle">
                                                        <span>150 руб.</span>
                                                    </td>
                                                    <td class="uk-text-center uk-text-middle">
                                                        <span>1</span>
                                                    </td>
                                                    <td class="uk-text-center uk-text-middle">
                                                        <span>новый оригинал</span>
                                                    </td>
                                                    <td class="uk-text-center uk-text-middle">
                                                        <a href="#">
                                                            <i data-uk-tooltip title="Редактировать" class="uk-icon-edit uk-icon-medium"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i data-uk-tooltip title="Удалить" class="uk-icon-trash uk-icon-medium"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a class="bh-text-uppercase uk-link-reset" href="shop-singleproduct.html">Цилиндр
                                                            тормозной главный с вакуумным усилителем в сборе (2 контурная с-ма) YUEJIN
                                                            1041/1020, штук</a><br>
                                                        <span class="uk-text-muted uk-text-small">No. 0977450240003</span>
                                                    </td>
                                                    <td class="uk-text-center uk-text-middle">
                                                        <span>1</span>
                                                    </td>
                                                    <td class="uk-text-left uk-text-nowrap uk-text-middle">
                                                        <span>990 руб.</span>
                                                    </td>
                                                    <td class="uk-text-center uk-text-middle">
                                                        <span>1</span>
                                                    </td>
                                                    <td class="uk-text-center uk-text-middle">
                                                        <span>восстановленный</span>
                                                    </td>
                                                    <td class="uk-text-center uk-text-middle">
                                                        <a href="#">
                                                            <i data-uk-tooltip title="Редактировать" class="uk-icon-edit uk-icon-medium"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i data-uk-tooltip title="Удалить" class="uk-icon-trash uk-icon-medium"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br/>
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
        <script src="js/components/tooltip.min.js" type="text/javascript"></script>

    </html>