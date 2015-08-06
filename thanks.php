<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="keywords" content=''>
	<meta name="description" content=''>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="css/KitAnimate.css" type="text/css">
	<link rel="stylesheet" href="css/layout.css" type="text/css">
	<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">

	<meta name="viewport" content="width=1000">

	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="js/jssor.js"></script>
	<script type="text/javascript" src="js/jssor.slider.js"></script>
	<script type="text/javascript" src="js/jquery.stellar.js"></script>
	<script type="text/javascript" src="js/TweenMax.min.js"></script>
	<script type="text/javascript" src="js/swipe.js"></script>
	<script type="text/javascript" src="js/carousel.lite.js"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/KitProgress.js"></script>
	<script type="text/javascript" src="js/KitAnimate.js"></script>
	<script type="text/javascript" src="js/device.js"></script>
	<script type="text/javascript" src="js/KitSend.js"></script>
	<script type="text/javascript" src="js/KitModal.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</head>
<body>
	<ul class="ps-lines">
		<li class="v" style="margin-left:-491px"></li>
		<li class="v" style="margin-left:-461px"></li>
		<li class="v" style="margin-left:490px"></li>
		<li class="v" style="margin-left:460px"></li>
		<li class="v" ></li>
	</ul>
	<div class="b b-1 b-100 anim backRight" data-anim="backRight" data-cont=".b-1 .b-lexus">
		<div class="b-block b-block-1 b-920 clearfix">
			<div class="b-modal b-callback b-callback-1 b-form-cont b-white-form b-from-top">
				<h3>Закажите обратный<br>звонок</h3>
				<h5>Оставьте Ваши данные,<br>и наш менеджер свяжется<br>с вами в течение 7 минут</h5>
				<form action="kitsend.php" method="POST" id="b-form-5" data-block="#b-popup-1">
					<label for="name-1">Введите ваше имя:</label>
					<input type="text" id="name-1" name="name" required placeholder="Иван Иванов"/>
					<label for="name-1">Ваш телефон:</label>
					<input type="text" id="phone-1" name="phone" required placeholder="+7 (   )    -  -  "/>
					<input type="hidden" name="subject" value="Заказ"/>
					<a href="#" class="ajax b-green-butt" onclick="$('#b-form-5').submit(); return false;"><span>Заказать<br>обратный звонок</span></a>
				</form>
				<h4>или позвоните нам<br>по телефону 8 (495) 542-60-01</h4>
			</div>
			<div class="b-logo-cont left clearfox">
				<a href="#"><img src="i/white-logo.png" class="left" alt=""></a>
				<div class="b-logo-text left">Немецкий чип-тюнинг<span></span><br>с гарантией результата в Москве</div>
			</div>
			<div class="b-quest-cont left">
				<h3>Есть вопросы?</h3>
				<p><a href="#" class="modal" data-block=".b-callback-1">Закажите звонок</a> ИЛИ Звоните — поможем!</p>
			</div>
			<div class="b-date-cont right">
				<h2>8 499 399-35-09 <span style="position: relative; top: 6px">Москва и область</span></h2>
				<h2>8 800 123-34-98 <span>Регионы</span></h2>
			</div>
		</div>
		<div class="b-block b-920 b-main-block clearfix">
			<h1>Спасибо за оказанное доверие!</h1>
			<p>Мы свяжемся с Вами в ближайшее время.<br>Мы работаем с 11:00 до 19:00, без выходных</p>
			<p>Если у Вас есть срочный вопрос, звоните нам по телефону<br>8 (499) 390-63-44</p>
			<div class="b-line"></div>
			<div class="b-dir">
				<img src="i/dir.png" alt="" class="left">
				<h3 class="left">С уважением, Павел Тарасов,<br>директор «ТК моторс»</h3>
			</div>
			<div class="b-rospis-cont">
				<img src="i/rospis.png" alt="">
			</div>
			<h4>— Дружище! В июле мы предлагаем рассрочку<br>на чип-тюнинг. Интересно?</h4>
			<div class="b-buttons clearfix">
				<a href="#" class="b-green-butt left"><span>Да! Оставить заявку<br>на рассрочку</span></a>
				<a href="index.php" class="b-white-butt left"><span>Нет спасибо,<br>не нужно</span></a>
			</div>
			<div class="b-lexus"></div>
		</div>
	</div>
	<div class="b b-13">
		<div class="b-block b-block-1">
			<div class="b-modal b-callback b-callback-2 b-form-cont b-white-form b-from-bottom">
				<h3>Задайте вопрос<br>нашему менеджеру</h3>
				<h5>Оставьте Ваши данные,<br>и наш менеджер свяжется<br>с вами в течение 7 минут</h5>
				<form action="kitsend.php" method="POST" id="b-form-6" data-block="#b-popup-1">
					<label for="name-1">Введите ваше имя:</label>
					<input type="text" id="name-2" name="name" required placeholder="Иван Иванов"/>
					<label for="name-1">Ваш телефон:</label>
					<input type="text" id="phone-2" name="phone" required placeholder="+7 (   )    -  -  "/>
					<input type="hidden" name="subject" value="Заказ"/>
					<a href="#" class="ajax b-green-butt" onclick="$('#b-form-6').submit(); return false;"><span>Задать вопрос<br>нашему менеджеру</span></a>
				</form>
				<h4>или позвоните нам<br>по телефону 8 (495) 542-60-01</h4>
			</div>
			<div class="clearfix">
				<h3 class="left">Остался вопрос о чип-тюнинге?</h3>
				<a href="#" class="left modal" data-block=".b-callback-2">Задайте его менеджеру</a>
			</div>
		</div>
		<div class="b-line b-line-1"></div>
		<div class="b-block b-920 clearfix b-block-2">
			<div class="b-modal b-callback b-callback-3 b-form-cont b-white-form b-from-bottom">
				<h3>Закажите обратный<br>звонок</h3>
				<h5>Оставьте Ваши данные,<br>и наш менеджер свяжется<br>с вами в течение 7 минут</h5>
				<form action="kitsend.php" method="POST" id="b-form-8" data-block="#b-popup-1">
					<label for="name-3">Введите ваше имя:</label>
					<input type="text" id="name-3" name="name" required placeholder="Иван Иванов"/>
					<label for="name-3">Ваш телефон:</label>
					<input type="text" id="phone-3" name="phone" required placeholder="+7 (   )    -  -  "/>
					<input type="hidden" name="subject" value="Заказ"/>
					<a href="#" class="ajax b-green-butt" onclick="$('#b-form-8').submit(); return false;"><span>Заказать<br>обратный звонок</span></a>
				</form>
				<h4>или позвоните нам<br>по телефону 8 (495) 542-60-01</h4>
			</div>
			<div class="b-logo-cont left clearfix">
				<a href="#"><img src="i/white-logo.png" class="left" alt=""></a>
				<div class="b-logo-text left">Немецкий чип-тюнинг<span></span><br>с гарантией результата в Москве</div>
			</div>
			<div class="b-quest-cont left">
				<h3>Есть вопросы?</h3>
				<p><a href="#" class="modal" data-block=".b-callback-3">Закажите звонок</a> ИЛИ Звоните — поможем!</p>
			</div>
			<div class="b-date-cont right">
				<h2>8 499 399-35-09 <span style="position: relative; top: 6px">Москва и область</span></h2>
				<h2>8 800 123-34-98 <span>Регионы</span></h2>
			</div>
		</div>
		<div class="b-line b-line-2"></div>
		<div class="b-block b-920 b-block-3 clearfix">
			<div class="left b-politic-cont">
				<a href="#">Политика конфиденциальности</a><br>
				Информация на сайте не является публичной офертой
			</div>
			<div class="right b-designed-cont">
				<h3>Оформлено</h3>
				<h4><a href="#">в  Indie</a></h4>
			</div>
			<div class="right b-prototip-cont">
				Текст, прототип<br>и разработка:<br><a href="#">Владимир Сургай</a>
			</div>
		</div>
	</div>
	<div class="b-layout"></div>
	<div style="display:none;">
		<div id="b-popup-2">
			<div class="for_all b-popup b-bens clearfix" >
				<div class="left">
					<h2 class="b-title">Откуда берется<br>снижение расхода?</h2>
					<h3>Cохраните наличные и защитите<br>окружающую среду</h3>
					<div class="b-infoblock clearfix">
						<img src="i/popup/info-1.png" alt="" class="left">
						<p class="left">Автомобиль быстрее разгоняется —<br>вы раньше набираете нужную скорость —<br>раньше отпускаете газ — раньше<br>возвращаете двигатель на пониженные<br>обороты</p>
					</div>
					<div class="b-infoblock clearfix">
						<img src="i/popup/info-2.png" style="margin-right: 33px; position: relative; top: -10px;" alt="" class="left">
						<p class="left">При спокойной езде (а это 90% времени<br>работы двигателя) блок подает более<br>бедную топливную смесь</p>
					</div>
					<div class="b-infoblock clearfix">
						<img src="i/popup/info-3.png" style="margin-right: 25px;" alt="" class="left">
						<p class="left">В итоге расход топлива снижается<br>до 1,5 литра на 100 км.<br>А это 23 500 рублей в год.*</p>
					</div>
					<h6>*Пример для Audi Q7 3.0 TDI, при условии пробега 30.000 км в год.</h6>
				</div>
				<div class="right">
					<div class="b-form-cont b-white-form">
						<h3>Попробуйте и возьмите на тест-драйв 3 недели — бесплатно!</h3>
						<h5>Никакого вреда автомобилю.<br>Не понравилось - вернем<br>деньги в тот же день<br>без всяких заявлений</h5>
						<form action="kitsend.php" method="POST" id="b-form-7" data-block="#b-popup-1">
							<select name="mark" id="mark" required>
								<option value="Lexus" selected>Lexus</option>
							</select>
							<select name="model" id="model" required>
								<option value="" selected>Выберите модель</option>
								<option value="Выберите модель">LX330</option>
							</select>
							<input type="text" id="phone" name="phone" required placeholder="Введите номер телефона"/>
							<input type="hidden" name="subject" value="Заказ"/>
							<a href="#" class="ajax b-green-butt" onclick="$('#b-form-7').submit(); return false;"><span>Попробовать<br>чип-тюнинг</span></a>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="b-popup-1">
			<div class="b-thanks b-popup">
				<h2 class="b-title">Спасибо!</h2>
				<h4>Ваша заявка успешно отправлена.<br/>Наш менеджер свяжется с Вами<br>в течение часа.</h4>
				<a href='#' class="b-green-butt" onclick="$.fancybox.close(); return false;"><span>Закрыть</span></a>
			</div>
		</div>
		<div id="b-popup-error">
			<div class="b-thanks b-popup">
				<h2 class="b-title">Ошибка отправки!</h2>
				<h4>Приносим свои извинения. Пожалуйста, попробуйте отправить Вашу заявку позже.</h4>
				<a href='#' class="b-green-butt" onclick="$.fancybox.close(); return false;"><span>Закрыть</span></a>
			</div>
		</div>
	</div>
</body>
</html>