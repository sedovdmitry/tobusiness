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
                        <div class="col_1of3">
                            <section class="box widget weather">
                                <article class="box post">
                                    <div class="image">
                                        <img src="images/supply.png"/>
                                    </div>
                                    <div class="details">
                                        <h2>Площадка Электронного Снабжения</h2>
                                        <p align="left">Это бесплатная площадка для поставщиков. Следите за спросом.
                                            Отвечайте на запросы покупателей (в том числе, в автоматическом режиме).
                                            Выставляйте им счета и отгружайте продукцию.</p>
                                    </div>
                                </article>
                            </section>
                            <section class="box widget video">
                                <img alt="" src="images/tutorial.jpg"/>
                            </section>

                        </div>

                        <div class="col_2of3">

                            <section class="slider">
                                <div class="flexslider" id="main-slider">
                                    <ul class="slides">
                                        <li>
                                            <img src="images/start-for-client2.png"/>
                                        </li>
                                        <li>
                                            <img src="images/start-for-procurer4.png"/>
                                        </li>
                                    </ul>
                                </div>
                            </section>

                        </div>

                    </div>
                </div>

            </div>
        </div>

        <?php include('templates/sliderLogos.php'); ?>

        <?php include('templates/footer.php'); ?>

    </body>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
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