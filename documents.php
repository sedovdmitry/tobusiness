<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Мои закупки | Электронное Снабжение</title>

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
                                            <h1>Список заявок на закупку</h1>
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
                                                <span>Мои закупки</span>
                                            </li>
                                        </ul>

                                        <div class="uk-overflow-container">

                                            <!-- -->

                                            <table class="uk-table uk-table-striped uk-table-hover" id="w-table">
                                                <thead>
                                                    <tr>
                                                        <th class="uk-text-center uk-text-middle">№</th>
                                                        <th class="uk-text-center uk-text-middle">Дата</th>
                                                        <th class="uk-text-center uk-text-middle">Состояние</th>
                                                        <th class="uk-text-center uk-text-middle">Комментарий</th>
                                                        <th class="uk-text-center uk-text-middle" data-uk-tooltip title="Количество ">Позиций</th>
                                                        <th class="uk-text-center uk-text-middle">Кол-во предложений</th>
                                                        <th class="uk-text-center uk-text-middle">Действия</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="uk-text-center uk-text-middle">19</td>
                                                        <td class="uk-text-center uk-text-middle">26.08.2015</td>
                                                        <td
                                                            class="uk-text-center uk-text-nowrap uk-text-middle uk-text-success d-status-1" >
                                                            <b data-uk-tooltip title="Заявка расценена">расценена</b><br/>
                                                        </td>
                                                        <td class="uk-text-left uk-text-break uk-text-middle">
                                                            <a href='http://new.tobusiness.ru/tender/document/19.html'></a>
                                                        </td>
                                                        <td class="uk-text-center uk-text-middle">1</td>
                                                        <td class="uk-text-center uk-text-middle">-</td>
                                                        <td class="uk-text-center uk-text-middle" style="width: 100px">
                                                            <button class="w-open uk-button-link" data-uk-tooltip rel="19" title="Открыть">
                                                                <i class="uk-icon-search uk-icon-medium"></i>
                                                            </button>
                                                            <button class="w-delete uk-button-link" data-uk-tooltip rel="19" title="Удалить">
                                                                <i class="uk-icon-times uk-icon-medium"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="uk-text-center uk-text-middle">18</td>
                                                        <td class="uk-text-center uk-text-middle">21.08.2015</td>
                                                        <td
                                                            class="uk-text-center uk-text-nowrap uk-text-middle uk-text-warning d-status-1" >
                                                            <b data-uk-tooltip title="Заявка закрыта и помещена архив">архив</b><br/>
                                                        </td>
                                                        <td class="uk-text-left uk-text-break uk-text-middle">
                                                            Это обычный комментарий, не ссылка
                                                        </td>
                                                        <td class="uk-text-center uk-text-middle">1</td>
                                                        <td class="uk-text-center uk-text-middle">1</td>
                                                        <td class="uk-text-center uk-text-middle" style="width: 100px">
                                                            <button class="w-open uk-button-link" data-uk-tooltip rel="18" title="Открыть">
                                                                <i class="uk-icon-search uk-icon-medium"></i>
                                                            </button>
                                                            <button class="w-delete uk-button-link" data-uk-tooltip rel="18" title="Удалить">
                                                                <i class="uk-icon-times uk-icon-medium"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="uk-text-center uk-text-middle">17</td>
                                                        <td class="uk-text-center uk-text-middle">21.08.2015</td>
                                                        <td
                                                            class="uk-text-center uk-text-nowrap uk-text-middle d-status-1" >
                                                            <b class="uk-text-muted" data-uk-tooltip title="Вашу заявку видят поставщики, подписанные на категорию, соответствующую вашей детали">в расценке </b><br/>
                                                            <b class="uk-text-primary" data-uk-tooltip title="Вам выставили счет">выставлен счет </b><br/>
                                                        </td>
                                                        <td class="uk-text-left uk-text-break uk-text-middle">
                                                            <a href='http://new.tobusiness.ru/tender/document/17.html'></a>
                                                        </td>
                                                        <td class="uk-text-center uk-text-middle">1</td>
                                                        <td class="uk-text-center uk-text-middle">-</td>
                                                        <td class="uk-text-center uk-text-middle" style="width: 100px">
                                                            <button class="w-open uk-button-link" data-uk-tooltip rel="17" title="Открыть">
                                                                <i class="uk-icon-search uk-icon-medium"></i>
                                                            </button>
                                                            <button class="w-delete uk-button-link" data-uk-tooltip rel="17" title="Удалить">
                                                                <i class="uk-icon-times uk-icon-medium"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="uk-text-center uk-text-middle">16</td>
                                                        <td class="uk-text-center uk-text-middle">19.08.2015</td>
                                                        <td
                                                            class="uk-text-center uk-text-nowrap uk-text-middle d-status-1" >
                                                            <b class="uk-text-bold" data-uk-tooltip title="Вы запросили счет у поставщика. Ожидайте выставления счета.">запрошен счет</b><br/>
                                                        </td>
                                                        <td class="uk-text-left uk-text-break uk-text-middle">
                                                            <a href='http://new.tobusiness.ru/tender/document/16.html'></a>
                                                        </td>
                                                        <td class="uk-text-center uk-text-middle">1</td>
                                                        <td class="uk-text-center uk-text-middle">1</td>
                                                        <td class="uk-text-center uk-text-middle" style="width: 100px">
                                                            <button class="w-open uk-button-link" data-uk-tooltip rel="16" title="Открыть">
                                                                <i class="uk-icon-search uk-icon-medium"></i>
                                                            </button>
                                                            <button class="w-delete uk-button-link" data-uk-tooltip rel="16" title="Удалить">
                                                                <i class="uk-icon-times uk-icon-medium"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="uk-text-center uk-text-middle">15</td>
                                                        <td class="uk-text-center uk-text-middle">18.08.2015</td>
                                                        <td
                                                            class="uk-text-center uk-text-nowrap uk-text-middle  d-status-1">
                                                            <b class="uk-text-warning" data-uk-tooltip title="Заявка закрыта и помещена архив">архив</b><br/>
                                                        </td>
                                                        <td class="uk-text-left uk-text-break uk-text-middle">
                                                            <a href='http://new.tobusiness.ru/tender/document/15.html'></a>
                                                        </td>
                                                        <td class="uk-text-center uk-text-middle">1</td>
                                                        <td class="uk-text-center uk-text-middle">1</td>
                                                        <td class="uk-text-center uk-text-middle" style="width: 100px">
                                                            <button class="w-open uk-button-link" data-uk-tooltip rel="15" title="Открыть">
                                                                <i class="uk-icon-search uk-icon-medium"></i>
                                                            </button>
                                                            <button class="w-delete uk-button-link" data-uk-tooltip rel="15" title="Удалить">
                                                                <i class="uk-icon-times uk-icon-medium"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="uk-text-center uk-text-middle">14</td>
                                                        <td class="uk-text-center uk-text-middle">18.08.2015</td>
                                                        <td
                                                            class="uk-text-center uk-text-nowrap uk-text-middle  d-status-1" >
                                                            <b class="uk-text-warning" data-uk-tooltip title="Заявка закрыта и помещена архив">архив </b><br/>
                                                        </td>
                                                        <td class="uk-text-left uk-text-break uk-text-middle">
                                                            <a href='http://new.tobusiness.ru/tender/document/14.html'></a>
                                                        </td>
                                                        <td class="uk-text-center uk-text-middle">1</td>
                                                        <td class="uk-text-center uk-text-middle">1</td>
                                                        <td class="uk-text-center uk-text-middle" style="width: 100px">
                                                            <button class="w-open uk-button-link" data-uk-tooltip rel="14" title="Открыть">
                                                                <i class="uk-icon-search uk-icon-medium"></i>
                                                            </button>
                                                            <button class="w-delete uk-button-link" data-uk-tooltip rel="14" title="Удалить">
                                                                <i class="uk-icon-times uk-icon-medium"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="uk-text-center uk-text-middle">13</td>
                                                        <td class="uk-text-center uk-text-middle">18.08.2015</td>
                                                        <td
                                                            class="uk-text-center uk-text-nowrap uk-text-middle  d-status-1" >
                                                            <b class="uk-text-warning" data-uk-tooltip title="Заявка закрыта и помещена архив">архив </b><br/>
                                                        </td>
                                                        <td class="uk-text-left uk-text-break uk-text-middle">
                                                            <a href='http://new.tobusiness.ru/tender/document/13.html'></a>
                                                        </td>
                                                        <td class="uk-text-center uk-text-middle">2</td>
                                                        <td class="uk-text-center uk-text-middle">2</td>
                                                        <td class="uk-text-center uk-text-middle" style="width: 100px">
                                                            <button class="w-open uk-button-link" data-uk-tooltip rel="13" title="Открыть">
                                                                <i class="uk-icon-search uk-icon-medium"></i>
                                                            </button>
                                                            <button class="w-delete uk-button-link" data-uk-tooltip rel="13" title="Удалить">
                                                                <i class="uk-icon-times uk-icon-medium"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="uk-text-center uk-text-middle">12</td>
                                                        <td class="uk-text-center uk-text-middle">18.08.2015</td>
                                                        <td
                                                            class="uk-text-center uk-text-nowrap uk-text-middle d-status-1" >
                                                            <b class="uk-text-primary" data-uk-tooltip title="Найдены предложения по вашей заявке">выставлен счет </b><br/>
                                                        </td>
                                                        <td class="uk-text-left uk-text-break uk-text-middle">
                                                            комметарий
                                                        </td>
                                                        <td class="uk-text-center uk-text-middle">1</td>
                                                        <td class="uk-text-center uk-text-middle">1</td>
                                                        <td class="uk-text-center uk-text-middle" style="width: 100px">
                                                            <button class="w-open uk-button-link" data-uk-tooltip rel="12" title="Открыть">
                                                                <i class="uk-icon-search uk-icon-medium"></i>
                                                            </button>
                                                            <button class="w-delete uk-button-link" data-uk-tooltip rel="12" title="Удалить">
                                                                <i class="uk-icon-times uk-icon-medium"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="uk-text-center uk-text-middle">10</td>
                                                        <td class="uk-text-center uk-text-middle">18.08.2015</td>
                                                        <td
                                                            class="uk-text-center uk-text-nowrap uk-text-middle d-status-1">
                                                            <b class="uk-text-danger" data-uk-tooltip title="Поставщик выставил вам счет">запрошен счет </b><br/>
                                                        </td>
                                                        <td class="uk-text-left uk-text-break uk-text-middle">
                                                            
                                                        </td>
                                                        <td class="uk-text-center uk-text-middle">1</td>
                                                        <td class="uk-text-center uk-text-middle">2</td>
                                                        <td class="uk-text-center uk-text-middle" style="width: 100px">

                                                            <button class="w-open uk-button-link" data-uk-tooltip rel="10" title="Открыть">
                                                                <i class="uk-icon-search uk-icon-medium"></i>
                                                            </button>
                                                            <button class="w-delete uk-button-link" data-uk-tooltip rel="10" title="Удалить">
                                                                <i class="uk-icon-times uk-icon-medium"></i>
                                                            </button>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="uk-text-center uk-text-middle">8</td>
                                                        <td class="uk-text-center uk-text-middle">17.08.2015</td>
                                                        <td
                                                            class="uk-text-center uk-text-nowrap uk-text-middle d-status-1">
                                                            <b class="uk-text-success" data-uk-tooltip title="Вашу заявку видят поставщики, подписанные на категорию, соответствующую вашей детали">расценена </b><br/>
                                                            <b class="uk-text-primary" data-uk-tooltip title="Найдены предложения по вашей заявке">выставлен счет </b><br/>
                                                        </td>
                                                        <td class="uk-text-left uk-text-break uk-text-middle">
                                                            ждем еще предложений
                                                        </td>
                                                        <td class="uk-text-center uk-text-middle">2</td>
                                                        <td class="uk-text-center uk-text-middle">2</td>
                                                        <td class="uk-text-center uk-text-middle" style="width: 100px">
                                                            <button class="w-open uk-button-link" data-uk-tooltip rel="8" title="Открыть">
                                                                <i class="uk-icon-search uk-icon-medium"></i>
                                                            </button>
                                                            <button class="w-delete uk-button-link" data-uk-tooltip rel="8" title="Удалить">
                                                                <i class="uk-icon-times uk-icon-medium"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="uk-text-center uk-text-middle">7</td>
                                                        <td class="uk-text-center uk-text-middle">17.08.2015</td>
                                                        <td
                                                            class="uk-text-center uk-text-nowrap uk-text-middle d-status-1" >
                                                            <b class="uk-text-primary" uk-text-primary data-uk-tooltip title="Найдены предложения по вашей заявке">выставлен счет </b><br/>                                                            
                                                        </td>
                                                        <td class="uk-text-left uk-text-break uk-text-middle">
                                                            показать главному 
                                                        </td>
                                                        <td class="uk-text-center uk-text-middle">2</td>
                                                        <td class="uk-text-center uk-text-middle">2</td>
                                                        <td class="uk-text-center uk-text-middle" style="width: 100px">
                                                            <button class="w-open uk-button-link" data-uk-tooltip rel="7" title="Открыть">
                                                                <i class="uk-icon-search uk-icon-medium"></i>
                                                            </button>
                                                            <button class="w-delete uk-button-link" data-uk-tooltip rel="7" title="Удалить">
                                                                <i class="uk-icon-times uk-icon-medium"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <script>
                                                $(function () {
                                                    $('button').addClass('uk-button');
                                                    $('button[class^="w-edit"]').click(function () {
                                                        var url = "http://new.tobusiness.ru/tender/documentopen/{ACT_ID}.html";
                                                        document.location = url.replace('{ACT_ID}', $(this).attr('rel'));
                                                    });
                                                    $('button[class^="w-open"]').click(function () {
                                                        var url = "http://new.tobusiness.ru/tender/document/{ACT_ID}.html";
                                                        document.location = url.replace('{ACT_ID}', $(this).attr('rel'));
                                                    });
                                                    $('button[class^="w-publish"]').click(function () {
                                                        var url = "http://new.tobusiness.ru/tender/documentpublish/{ACT_ID}.html";
                                                        document.location = url.replace('{ACT_ID}', $(this).attr('rel'));
                                                    });
                                                    $('button[class^="w-delete"]').click(function () {
                                                        var url = "http://new.tobusiness.ru/tender/documentdelete/{ACT_ID}.html";
                                                        showModal($(this).attr('rel'), 'Удаление закупки', 'Удаление закупки приведет к удалению всех позициий, включенных в нее. Операция является необратимой. Продолжить удаление?', url);
                                                    });
                                                    function showModal(id, title, text, url) {
                                                        $('#modal-confirm .modal-title').text(title);
                                                        $('#modal-confirm .modal-info').text(text);
                                                        $('#modal-button').attr('rel', url.replace('{ACT_ID}', id));
                                                        var modal = UIkit.modal("#modal-confirm");
                                                        modal.show();
                                                    }
                                                    $('#modal-button').click(function () {
                                                        document.location = $(this).attr('rel');
                                                    });
                                                });
                                            </script>

                                            <div class="uk-modal" id="modal-confirm"
                                                style="display: none; overflow-y: auto;">
                                                <div class="uk-modal-dialog">
                                                    <div class="modal-title uk-text-large uk-margin-bottom">Удаление закупки</div>
                                                    <div class="modal-info">Удаление закупки приведет к удалению всех позициий,
                                                        включенных в нее. Операция является необратимой. Продолжить удаление?</div>
                                                    <div class="uk-text-center uk-margin-top">
                                                        <button class="uk-modal-close uk-button" type="button">
                                                            <i class="uk-icon-close"></i>
                                                            Отмена</button>
                                                        <button class="uk-button" id="modal-button"
                                                            rel="http://new.tobusiness.ru/tender/documentdelete/7.html" type="button">
                                                            <i class="uk-icon-check"></i>
                                                            Продолжить</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- -->

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