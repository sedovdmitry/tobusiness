<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Электронное Снабжение</title>
    <!-- основной цвет кнопок: 5B93E5
		 при наведении мышью:  1E4E95 -->
    
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
		<?php include('templates/leftSidebar.php'); ?>
		
		<?php include('templates/firstHeader.php'); ?>
  
  <div class="grid_9">

    <?php include('templates/header.php'); ?>

    <div class="inner_container">
      <div class="col_1of3">
        <section class="box widget weather">
          <article class="box post">
          <div class="image">
            <img src="images/supply.png" />
          </div>
          <div class="details">
            <h2>Программа Электронного Снабжения</h2>
            <p align="left">Это бесплатная площадка для поставщиков. Следите за спросом. Отвечайте на запросы покупателей (в том числе, в автоматическом режиме). Выставляйте им счета и отгружайте продукцию.</p>
          </div>
        </article>
        </section>
		<section class="box widget video">
          <img src="images/tutorial.jpg" alt="" />
        </section>
		<!-- 
		<section class="box widget find">
          <input type="text" name="find" placeholder="Find your city place" />
          <label for="favorite" class="checkbox">
            <input type="checkbox" id="favorite" name="favorite" />
            Add to favorites
          </label>
          <a href="#" class="btn btn-primary btn-large btn-block">Search</a>
        </section> -->
      </div>
	  
      <div class="col_2of3">
	  
	  
	   <section class="slider">
        <div id="main-slider" class="flexslider">
          <ul class="slides">
            <li>
  	    	    <img src="images/start-for-client2.png" />
  	    		</li>
  	    		<li>
  	    	    <img src="images/start-for-procurer4.png" />
  	    		</li>
          </ul>
        </div>
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
  

		


</div></div>

	<?php include('templates/sliderLogos.php'); ?>

	<?php include('templates/footer.php'); ?>

  </body>
  
	
  <script  src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
  <script  src="app/js/allScripts.min.js" type="text/javascript"></script>
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
