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

                                    <h2>Вход</h2>

                                    <div class="uk-form-row">
                                        <label class="uk-form-label" for="form-h-ip">Логин</label>
                                        <div class="uk-form-controls">
                                            <div class="uk-form-icon">
                                                <i class="uk-icon-user"></i><input class="uk-form-width-large" id="form-h-ip" placeholder="логин (не email)"
                                                    type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-form-row">
                                        <label class="uk-form-label" for="form-h-it">Ваш пароль</label>
                                        <div class="uk-form-controls">
                                            <div class="uk-form-icon">
                                                <i class="uk-icon-unlock"></i><input class="uk-form-width-large" id="form-h-it" placeholder="пароль"
                                                    type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <br/>

                                </form>
                                <div style="margin-left: 215px">
                                <br/>

                                    <button class="uk-buttonShop">
                                        <i class="uk-icon-unlock"></i>
                                        Войти</button>
                                    <a class="uk-buttonUpdate uk-button-primary" href="shop-checkout.html">
                                        <i class="uk-icon-user-plus"></i>
                                        Регистрация</a>
                                </div>
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

</html>