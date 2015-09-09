<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Просмотр заявки | Электронное Снабжение</title>

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
                                            <h1>Просмотр заявки</h1>
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
                                                <a href="documents.php">Мои закупки</a>
                                            </li>
                                            <li>
                                                <a href="document.php">Просмотр заявок на закупку</a>
                                            </li>
                                            <li class="uk-active">
                                                <span>заявка № 23</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </section>

                            <div class="uk-panel uk-panel-box uk-marign uk-width-1-1 ">
                                <div class="uk-margin locations">
                                    <table id="order-card">
                                        <tr>
                                            <td>
                                                <img height="auto"
                                                    src="http://new.tobusiness.ru/files/catalog/388738_F-500x500.JPG" width="200"/>
                                            </td>
                                            <td class="uk-text-large uk-text-left">
                                                <p>
                                                    <b>Подшипник 102210М</b>
                                                </p>
                                                <p>
                                                    Каталожный номер: 102210М
                                                </p>
                                                <p>
                                                    Количество: 1
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="uk-overflow-container">

<!-- Slider Range
<div class="block-center">Выберите критерий отбора предложений</div>
<div class="block-center" style="margin:20px auto"><span id="cost">Низкая цена</span><div style="width: 100px;" id="slider"></div><span id="speed">Быстрая доставка</span></div>

-->

<div style="margin:10px;">
    <table class="uk-table uk-table-striped uk-table-hover uk-text-break">
        <thead>
            <th class="uk-text-center">Рейтинг предложения</th>
            <th class="uk-text-center">Цена, руб</th>
            <th class="uk-text-center">Количество в наличии</th>
            <th class="uk-text-center">Срок поставки, дней</th>
            <th class="uk-text-center">Город</th>
            <th class="uk-text-center">Рейтинг поставщика</th>
            <th class="uk-text-center">Действия</th>
        </thead>    
        <tr>
    <td class="uk-text-center uk-text-nowrap uk-text-middle" >
        <div data-uk-tooltip title="Рейтинг рассчитывается автоматически">
                                <i class="uk-icon-star uk-text-primary"></i>
                                <i class="uk-icon-star uk-text-primary"></i>
                                <i class="uk-icon-star uk-text-primary"></i>
                                <i class="uk-icon-star uk-text-primary"></i>
                                <i class="uk-icon-star uk-text-primary"></i>
        </div>
        <span title="100" class="main-rating-stars main-rating-5"></span>
        <span class="offer-user-info"></span>
    </td>
    <td class="uk-text-right uk-text-nowrap uk-text-middle">
        <span class="best-choise" data-uk-tooltip title="Минимальная цена">345.00</span>
    </td>
    <td class="uk-text-center uk-text-nowrap uk-text-middle">
        <span class="best-choise" data-uk-tooltip title="Все в наличии">1</span>
    </td>
    <td class="uk-text-center uk-text-nowrap uk-text-middle">
        3
    </td>
    <td class="uk-text-center uk-text-nowrap uk-text-middle">
        Ростов-на-Дону
    </td>
    <td style="font: 400 30px Cookie,cursive;" class="uk-text-center uk-text-nowrap uk-text-middle">
        <span data-uk-tooltip title="Достоверность информации">
                                0
        </span>
        <span> / </span>
        <span data-uk-tooltip title="Доставка и отгрузка">
                                5
        </span>
        <span> / </span>
        <span data-uk-tooltip title="Качество товара">
                                5
        </span>
    </td>
    <td class="uk-text-center uk-text-nowrap uk-text-middle">
        <button act="offerselect" class="uk-buttonShop" rel="23" data-uk-tooltip title="Выбрать"><i class="uk-icon-check"></i></button>
    </td>
</tr>
<tr>
    <td class="uk-text-center uk-text-nowrap uk-text-middle" >
        <div data-uk-tooltip title="Рейтинг рассчитывается автоматически">
                                <i class="uk-icon-star uk-text-primary"></i>
                                <i class="uk-icon-star uk-text-primary"></i>
                                <i class="uk-icon-star uk-text-primary"></i>
                                <i class="uk-icon-star uk-text-primary"></i>
                                <i class="uk-icon-star"></i>
        </div>
        <span title="100" class="main-rating-stars main-rating-5"></span>
        <span class="offer-user-info"></span>
    </td>
    <td class="uk-text-right uk-text-nowrap uk-text-middle">
        <span class="best-choise" data-uk-tooltip title="Минимальная цена">305.00</span>
    </td>
    <td class="uk-text-center uk-text-nowrap uk-text-middle">
        <span class="best-choise" data-uk-tooltip title="Все в наличии">1</span>
    </td>
    <td class="uk-text-center uk-text-nowrap uk-text-middle">
        4
    </td>
    <td class="uk-text-center uk-text-nowrap uk-text-middle">
        Оренбург
    </td>
    <td style="font: 400 30px Cookie,cursive;" class="uk-text-center uk-text-nowrap uk-text-middle">
        <span data-uk-tooltip title="Достоверность информации">
                                5
        </span>
        <span> / </span>
        <span data-uk-tooltip title="Доставка и отгрузка">
                                4
        </span>
        <span> / </span>
        <span data-uk-tooltip title="Качество товара">
                                4
        </span>
    </td>
    <td class="uk-text-center uk-text-nowrap uk-text-middle">
        <button act="offerselect" class="uk-buttonShop" rel="24" data-uk-tooltip title="Выбрать"><i class="uk-icon-check"></i></button>
    </td>
</tr>
<tr>
    <td class="uk-text-center uk-text-nowrap uk-text-middle" >
        <div data-uk-tooltip title="Рейтинг рассчитывается автоматически">
                                <i class="uk-icon-star uk-text-primary"></i>
                                <i class="uk-icon-star uk-text-primary"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
                                <i class="uk-icon-star"></i>
        </div>
        <span title="100" class="main-rating-stars main-rating-5"></span>
        <span class="offer-user-info"></span>
    </td>
    <td class="uk-text-right uk-text-nowrap uk-text-middle">
        <span class="best-choise" data-uk-tooltip title="Минимальная цена">355.00</span>
    </td>
    <td class="uk-text-center uk-text-nowrap uk-text-middle">
        <span class="best-choise" data-uk-tooltip title="Все в наличии">1</span>
    </td>
    <td class="uk-text-center uk-text-nowrap uk-text-middle">
        5
    </td>
    <td class="uk-text-center uk-text-nowrap uk-text-middle">
        Казань
    </td>
    <td style="font: 400 30px Cookie,cursive;" class="uk-text-center uk-text-nowrap uk-text-middle">
        <span data-uk-tooltip title="Достоверность информации">
                                3
        </span>
        <span> / </span>
        <span data-uk-tooltip title="Доставка и отгрузка">
                                5
        </span>
        <span> / </span>
        <span data-uk-tooltip title="Качество товара">
                                5
        </span>
    </td>
    <td class="uk-text-center uk-text-nowrap uk-text-middle">
        <button act="offerselect" class="uk-buttonShop" rel="25" data-uk-tooltip title="Выбрать"><i class="uk-icon-check"></i></button>
    </td>
</tr>

    </table>
</div>







<script>
    $('button[act="offerselect"]').click(function(){
        var url='http://new.tobusiness.ru/tender/offerselect/index.html/offer={ACT_ID}';
        document.location=url.replace('{ACT_ID}',$(this).attr('rel'));
    });
    $(document).ready(function(){
        $('#slider').slider({min: 0,max: 100});
        $( "#slider" ).slider( "option", "value", 50 );
        $( "#slider" ).on( "slide", function( event, ui ) {calcOpacity();} );
        $( "#slider").on( "slidestop", function( event, ui ) {
            var url='http://new.tobusiness.ru/tender/offersview/16.html?priority={ACT_ID}';
            document.location=url.replace('{ACT_ID}',$( "#slider" ).slider( "option", "value"));
        } );
        function calcOpacity()
        {
            val=$( "#slider" ).slider( "option", "value");
            $('#cost').css('opacity',(100-val)/100);
            $('#speed').css('opacity',(val)/100);
        }
        calcOpacity();
    });
</script>

                                    <!-- -->




                                </div>

                            </div>
                        </div>
                        <!-- grid_1of1 -->
                    </div>
                </div>

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