<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Электронное Снабжение</title>
    
	<link href='http://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"> -->
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">

  <!-- bundle style -->
  <link rel="stylesheet" href="app/css/bundle.min.css" />

  <link rel='stylesheet prefetch' href='fonts/style.css'>

  </head>

  <body>

<div class="container">
	<div class="page-wrap">
		<?php include('templates/leftSidebarCatalog.php'); ?>
		
		<?php include('templates/firstHeader.php'); ?>
  
  <div class="grid_9">
	
	<?php include('templates/header.php'); ?>
    
	<div class="inner_container">
      <div class="col_2of4">

       <section class="slider">
        <div id="main-slider" class="flexslider">
          <ul class="slides">
            <li>
              <img src="images/shop_product-01-1.jpg" />
            </li>
            <li>
              <img src="images/shop_product-01-2.jpg" />
            </li>
          </ul>
        </div>
      </section>
    </div>
	  
	  <div class="col_2of4">
        <article class="box post">
          <div class="details">
            <h3>Название</h3><hr>
              <p>
                Категория: <a href="http://bahemian.com/demo/balzac/html/shop.html">Men,</a> <a href="http://bahemian.com/demo/balzac/html/shop.html">Bags,</a> <a href="http://bahemian.com/demo/balzac/html/shop.html">Satchel</a><br>
              <hr></p>
              <p>
                Каталожный номер: 231654654654
              <hr></p>
              <p></p>
                <form class="uk-form uk-grid">
                  <div class="uk-width-1-1" data-uk-margin="">
                    <button class="uk-button uk-button-large">-</button>
                    <input class="uk-form-large uk-form-width-mini" type="number" placeholder="1">
                    <button class="uk-button uk-button-large">+</button>
                    <div class="uk-button-group">
                      <button class="uk-button uk-button-primary uk-button-large">в корзину</button>
                      <button data-uk-tooltip title="В Закладки" class="uk-button uk-button-primary uk-button-large"><i class="uk-icon-star"></i></button>
                    </div>
                  </div>
                </form>
                <br /><br />
          </div> 
        </article>
    </div>


  </div><!-- inner_container -->

  <div class="col_1of1">
    <article class="box post">
      <div align="center" class="details">
        <h2>ПОХОЖИЕ ЗАПЧАСТИ</h2>
      </div> 
    </article>
  </div>

  <!-- // Начало первого похожего товара -->
  <div class="col_1of4">
    <section class="box widget weather">
      <article class="box post">
        <div class="image">
          <div class="uk-panel">
            <div class="uk-panel-badge uk-badge">по запросу</div>
            <figure class="uk-overlay uk-overlay-hover bh-overlay-image">
              <a class="uk-position-cover" href="shop-singleproduct.html"></a>
              <img src="images/shop_product-07-1.jpg" width="720" height="540" alt="Product Image">
              <img class="bh-overlay-image-hover" src="images/shop_product-07-2.jpg" width="720" height="540" alt="Product Image Overlay">
              <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-slide-bottom bh-padding-remove">
                <div>
                  <div class="uk-button-group uk-width-1-1">
                    <a href="shop-cart.html" class="uk-button uk-button-largeBalzac uk-width-8-10">добавить в корзину</a>
                    <a href="shop-wishlist.html" data-uk-tooltip title="В Закладки" class="uk-button uk-button-largeBalzac uk-width-2-10"><i class="uk-icon-star"></i></a>
                  </div>
                </div>
              </figcaption>
            </figure>
          </div>
        <div class="details">
          <h3 class="uk-margin-small-bottom uk-link-reset"><a href="shop-singleproduct.html">Солнечные очки</a></h3>
            <p class="uk-margin-remove">12565498-АВ, <a href="shop.html">Очки</a></p>
          <span class="uk-text-large">
            <del>$99.90</del>
            <ins>$89.90</ins>
          </span>
        </div>
        </div>
      </article>
    </section>
  </div><!-- конец первого похожего товара -->

    <!-- // Начало второго похожего товара -->
  <div class="col_1of4">
    <section class="box widget weather">
      <article class="box post">
        <div class="image">
          <div class="uk-panel">
            <div class="uk-panel-badge uk-badge">по запросу</div>
            <figure class="uk-overlay uk-overlay-hover bh-overlay-image">
              <a class="uk-position-cover" href="shop-singleproduct.html"></a>
              <img src="images/shop_product-07-1.jpg" width="720" height="540" alt="Product Image">
              <img class="bh-overlay-image-hover" src="images/shop_product-07-2.jpg" width="720" height="540" alt="Product Image Overlay">
              <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-slide-bottom bh-padding-remove">
                <div>
                  <div class="uk-button-group uk-width-1-1">
                    <a href="shop-cart.html" class="uk-button uk-button-largeBalzac uk-width-8-10">добавить в корзину</a>
                    <a href="shop-wishlist.html" data-uk-tooltip title="В Закладки" class="uk-button uk-button-largeBalzac uk-width-2-10"><i class="uk-icon-star"></i></a>
                  </div>
                </div>
              </figcaption>
            </figure>
          </div>
        <div class="details">
          <h3 class="uk-margin-small-bottom uk-link-reset"><a href="shop-singleproduct.html">Солнечные очки</a></h3>
            <p class="uk-margin-remove">12565498-АВ, <a href="shop.html">Очки</a></p>
          <span class="uk-text-large">
            <del>$99.90</del>
            <ins>$89.90</ins>
          </span>
        </div>
        </div>
      </article>
    </section>
  </div><!-- конец второго похожего товара -->

    <!-- // Начало третьего похожего товара -->
  <div class="col_1of4">
    <section class="box widget weather">
      <article class="box post">
        <div class="image">
          <div class="uk-panel">
            <div class="uk-panel-badge uk-badge">по запросу</div>
            <figure class="uk-overlay uk-overlay-hover bh-overlay-image">
              <a class="uk-position-cover" href="shop-singleproduct.html"></a>
              <img src="images/shop_product-07-1.jpg" width="720" height="540" alt="Product Image">
              <img class="bh-overlay-image-hover" src="images/shop_product-07-2.jpg" width="720" height="540" alt="Product Image Overlay">
              <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-slide-bottom bh-padding-remove">
                <div>
                  <div class="uk-button-group uk-width-1-1">
                    <a href="shop-cart.html" class="uk-button uk-button-largeBalzac uk-width-8-10">добавить в корзину</a>
                    <a href="shop-wishlist.html" data-uk-tooltip title="В Закладки" class="uk-button uk-button-largeBalzac uk-width-2-10"><i class="uk-icon-star"></i></a>
                  </div>
                </div>
              </figcaption>
            </figure>
          </div>
        <div class="details">
          <h3 class="uk-margin-small-bottom uk-link-reset"><a href="shop-singleproduct.html">Солнечные очки</a></h3>
            <p class="uk-margin-remove">12565498-АВ, <a href="shop.html">Очки</a></p>
          <span class="uk-text-large">
            <del>$99.90</del>
            <ins>$89.90</ins>
          </span>
        </div>
        </div>
      </article>
    </section>
  </div><!-- конец третьего похожего товара -->

    <!-- // Начало четвертого похожего товара -->
  <div class="col_1of4">
    <section class="box widget weather">
      <article class="box post">
        <div class="image">
          <div class="uk-panel">
            <div class="uk-panel-badge uk-badge">по запросу</div>
            <figure class="uk-overlay uk-overlay-hover bh-overlay-image">
              <a class="uk-position-cover" href="shop-singleproduct.html"></a>
              <img src="images/shop_product-07-1.jpg" width="720" height="540" alt="Product Image">
              <img class="bh-overlay-image-hover" src="images/shop_product-07-2.jpg" width="720" height="540" alt="Product Image Overlay">
              <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-slide-bottom bh-padding-remove">
                <div>
                  <div class="uk-button-group uk-width-1-1">
                    <a href="shop-cart.html" class="uk-button uk-button-largeBalzac uk-width-8-10">добавить в корзину</a>
                    <a href="shop-wishlist.html" data-uk-tooltip title="В Закладки" class="uk-button uk-button-largeBalzac uk-width-2-10"><i class="uk-icon-star"></i></a>
                  </div>
                </div>
              </figcaption>
            </figure>
          </div>
        <div class="details">
          <h3 class="uk-margin-small-bottom uk-link-reset"><a href="shop-singleproduct.html">Солнечные очки</a></h3>
            <p class="uk-margin-remove">12565498-АВ, <a href="shop.html">Очки</a></p>
          <span class="uk-text-large">
            <del>$99.90</del>
            <ins>$89.90</ins>
          </span>
        </div>
        </div>
      </article>
    </section>
  </div><!-- конец четвертого похожего товара -->



</div><!-- gtid_9 -->

	<?php include('templates/sliderLogos.php'); ?>

	<?php include('templates/footer.php'); ?>
	
  </body>
  
	
	



  <script  src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>
  <script  src="app/js/allScripts.min.js" type="text/javascript"></script>
  <script  src="js/components/tooltip.min.js" type="text/javascript"></script>

	<script>
	// set countUp options
    var options = {
        useEasing : true, // toggle easing
        useGrouping : false, // 1,000,000 vs 1000000
        separator : '', // character to use as a separator
        decimal : '.', // character to use as a decimal
    }
    var useOnComplete = false;
    var useEasing = true;
    var useGrouping = true;
    
    // create instance
    window.onload = function() {
        // fire animation
        // var element = document.querySelector('.jumbo');
        var demo = new countUp('myTargetElement', 0, 1600, 0, 10, options);
        demo.start();
    }
	</script>
	<script  src="app/js/countUpSettings.min.js" type="text/javascript"></script>


</html>
