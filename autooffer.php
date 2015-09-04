<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Автоответ | Электронное Снабжение</title>

        <link href='http://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic'
            rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet"
            type="text/css">
        <meta content="width=device-width, initial-scale=1" name="viewport">

        <!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"> -->
        <link href="images/apple-touch-icon.png" rel="apple-touch-icon-precomposed">

        <!-- bundle style -->
        <link href="app/css/bundle.css" rel="stylesheet"/>

        <link href='fonts/style.css' rel='stylesheet prefetch'>

    </head>

    <body>

        <div class="container">
            <div class="page-wrap">
                <?php include('templates/leftSidebar.php'); ?>

                <?php include('templates/firstHeader.php'); ?>

                <div class="grid_9">

                    <?php include('templates/header.php'); ?>

                    <div class="inner_container">

                        <div class="col_1of1">

                            <section class="box widget find">

                                <form class="uk-form uk-form-horizontal"
                                    style="margin-left: 50px;margin-right: 200px;">
                                    <h2>Автоответ</h2>

                                    <div class="uk-form-row">
                                        <label class="uk-form-label">Категория</label>
                                        <div class="uk-form-controls">
                                            <div class="uk-form-icon">
                                                <i class="uk-icon-truck"></i>
                                                <input class="uk-form-width-large" id="catsrch"
                                                    placeholder="(обычно модель автомобиля)" type="text"/>
                                                <input id="catid" name="catid" type="hidden" value="{CATID}"/>
                                            </div>
                                            <span class="uk-text-muted uk-text-small">Начните вводить название</span>
                                        </div>
                                    </div>
                                    <div class="uk-form-row">
                                        <label class="uk-form-label">Наименование</label>
                                        <div class="uk-form-controls">
                                            <div class="uk-form-icon">
                                                <i class="uk-icon-bullhorn"></i>
                                                <input placeholder="Прокладка ЯМЗ колпака ФГОМ силикон" class="uk-form-width-large" id="itemsrch" type="text"/>
                                                <input id="itemid" name="itemid" type="hidden"/>
                                            </div>
                                            <span class="uk-text-muted uk-text-small">подсказка появится автоматически</span>
                                        </div>
                                    </div>
                                    <div class="uk-form-row">
                                        <label class="uk-form-label">Количество ед.</label>
                                        <div class="uk-form-controls">
                                            <div class="uk-form-icon">
                                                <i class="uk-icon-archive"></i>
                                                <input class="uk-form-width-small" id="stock" name="stock" type="number"
                                                    value="1"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-form-row">
                                        <label class="uk-form-label">Отсрочка отгрузки, дней</label>
                                        <div class="uk-form-controls">
                                            <div class="uk-form-icon">
                                                <i class="uk-icon-calendar"></i>
                                                <input class="uk-form-width-small" id="delay" name="delay" type="number"
                                                    value="0"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-form-row">
                                        <label class="uk-form-label">Цена, руб.</label>
                                        <div class="uk-form-controls">
                                            <div class="uk-form-icon">
                                                <i class="uk-icon-money"></i>
                                                <input class="uk-form-width-medium" id="price" name="price" type="number"
                                                    value="0"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-form-row">
                                        <label class="uk-form-label">Вариант</label>
                                        <div class="uk-form-controls uk-form-controls-text">
                                            <input checked id="form-s-r2" name="check2" type="radio">
                                            <label value="0" data-uk-tooltip for="form-s-r2" title="Новая оригинальная запчасть">Оригинальная запчасть</label><br>
                                            <label value="1" data-uk-tooltip title="Аналог"><input name="check2" type="radio">
                                                Аналог другого производителя</label><br>
                                            <label value="2" data-uk-tooltip title="Отремонтированная работоспособная запчасть"><input name="check2" type="radio">
                                                Восстановленная после ремонта</label><br>
                                        </div>
                                    </div>
                                    <br/>
                                    <form class="uk-form uk-grid" data-uk-margin>
                                        <div style="margin-left: 116px">
                                            <button class="uk-buttonUpdate">
                                                <i class="uk-icon-times"></i>
                                                Отмена</button>
                                            <a class="uk-buttonShop uk-button-primary" href="shop-checkout.html">
                                                <i class="uk-icon-check"></i>
                                                Оформить Покупку</a>
                                        </div>
                                    </form>
                                    <br/>
                                </section>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <?php include('templates/sliderLogos.php'); ?>

            <?php include('templates/footer.php'); ?>

        </body>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"
            type="text/javascript"></script>
        <script src="app/js/allScripts.min.js" type="text/javascript"></script>
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