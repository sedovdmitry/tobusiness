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

	<!-- UIkit with the basic style 
  <link rel="stylesheet" href="css/uikit.css" />

  <!-- UIkit with Gradient style 
  <link rel="stylesheet" href="css/uikit.gradient.css" />

  <!-- UIkit with Almost flat style 
  <link rel="stylesheet" href="css/uikit.almost-flat.css" />
	
	<!-- Template style 
	<link rel="stylesheet" href="css/normalize.css">
  <link rel='stylesheet prefetch' href='css/grid.css'>
	<link rel='stylesheet prefetch' href='fonts/style.css'>
	<link rel='stylesheet prefetch' href='css/style.css'>
	
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

	<link rel='stylesheet prefetch' href='css/footer.css'>
    -->

 
	

    
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
			
			<form style="margin-left: 100px;" class="uk-form uk-form-horizontal">
				<h2>Регистрация</h2>

                <div class="uk-form-row">
                    <label class="uk-form-label" for="form-h-it">Имя пользователя</label>
                    <div class="uk-form-controls">
						<div class="uk-form-icon">
							<i class="uk-icon-user-plus"></i><input type="text" id="form-h-it" placeholder="(псевдоним)" class="uk-form-width-medium">
						</div>
                    </div>
                </div>
                <div class="uk-form-row">
                    <label class="uk-form-label" for="form-h-ip">Пароль (не менее 5 символов)</label>
                    <div class="uk-form-controls">
						<div class="uk-form-icon">
							<i class="uk-icon-lock"></i><input type="password" id="form-h-ip" placeholder="Пароль" class="uk-form-width-medium">
						</div>
                    </div>
                </div>
				<div class="uk-form-row">
                    <label class="uk-form-label" for="form-h-ip">Подтверждение пароля</label>
                    <div class="uk-form-controls">
						<div class="uk-form-icon">
							<i class="uk-icon-lock"></i><input type="password" id="form-h-ip" placeholder="Пароль ещё раз" class="uk-form-width-medium">
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
							<i class="uk-icon-envelope"></i><input type="email" id="form-h-ip" placeholder="электронная почта"  class="uk-form-width-medium">
						</div>
                    </div>
                </div>
				<div class="uk-form-row">
                    <label class="uk-form-label" for="form-h-ip">Организация</label>
                    <div class="uk-form-controls">
						<div class="uk-form-icon">
							<i class="uk-icon-building"></i><input type="text" id="form-h-ip" placeholder="Организация"  class="uk-form-width-medium">
						</div>
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
							<i class="uk-icon-user"></i><input type="text" id="form-h-ip" placeholder="Фамилия"  class="uk-form-width-medium">
						</div>
                    </div>
                </div>
				<div class="uk-form-row">
					<label class="uk-form-label" for="form-h-ip">Имя</label>
					<div class="uk-form-controls">
						<div class="uk-form-icon">
							<i class="uk-icon-user"></i><input type="text" id="form-h-ip" placeholder="Имя"  class="uk-form-width-medium">
						</div>
					</div>
				</div>
				<div class="uk-form-row">
					<label class="uk-form-label" for="form-h-ip">Конт. телефон</label>
					<div class="uk-form-controls">
						<div class="uk-form-icon">
							<i class="uk-icon-phone"></i><input type="tel" id="form-h-ip" placeholder="Телефон"  class="uk-form-width-medium">
						</div>
					</div>
				</div>
                <div class="uk-form-row">
                    <span class="uk-form-label">С условиями регистрации на сайте</span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <input type="checkbox" id="form-h-c"> <label for="form-h-c">Согласен</label><br>
                    </div>
                </div>
				<br />
				<div>
					<a href="#" class="btn btn-primary btn-large">Зарегистрироваться</a>
				</div>

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

</div></div>

	<?php include('templates/sliderLogos.php'); ?>

	<?php include('templates/footer.php'); ?>
	
  </body>
  
	
	<script defer src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
	<script defer src="app/js/allScripts.min.js" type="text/javascript"></script>
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
	<script defer src="app/js/CountUpSettings.min.js" type="text/javascript"></script>

</html>
