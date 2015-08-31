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
                <?php include('templates/leftSidebar.php'); ?>

                <?php include('templates/firstHeader.php'); ?>

                <div class="grid_9">

                    <?php include('templates/header.php'); ?>

                    <div class="inner_container">

                        <div class="col_1of1">

                            <section class="box widget find">

                                <form class="uk-form uk-form-horizontal"
                                    style="margin-left: 50px;margin-right: 200px;">
                                    <h2>Регистрация</h2>

                                    <div class="uk-form-row">
                                        <label class="uk-form-label" for="form-h-it">Имя пользователя</label>
                                        <div class="uk-form-controls">
                                            <div class="uk-form-icon">
                                                <i class="uk-icon-user-plus"></i><input class="uk-form-width-large" id="form-h-it" placeholder="(псевдоним)"
                                                    type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-form-row">
                                        <label class="uk-form-label" for="form-h-ip">Пароль</label>
                                        <div class="uk-form-controls">
                                            <div class="uk-form-icon">
                                                <i class="uk-icon-lock"></i><input class="uk-form-width-large" id="form-h-ip"
                                                    placeholder="(не менее 5 символов)" type="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-form-row">
                                        <label class="uk-form-label" for="form-h-ip">Подтверждение пароля</label>
                                        <div class="uk-form-controls">
                                            <div class="uk-form-icon">
                                                <i class="uk-icon-lock"></i><input class="uk-form-width-large" id="form-h-ip" placeholder="Пароль ещё раз"
                                                    type="password">
                                            </div>
                                        </div>
                                    </div>
                                    <br/>
                                    <h2>Дополнительная информация</h2>
                                    <br/>
                                    <div class="uk-form-row">
                                        <label class="uk-form-label" for="form-h-ip">E-mail</label>
                                        <div class="uk-form-controls">
                                            <div class="uk-form-icon">
                                                <i class="uk-icon-envelope"></i><input class="uk-form-width-large" id="form-h-ip"
                                                    placeholder="example@gmail.com" type="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-form-row">
                                        <label class="uk-form-label" for="form-h-ip">Организация</label>
                                        <div class="uk-form-controls">
                                            <div class="uk-form-icon">
                                                <i class="uk-icon-bank"></i><input class="uk-form-width-large" id="form-h-ip"
                                                    placeholder='ООО "Мировая Запчасть"' type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-form-row">
                                        <label class="uk-form-label" for="form-s-s">Выбрать город</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-form-width-large" id="form-h-ip" placeholder="Выбрать город"
                                                type="text">
                                                <?php include('templates/selectCity.php'); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!--
        <div class="uk-form-row">
                    <span class="uk-form-label">Мы планируем здесь: </span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <input type="radio" id="form-h-r" name="radio"> <label for="form-h-r">В основном продавать (поставщик)</label><br>
            <input type="radio" id="form-h-r" name="radio"> <label for="form-h-r">Покупать (менеджер снабжения и склада)</label><br>
                    </div>
                </div>-->
                                    <div class="uk-form-row">
                                        <label class="uk-form-label" for="form-h-ip">Фамилия</label>
                                        <div class="uk-form-controls">
                                            <div class="uk-form-icon">
                                                <i class="uk-icon-user"></i><input class="uk-form-width-large" id="form-h-ip" placeholder="Иванов"
                                                    type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-form-row">
                                        <label class="uk-form-label" for="form-h-ip">Имя</label>
                                        <div class="uk-form-controls">
                                            <div class="uk-form-icon">
                                                <i class="uk-icon-user"></i><input class="uk-form-width-large" id="form-h-ip" placeholder="Иван" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-form-row">
                                        <label class="uk-form-label" for="form-h-ip">Конт. телефон</label>
                                        <div class="uk-form-controls">
                                            <div class="uk-form-icon">
                                                <i class="uk-icon-phone"></i><input class="uk-form-width-large" id="form-h-ip" placeholder="+7(937)123-45-67"
                                                    type="tel">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-form-row">
                                        <span class="uk-form-label">С условиями регистрации на сайте</span>
                                        <div class="uk-form-controls uk-form-controls-text">
                                            <input id="form-h-c" type="checkbox">
                                            <label for="form-h-c">Согласен</label><br>
                                        </div>
                                    </div>
                                    <br/>
                                    <div style="margin-left: 215px">

                                        <button class="uk-buttonShop btn-large">
                                            <i class="uk-icon-user-plus"></i>
                                            Регистрация</button>
                                    </div>

                                    <br/>
                                    <br/>
                                </form>

                            </section>

                            <!--
        <article class="box post">
          <div class="image">
            <img src="images/start-for-client2.png" />
          </div>
           <div class="details">
            <h2>Программа Электронного Снабжения</h2>
            <p>Это бесплатная площадка для поставщиков. Следите за спросом. Отвечайте на запросы покупателей (в том числе, в автоматическом режиме). Выставляйте им счета и отгружайте продукцию. Смотрите "Быстрый старт".</p>
          </div> 
        </article>
      </div>
    
    <div class="col_2of3">
        <article class="box post">
          <div class="image">
            <img src="images/start-for-procurer4.png" />
          </div>
          <!-- <div class="details">
            <h2>Программа Электронного Снабжения</h2>
            <p>Это бесплатная площадка для поставщиков. Следите за спросом. Отвечайте на запросы покупателей (в том числе, в автоматическом режиме). Выставляйте им счета и отгружайте продукцию. Смотрите "Быстрый старт".</p>
          </div> 
        </article>-->

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

</html>