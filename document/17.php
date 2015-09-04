<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Карточка закупки | Электронное Снабжение</title>

        <link href='http://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic'
            rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet"
            type="text/css">

        <meta content="width=device-width, initial-scale=1" name="viewport">

        <!-- <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon"> -->
        <link href="../images/apple-touch-icon.png" rel="apple-touch-icon-precomposed">

        <!-- bundle style -->
        <link href="../app/css/bundle.min.css" rel="stylesheet"/>

        <link href='../fonts/style.css' rel='stylesheet prefetch'>

    </head>

    <body>

        <div class="container">
            <div class="page-wrap">

                <?php include('../templates/firstHeaderDemand.php'); ?>

                <div class="grid_9">
                    <style>
                        .nav ul {
                            margin-top: 24px;
                        }
                        
                        .uk-buttonUpdate {
                            margin-top: 40px;
                        }
                    </style>
                    <?php include('../templates/header.php'); ?>

                </div>

                <div class="grid_12">

                    <div class="inner_container">
                        <div class="col_1of1">
                            <section class="box widget find">
                                <div class="bh-position-title">
                                    <div class="uk-container uk-container-center">
                                        <div class="uk-panel">
                                            <h1>Просмотр предложений по заявке</h1>
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
                                                <a href="documents.php">Мои закупки</a>
                                            </span>
                                        </li>
                                        <li class="uk-active">
                                            <span>Документ 17</span>
                                        </li>
                                    </ul>

                                    <div class="uk-overflow-container">

                                        <!-- -->

                                        <div class="uk-overflow-container">
                                            <table class="uk-table uk-table-hover uk-text-break">
                                                <thead>
                                                    <tr>
                                                        <th>Изображение</th>
                                                        <th>Наименование</th>
                                                        <th class="uk-text-center uk-text-break">Количество в заявке</th>
                                                        <th class="uk-text-center uk-text-break">Найдено предложений</th>
                                                        <th class="uk-text-center">Действия</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr rel="9">
                                                        <td rel="9" class="uk-text-center uk-text-middle">
                                                            <a href="shop-singleproduct.html">
                                                                <img alt="Product Image" height="75" src="../images/shop_product-01-1.jpg"
                                                                    width="100">
                                                            </a>
                                                        </td>
                                                        <td rel="9" class="uk-text-middle">
                                                            <a class="bh-text-uppercase uk-link-reset" href="shop-singleproduct.html">Авто шина 12.00R20 Кама-310</a><br>
                                                            <span class="uk-text-muted uk-text-small">No. 0977450240002</span>
                                                        </td>
                                                        <td rel="9" class="uk-text-center uk-text-middle">
                                                            2
                                                        </td>
                                                        <td rel="9" class="uk-text-center uk-text-middle">
                                                            4
                                                        </td>
                                                        <td rel="9" class="uk-text-center uk-text-middle" style="width: 100px">
                                                            <button class="w-open uk-button-link" data-uk-tooltip rel="9"
                                                                title="Просмотр предложений">
                                                                <i class="uk-icon-search uk-icon-medium"></i>
                                                            </button>
                                                            <button class="w-delete uk-button-link" data-uk-tooltip rel="9"
                                                                title="Отменить закупку">
                                                                <i class="uk-icon-times uk-icon-medium"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr rel="7">
                                                        <td rel="7" class="uk-text-center uk-text-middle">
                                                            <a href="shop-singleproduct.html">
                                                                <img alt="Product Image" height="75" src="../images/shop_product-07-1.jpg"
                                                                    width="100">
                                                            </a>
                                                        </td>
                                                        <td rel="7" class="uk-text-middle">
                                                            <a class="bh-text-uppercase uk-link-reset" href="shop-singleproduct.html">Цилиндр
                                                                тормозной главный с вакуумным усилителем в сборе (2 контурная с-ма) YUEJIN
                                                                1041/1020, штук</a><br>
                                                            <span class="uk-text-muted uk-text-small">No. 0977450240003</span>
                                                        </td>
                                                        <td rel="7" class="uk-text-center uk-text-middle">
                                                            2
                                                        </td>
                                                        <td rel="7" class="uk-text-center uk-text-middle">
                                                            8
                                                        </td>
                                                        <td rel="7" class="uk-text-center uk-text-middle">
                                                            <button class="w-open uk-button-link" data-uk-tooltip rel="7"
                                                                title="Просмотр предложений">
                                                                <i class="uk-icon-search uk-icon-medium"></i>
                                                            </button>
                                                            <button class="w-delete uk-button-link" data-uk-tooltip rel="7"
                                                                title="Отменить закупку">
                                                                <i class="uk-icon-times uk-icon-medium"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="uk-modal" id="modal-confirm">
                                                <div class="uk-modal-dialog">
                                                    <div class="modal-title uk-text-large uk-margin-bottom"></div>
                                                    <div class="modal-info"></div>
                                                    <div class="uk-text-center uk-margin-top">
                                                        <button class="uk-modal-close uk-button" type="button">
                                                            <i class="uk-icon-close"></i>
                                                            Отмена</button>
                                                        <button class="uk-button" id="modal-button" type="button">
                                                            <i class="uk-icon-check"></i>
                                                            Продолжить</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <script>
                                                $('a[act="offers-view"]').click(function () {
                                                    document.location = '{OFFERSVIEW}' + $(this).attr('rel');
                                                });
                                                $("#dialog-confirm").dialog({
                                                    autoOpen: false,
                                                    height: 170,
                                                    width: 400,
                                                    modal: true,
                                                    buttons: {
                                                        'Закрыть заявку': function () {
                                                            var url = 'http://new.tobusiness.ru/tender/orderclose/{ACT_ID}.html';
                                                            var id = $('#dialog-confirm-itemid').val();
                                                            $.get(url.replace('{ACT_ID}', id), null, function (data) {
                                                                $("#dialog-confirm").dialog('close');
                                                                if (data != 'false') {
                                                                    $('tr[rel="' + data + '"]').hide();
                                                                    $('#action-info').removeClass('action-info-load');
                                                                    $('#action-info').addClass('action-info-done');
                                                                    $('#action-info').text('Заявка закрыта.');
                                                                    setTimeout(function () {
                                                                        $('#action-info').text('');
                                                                        $('#action-info').removeClass('action-info-done');
                                                                    }, 5000);
                                                                } else {
                                                                    $('#action-info').removeClass('action-info-load');
                                                                    $('#action-info').addClass('action-info-error');
                                                                    $('#action-info').text('Произошла ошибка при закрытии заявки.');
                                                                    setTimeout(function () {
                                                                        $('#action-info').text('');
                                                                        $('#action-info').removeClass('action-info-error');
                                                                    }, 5000);
                                                                }

                                                            });
                                                        },
                                                        'Отмена': function () {
                                                            $(this).dialog('close');
                                                        }
                                                    }
                                                });
                                                $('button[class*="b-trash"]').click(function () {
                                                    showModal($(this).attr('rel'), 'Закрытие заявки', 'Действие является необратимым. Будут удалены все предложения поставщиков по данной заявке. Вы уверены что хотите закрыть заявку?', 'http://new.tobusiness.ru/tender/orderclose/{ACT_ID}.html');
                                                });
                                                $('button[class*="b-view"]').click(function () {
                                                    var url = 'http://new.tobusiness.ru/tender/offersview/{ACT_ID}.html';
                                                    document.location = url.replace('{ACT_ID}', $(this).attr('rel'));
                                                });
                                                $('#d-edit').click(function () {
                                                    document.location = 'http://new.tobusiness.ru/tender/documentopen/19.html';
                                                });
                                                $('#gotoinvoices').click(function () {
                                                    document.location = 'http://new.tobusiness.ru/tender/invoices/19.html';
                                                });
                                                var ckeck_url = 'http://new.tobusiness.ru/tender/offerscount/19.html';
                                                $(document).ready(function () {
                                                    checkOffers();
                                                    setInterval(checkOffers, 1000 * 60 * 3);
                                                });
                                                function showModal(id, title, text, url) {
                                                    $('#modal-confirm .modal-title').text(title);
                                                    $('#modal-confirm .modal-info').text(text);
                                                    $('#modal-button').attr('rel', url.replace('{ACT_ID}', id));
                                                    var modal = UIkit.modal("#modal-confirm");
                                                    modal.show();
                                                }
                                                $('#modal-button').click(function () {
                                                    var modal = UIkit.modal("#modal-confirm");
                                                    modal.hide();
                                                    $.get($(this).attr('rel'), null, function (data) {
                                                        if (data != 'false') {
                                                            $('tr[rel="' + data + '"]').hide();
                                                            $('#action-info').removeClass('action-info-load');
                                                            $('#action-info').addClass('action-info-done');
                                                            $('#action-info').text('Заявка закрыта.');
                                                            setTimeout(function () {
                                                                $('#action-info').text('');
                                                                $('#action-info').removeClass('action-info-done');
                                                            }, 5000);
                                                        } else {
                                                            $('#action-info').removeClass('action-info-load');
                                                            $('#action-info').addClass('action-info-error');
                                                            $('#action-info').text('Произошла ошибка при закрытии заявки.');
                                                            setTimeout(function () {
                                                                $('#action-info').text('');
                                                                $('#action-info').removeClass('action-info-error');
                                                            }, 5000);
                                                        }

                                                    });
                                                });
                                            </script>

                                        </div>

                                        <br/>
                                    </section>
                                    <br/>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- grid_1of1 -->
            </div>
        </div>

        <?php include('../templates/sliderLogos.php'); ?>

        <?php include('../templates/footer.php'); ?>

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