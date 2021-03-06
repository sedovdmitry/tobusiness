<!DOCTYPE html>
<html class="ui-mobile">
    <head><base href="http://fiddle.jshell.net/_display/">
        <meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <title>- jsFiddle demo</title>

        <script src="//code.jquery.com/jquery-1.6.4.js" type="text/javascript"></script>
        <style type="text/css"></style>

        <link href="/css/normalize.css" rel="stylesheet" type="text/css">

        <link href="/css/result-light.css" rel="stylesheet" type="text/css">

        <link href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css"
            rel="stylesheet" type="text/css">

        <script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"
            type="text/javascript"></script>

        <style type="text/css">
            .priceRangeInfo {
                position: relative;
                height: 30px;
                margin-top: 60px;
            }
            
            .priceRangeInfo label {
                position: absolute;
                top: -30px;
                left: 10px;
            }
            /* moves label field */
            .priceRangeInfo #buying_slider_min {
                top: -40px;
                position: absolute;
                left: 100px;
            }
            /* moves first input field */
            .priceRangeInfo #buying_slider_max {
                top: -40px;
                position: absolute;
                left: 170px;
            }
            /* move second input field */
            .priceRangeInfo div.ui-slider {
                position: absolute;
            }
            /* move both sliders - adressing 1st slider with CSS is hard */
            .priceRangeInfo div:last-child {
                position: absolute;
                left: 0;
            }
        </style>

        <script type="text/javascript">
            //<![CDATA[
//<![CDATA[
$(window).load(function () {
    $('#buying_slider_min').change(function () {
        var min = parseInt($(this).val());
        var max = parseInt($('#buying_slider_max').val());
        if (min > max) {
            $(this).val(max);
            $(this).slider('refresh');
        }
    });
    $('#buying_slider_max').change(function () {
        var min = parseInt($('#buying_slider_min').val());
        var max = parseInt($(this).val());

        if (min > max) {
            $(this).val(min);
            $(this).slider('refresh');
        }
    });
}); //]]>            //]]>
        </script>

    </head>
    <body class="ui-mobile-viewport">
        <div class="ui-page ui-body-c ui-page-active" data-role="page"
            data-url="/_display/" style="min-height: 320px;" tabindex="0">
            <div class="priceRangeInfo">
                <label class="ui-slider ui-input-text" for="buying_slider_min"
                    id="buying_slider_min-label">Price</label>
                <input
                    class="minBuyingSlider ui-slider-input ui-input-text ui-body-c ui-corner-all ui-shadow-inset"
                    data-type="range" id="buying_slider_min" max="100" min="0"
                    name="buying_slider_min" type="number" value="0">
                <div class="ui-slider  ui-btn-down-c ui-btn-corner-all" role="application"></div>

            </div>

        </div>
        <div class="ui-loader ui-body-a ui-corner-all" style="top: 302.5px;">
            <span class="ui-icon ui-icon-loading spin"></span>
            <h1>loading</h1>
        </div>
    </body>
</html>