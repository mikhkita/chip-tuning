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
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/device.js"></script>
	<script type="text/javascript" src="js/KitSend.js"></script>
	<script type="text/javascript" src="js/KitReviews.js"></script>
	<script type="text/javascript" src="js/KitModal.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</head>
<?

$car = isset($_GET["empty"])?"ваш автомобиль":"Lexus";
$car_rod = isset($_GET["empty"])?"вашего автомобиля":"Lexus";
$mark = isset($_GET["empty"])?"Выберите марку":"Lexus";
$mark_val = isset($_GET["empty"])?"":"Lexus";
$factory = isset($_GET["empty"])?"заводу":"Lexus";

?>
<body <? if(isset($_GET["empty"])): ?>class="b-empty"<?endif;?>>
	<ul class="ps-lines">
		<li class="v" style="margin-left:-491px"></li>
		<li class="v" style="margin-left:-461px"></li>
		<li class="v" style="margin-left:490px"></li>
		<li class="v" style="margin-left:460px"></li>
		<li class="v" ></li>
	</ul>
	<div class="b b-1 anim backRight" data-anim="backRight" data-cont=".b-1 .b-lexus">
		<div class="b-block b-920 clearfix">
			<div class="b-modal b-callback b-callback-1 b-form-cont b-white-form b-from-top">
				<h3>Закажите обратный<br>звонок</h3>
				<h5>Оставьте Ваши данные,<br>и наш менеджер свяжется<br>с вами в течение 7 минут</h5>
				<form action="thanks.php" method="POST" id="b-form-5" data-block="#b-popup-1">
					<label for="name-1">Введите ваше имя:</label>
					<input type="text" id="name-1" name="name" required placeholder="Иван Иванов"/>
					<label for="name-1">Ваш телефон:</label>
					<input type="text" id="phone-1" name="phone" required placeholder="+7 (___) ___-__-__"/>
					<input type="hidden" name="subject" value="Заказ"/>
					<a href="#" class="ajax b-green-butt" onclick="$('#b-form-5').submit(); return false;"><span>Заказать<br>обратный звонок</span></a>
				</form>
				<h4>или позвоните нам<br>по телефону 8 (495) 542-60-01</h4>
			</div>
			<div class="b-logo-cont left clearfox">
				<a href="#"><img src="i/logo.png" class="left" alt=""></a>
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
			<div class="left b-main-desc">
				<h1>Сделайте <span><?=$car?></span> мощнее до 32% за 20 минут</h1>
				<h2><span>С сохранением дилерской гарантии</span><span>Никакого вреда автомобилю</span><span>Без увеличения расхода топлива</span></h2>
				<p>Современный немецкий чип-тюнинг блок + усилитель педали газа раскроет заложенные производителем мощности автомобиля.<br>
				<i>Вернём деньги, если не почувствуете разницу</i></p>
			</div>
			<div class="right b-form-block">
				<div class="b-form-cont">
					<h3>Получите 4 варианта чип-тюнинга <span><?=$car_rod?></span> прямо сейчас!</h3>
					<form action="thanks.php" method="POST" id="b-form-1" data-block="#b-popup-1">
						<select name="mark" id="mark" required>
							<option value="<?=$mark_val?>" selected><?=$mark?></option>
						</select>
						<select name="model" id="model" required>
							<option value="" selected>Выберите модель</option>
							<option value="Выберите модель">LX330</option>
						</select>
						<input type="text" id="phone" name="phone" required placeholder="Введите номер телефона"/>
						<input type="hidden" name="subject" value="Заказ"/>
						<a href="#" class="ajax b-green-butt" onclick="$('#b-form-1').submit(); return false;"><span>Получить 4 варианта<br>чип-тюнинга</span></a>
					</form>
					<h4><b>Акция!</b> При заявке до 29 сентября монтаж — в подарок!</h4>
				</div>
			</div>
			<div class="b-lexus anim carLeft" data-anim="carLeft"></div>
			<div class="b-bottom-block">
				<h3 class="left">Сегодня рассчитали уже<br>варианта чип-тюнинга</h3>
				<h4 class="right">132</h4>
			</div>
		</div>
	</div>
	<div class="b b-2">
		<div class="b-block b-920">
			<h2 class="b-title">Представьте, что <span><?=$car?></span><br>срывается с места, как только<br>вы нажали на педаль газа</h2>
			<h3><i>Двойное ускорение:</i><br>усилитель педали газа + блок увеличения мощности</h3>
			<ul class="b-plus clearfix">
				<li style="width: 240px;">
					<div class="b-img"></div>
					<h4>Лёгкий и мощный старт</h4>
					<p>Усилитель педали газа снимает «врожденную» задержку при нажатии</p>
				</li>
				<li>
					<div class="b-img"></div>
					<h4>До +32% к лошадиным силами крутящему моменту</h4>
					<p>Чип-тюнинг блок подает более богатую топливную смесь в моменты интенсивной работы двигателя</p>
				</li>
			</ul>
			<div class="b-lexus"></div>
		</div>
	</div>
	<div class="b b-3 anim scaleBack" data-anim="scaleBack" data-cont=".b-3 .b-lexus">
		<div class="b-block">
			<div class="b-modal b-form-cont b-choose-car b-white-form b-from-bottom">
				<form action="" method="POST" id="b-form-10" data-block="#b-popup-1">
					<select name="mark" id="mark" required>
						<option value="" selected>Выберите марку</option>
						<option value="<?=$mark_val?>"><?=$mark?></option>
					</select>
					<select name="model" id="model" required>
						<option value="" selected>Выберите модель</option>
						<option value="Выберите модель">LX330</option>
					</select>
					<select name="engine" id="engine" required>
						<option value="" selected>Выберите двигатель</option>
					</select>
					<input type="hidden" name="subject" value="Заказ"/>
					<a href="#" class="ajax b-green-butt" onclick="$('#b-form-10').submit(); return false;"><span>Выбрать<br>и посмотреть</span></a>
				</form>
			</div>
			<h2 class="b-title">Ощутимый прирост мощности</h2>
			<h5><span>Чип-тюнинг</span> - это новые впечатления от вождения</h5>
			<ul class="b-what clearfix">
				<li>
					<div></div>
					<p>Резкое ускорение<br>на старте. На низких оборотах двигатель реагирует на педаль в 2 раза быстрее</p>
				</li>
				<li>
					<div></div>
					<p>АКПП принимает решение на 19% быстрее при переключении передачи</p>
				</li>
				<li>
					<div></div>
					<p>Эффект непрерывного разгона без провалов при переключении передач</p>
				</li>
				<li>
					<div></div>
					<p>Снижение<br>расхода топлива<br>до 1,5 л./100 км<br><a href='#' class="fancy" data-block="#b-popup-2">Откуда снижение расхода?</a></p>
				</li>
			</ul>
			<div class="b-lexus anim scaleIn" data-anim="scaleIn">
				<p><a href="#" class="modal" data-block=".b-choose-car">Выберите марку и модель</a><br>автомобиля, для подробных<br>характеристик</p>
			</div>
		</div>
	</div>
	<div class="b b-4 b-top-shadow">
		<div class="b-block b-920">
			<h2 class="b-title">Блок управления вашей машины мешает ей использовать настоящую мощь двигателя!</h2>
			<h3>Изначально завод <span><?=$car_rod?></span> закладывал в двигатель больше мощности</h3>
			<div class="b-block-block anim dialog" data-anim="dialog" data-func="dialog" data-offset="200">
				<div class="b-dialog b-top-triangle">
					<div class="clearfix">
						<div class="b-img"></div>
						<div class="left">
							<h4>Блок управления<br>автомобиля:</h4>
							<p>Я не дам тебе работать на полную мощность!</p>
						</div>
					</div>
				</div>
				<div class="b-dialog b-bottom-triangle">
					<div class="clearfix">
						<div class="b-img b-eng-ic"></div>
						<div class="left">
							<h4>Двигатель автомобиля:</h4>
							<p>Но на заводе мне дали куда больше лошадиных сил!</p>
						</div>
					</div>
				</div>
				<div class="b-dialog b-top-triangle">
					<div class="clearfix">
						<div class="b-img"></div>
						<div class="left">
							<h4>Блок управления<br>автомобиля:</h4>
							<p>Зато <?=$factory?> не придётся разрабатывать новый тип двигателя для эконом-класса…</p>
						</div>
					</div>
				</div>
			</div>
			<div class="b-warning">
				<div class="clearfix">
					<div class="b-img"></div>
					<h4 class="left">Внимание</h4>
				</div>
				<p>Двигатель вашей машины<br>был «задушен» прямо на заводе <span><?=$car_rod?></span> в маркетинговых целях, под налоговое обложение и экологические нормы</p>
			</div>
			<div class="b-engine">
				<p>Блок управления автомобилем</p>
			</div>
		</div>
	</div>
	<div class="b b-5 b-top-shadow">
		<div class="b-backs">
			<div class="b-layer-1 transition" data-stellar-ratio="0.85"></div>
			<div class="b-layer-2 transition" data-stellar-ratio="0.93"></div>
			<div class="b-layer-3"></div>
			<div class="b-lexus"></div>
		</div>
		<div class="b-block b-920 b-absolute">
			<h2 class="b-title">Посмотите, на что способен<br>ваш автомобиль на самом деле</h2>
			<div class="b-car-info clearfix">
				<div class="b-logo left" style="background-image: url('i/lexus-logo.png');"></div>
				<h3 class="left">Lexus IS 250 2,5l <span>(2011)</span></h3>
			</div>
			<h3 class="b-desc">Просто выберите автомобиль. И получите результаты онлайн</h3>
			<div class="clearfix b-main-engines">
				<div class="left b-engines-block">
					<div class="b-engine">
						<h3>231<span>л. с.</span></h3>
						<h4><b>Настоящая заводская мощь.</b><br>Доступная после чип-тюнинга</h4>
					</div>
					<div class="b-small-engine">
						<div class="left b-img">
							<h3><span>205</span><br>л. с.</h3>
						</div>
						<div class="left b-text">
							<p><b>Сейчас доступно,</b><br>после «задушки»<br>на заводе</p>
						</div>
					</div>
				</div>
				<div class="right b-form-block">
					<div class="b-form-cont">
						<h3>Получите сейчас<br>все заводские характеристики Lexus по СМС!</h3>
						<ul>
							<li>Настоящий расход топлива</li>
							<li>Заводской крутящий момент</li>
						</ul>
						<form action="thanks.php" method="POST" id="b-form-2" data-block="#b-popup-1">
							<input type="text" id="phone" name="phone" required placeholder="Введите номер телефона"/>
							<input type="hidden" name="subject" value="Заказ"/>
							<a href="#" class="ajax b-green-butt" onclick="$('#b-form-2').submit(); return false;"><span>Получить все<br>характеристики</span></a>
						</form>
						<h4>Мы тоже ненавидим спам.<br>Гарантируем его отсутствие</h4>
					</div>
				</div>
			</div>
			<div class="b-empty-engines">
				<div class="b-empty-engine-cont">
					<div class="b-empty-engine">
						<form action="" method="POST" id="b-form-11" data-block="#b-popup-1">
							<select name="mark" id="mark" required>
								<option value="" selected>Выберите марку</option>
								<option value="<?=$mark_val?>"><?=$mark?></option>
							</select>
							<select name="model" id="model" required>
								<option value="" selected>Выберите модель</option>
								<option value="Выберите модель">LX330</option>
							</select>
							<select name="engine" id="engine" required>
								<option value="" selected>Выберите двигатель</option>
							</select>
							<input type="hidden" name="subject" value="Заказ"/>
							<a href="#" class="ajax b-green-butt" onclick="$('#b-form-11').submit(); return false;"><span>Узнайте<br>реальную мощность</span></a>
						</form>
					</div>
				</div>
				<div class="b-small-engine">
					<div class="left b-img">
						<h3><span>?</span><br>л. с.</h3>
					</div>
					<div class="left b-text">
						<p><b>Сейчас доступно,</b><br>после «задушки»<br>на заводе</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-6">
		<div class="b-block">
			<h2 class="b-title">Боитесь, что чип-тюнинг увеличит износ двигателя и других узлов автомобиля?</h2>
			<h3>Зря. Это абсолютно безопасно для машины!</h3>
			<div class="b-line"></div>
			<p class="b-text">
				Чип-тюнинг не создает внештатной нагрузки. Двигатель просто начинает работать мощнее. В пределах, заложенным заводом изначально<br><br>
				Немецкий чип-блок управляет целым комплексом параметров. Среди них впрыск топлива, угол опережения зажигания, давление наддува турбины и другие<br><br>
				Работа чипа на примере Toyota Land Cruiser
			</p>
			<div class="b-grid">
				<div class="b-before anim beforeDraw" data-anim="beforeDraw" data-cont=".b-grid"></div>
				<div class="b-after anim afterDraw" data-anim="afterDraw" data-delay="1500" data-cont=".b-grid"></div>
				<h3 class="b-info">
					Toyota Land Cruiser (J20)<br>4461 cм2, 173кВ, 613 Нм
				</h3>
			</div>
			<div class="b-line b-line-2"></div>
			<ul class="b-list clearfix">
				<li>
					<div></div>
					<h4>Возможности возврата<br>к заводским настройкам<br>в любой момент</h4>
					<p>Достаточно просто отсоединить блок</p>
				</li>
				<li>
					<div></div>
					<h4>Сохраняется дилерская гарантия</h4>
					<p>Чип-тюнинг безопасен<br>и вносит легко обратимые изменения</p>
				</li>
				<li>
					<div></div>
					<h4>Экономия на страховке<br>и налогах</h4>
					<p>Мощность увеличилась,<br>а платежи остались прежними</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="b b-7 b-top-shadow">
		<div class="b-block b-920">
			<h2 class="b-title">Попробуйте и возьмите<br>на тест-драйв 3 недели — бесплатно</h2>
			<div class="clearfix">
				<h3 class="left"><i>Никакого вреда автомобилю.</i><br>Не понравилось — вернем деньги в тот же день без всяких заявлений</h3>
				<div class="right b-form-block">
					<div class="b-form-cont b-white-form">
						<? if(!isset($_GET["empty"])): ?>
						<div class="b-logo" style="background-image: url('i/lexus-logo.png');"></div>
						<? endif; ?>
						<form action="thanks.php" method="POST" id="b-form-3" data-block="#b-popup-1">
							<select name="mark" id="mark" required>
								<option value="<?=$mark_val?>" selected><?=$mark?></option>
							</select>
							<select name="model" id="model" required>
								<option value="" selected>Выберите модель</option>
								<option value="Выберите модель">LX330</option>
							</select>
							<input type="text" id="phone" name="phone" required placeholder="Введите номер телефона"/>
							<input type="hidden" name="subject" value="Заказ"/>
							<a href="#" class="ajax b-green-butt" onclick="$('#b-form-3').submit(); return false;"><span>Попробовать<br>чип-тюнинг бесплатно</span></a>
						</form>
						<h4>Наш мастер выедет к вам<br>и <b>проведёт монтаж на месте<br>за 20 минут</b></h4>
					</div>
				</div>
			</div>
			<div class="b-lexus-back"></div>
			<div class="b-lexus-front"></div>
		</div>
	</div>
	<div class="b b-8">
		<div class="b-block">
			<h2 class="b-title">ТК моторс даёт официальную<br>гарантию возврата средств<br>и безопасности вашего автомобиля</h2>
			<h3 class="b-desc">и еще 4 причины, почему чип-тюнинг стоит делать в ТК моторс</h3>
		</div>
		<div class="b-block b-920">
			<div class="top-shadow"></div>
			<div class="clearfix b-logo-cont">
				<div class="left b-car-logo" style="background-image: url('i/lexus-logo.png');"></div>
				<div class="b-logo left">
					<img src="i/logo.png" alt="">
				</div>
			</div>
			<h3>Выдержки из договора <a href="#">Посмотреть весь договор</a></h3>
			<div class="b-item clearfix">
				<div class="b-num">1</div>
				<h4>Гарантия 100% возврата средств в течение 3-х недель</h4>
				<p>Без заявлений, анкет и прочей бюрократии.<br>Не почувствовали результат или брали просто потестировать — мы легко вернем деньги назад</p>
			</div>
			<div class="b-item clearfix">
				<div class="b-num">2</div>
				<h4>Гарантия безопасности для всех агрегатов и устройств автомобиля</h4>
				<p>Устанавливается только сертифицированное дополнительное оборудование</p>
			</div>
			<div class="b-line-1"></div>
			<ul class="b-items clearfix">
				<li>
					<img src="i/b-8/3.png" alt="">
					<div class="b-item clearfix">
						<div class="b-num">3</div>
						<h4>Уже ставили на <span><?=$car?></span></h4>
						<p>Установили уже 27 чипов<br>на <span><?=$car?></span>, 0 возвратов</p>
					</div>
				</li>
				<li>
					<img src="i/b-8/4.png" alt="">
					<div class="b-item clearfix">
						<div class="b-num">4</div>
						<h4>Монтаж — бесплатно</h4>
						<p>Приезжайте к нам в сервис,<br>и мастер сделает монтаж<br>бесплатно</p>
					</div>
				</li>
				<li>
					<img src="i/b-8/5.png" alt="">
					<div class="b-item clearfix">
						<div class="b-num">5</div>
						<h4>Установка про вас за 20 минут</h4>
						<p>Мастер подробно объяснит<br>и прокомментирует процесс<br>установки</p>
					</div>
				</li>
				<li>
					<img src="i/b-8/6.png" alt="">
					<div class="b-item clearfix">
						<div class="b-num">6</div>
						<h4>Адаптировано под Россию</h4>
						<p>Топливо в России часто плохого<br>качества, поэтому программа<br>немного мягче немецкой<br>и адаптирована под наши условия</p>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix" style="text-align: center">
			<div class="b-line-2"></div>
		</div>
	</div>
	<div class="b b-9">
		<div class="b-block">
			<div class="b-modal b-give-review b-from-bottom">
				<h2>Оставьте отзыв о чип-тюнинге!</h2>
				<form action="" method="POST" id="b-form-9" data-block="#b-popup-1">
					<div class="clearfix b-select-cont">
						<select name="mark" id="mark" required>
							<option value="<?=$mark_val?>" selected><?=$mark?></option>
						</select>
						<select name="model" id="model" required>
							<option value="" selected>Выберите модель</option>
							<option value="Выберите модель">LX330</option>
						</select>
						<select name="engine" id="engine" style="width: 190px;" required>
							<option value="" selected>Тип двигателя</option>
						</select>
						<select name="year" id="year" style="width: 160px;" required>
							<option value="" selected>Год выпуска</option>
						</select>
					</div>
					<div class="clearfix">
						<div class="left b-inputs">
							<div class="clearfix">
								<div class="left b-input-cont">
									<label for="name-4">Как вас зовут*:</label>
									<input type="text" id="name-4" name="name" required placeholder="Иван Иванов"/>
								</div>
								<div class="left b-input-cont">
									<label for="phone-4">Введите ваш телефон:</label>
									<input type="text" id="phone-4" name="phone-1" placeholder="+7 (___) ___-__-__"/>
								</div>
							</div>
							<label for="text" class="b-textarea-label">Как чип-тюнинг отразился на вашем авто?*</label>
							<textarea name="text" id="text" required></textarea>
							<a href="#" class="b-green-butt ajax" onclick="$('#b-form-9').submit(); return false;"><span>Оставить отзыв</span></a>
						</div>
						<div class="left b-files">
							<h4>Приложите фото (до 5 шт):</h4>
							<a href="#" onclick="$('#photos').click(); return false;">+ Добавить фото</a>
							<input type="file" id="photos" style="display: none;" name="photos">
							<h4>Аудио или видео (до 200 Мб)</h4>
							<a href="#" onclick="$('#audio').click(); return false;">+ Добавить аудио или видео</a>
							<input type="file" id="audio" style="display: none;" name="audio">
						</div>
					</div>
				</form>
			</div>
			<h2 class="b-title">Всё ещё сомневаетесь? Прочитайте отзывы и узнайте на какой результат вы можете рассчитывать</h2>
			<div class="b-reviews" id="b-reviews">
				<div class="b-review">
					<h3><b>Заказ № 01087</b> — Volkswagen Tiguan 1.4,<br>увеличение мощности на 23%</h3>
					<table>
						<tr>
							<td>
								<img src="i/b-9/1-top.jpg" alt="">
							</td>
							<td>
								<div class="clearfix b-head">
									<div class="right"><b>Стало</b></div>
									<div class="right">Было</div>
								</div>
								<ul class="b-data">
									<li class="clearfix">
										<div class="left-1 left">Мощность, л. с.</div>
										<div class="left-2 left">145</div>
										<div class="left-3 left up"></div>
										<div class="left-4 left"><b>177</b></div>
										<div class="left-5 left">(+23%)</div>
									</li>
									<li class="clearfix">
										<div class="left-1 left">Крутящий момент, Нм  </div>
										<div class="left-2 left">123</div>
										<div class="left-3 left up"></div>
										<div class="left-4 left"><b>144</b></div>
										<div class="left-5 left">(+19%)</div>
									</li>
									<li class="clearfix">
										<div class="left-1 left">Расход топлива, л/100 км</div>
										<div class="left-2 left">14</div>
										<div class="left-3 left down"></div>
										<div class="left-4 left"><b>11</b></div>
										<div class="left-5 left">(-18%)</div>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>
								<div class="clearfix b-player">
									<a href="#" class="left"><img src="i/play.png" alt=""></a>
									<h4 class="left">Алексей, владелец Tiguan<br><b>Послушайте аудио-отзыв</b></h4>
								</div>
								<p><b>— Я не ожидал такого резальутата</b><br>
								Я перебрала кучу сайтов и форумов, поспрашивала у знакомых - попыталась проанализировать соотношение предлагаемых сроков и цены, прислушалась к отзывам людей, которые уже сделали ремонты. Сразу отбросила те фирмы, где люди… <a href="#">Читать далее</a></p>
							</td>
							<td>
								<img src="i/b-9/1-bottom.jpg" alt="">
							</td>
						</tr>
					</table>
					<div class="b-buttons">
						<a href="#" class="b-review-button modal" data-block=".b-give-review"></a>
						<a href="#" class="b-green-button"><span>Попробовать<br>чип-тюнинг</span></a>
					</div>
				</div>
				<div class="b-review">
					<h3><b>Заказ № 01087</b> — Volkswagen Tiguan 1.4,<br>увеличение мощности на 23%</h3>
					<table>
						<tr>
							<td>
								<img src="i/b-9/1-top.jpg" alt="">
							</td>
							<td>
								<div class="clearfix b-head">
									<div class="right"><b>Стало</b></div>
									<div class="right">Было</div>
								</div>
								<ul class="b-data">
									<li class="clearfix">
										<div class="left-1 left">Мощность, л. с.</div>
										<div class="left-2 left">145</div>
										<div class="left-3 left up"></div>
										<div class="left-4 left"><b>177</b></div>
										<div class="left-5 left">(+23%)</div>
									</li>
									<li class="clearfix">
										<div class="left-1 left">Крутящий момент, Нм  </div>
										<div class="left-2 left">123</div>
										<div class="left-3 left up"></div>
										<div class="left-4 left"><b>144</b></div>
										<div class="left-5 left">(+19%)</div>
									</li>
									<li class="clearfix">
										<div class="left-1 left">Расход топлива, л/100 км</div>
										<div class="left-2 left">14</div>
										<div class="left-3 left down"></div>
										<div class="left-4 left"><b>11</b></div>
										<div class="left-5 left">(-18%)</div>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>
								<div class="clearfix b-player">
									<a href="#" class="left"><img src="i/play.png" alt=""></a>
									<h4 class="left">Алексей, владелец Tiguan<br><b>Послушайте аудио-отзыв</b></h4>
								</div>
								<p><b>— Я не ожидал такого резальутата</b><br>
								Я перебрала кучу сайтов и форумов, поспрашивала у знакомых - попыталась проанализировать соотношение предлагаемых сроков и цены, прислушалась к отзывам людей, которые уже сделали ремонты. Сразу отбросила те фирмы, где люди… <a href="#">Читать далее</a></p>
							</td>
							<td>
								<img src="i/b-9/1-bottom.jpg" alt="">
							</td>
						</tr>
					</table>
					<div class="b-buttons">
						<a href="#" class="b-review-button modal" data-block=".b-give-review"></a>
						<a href="#" class="b-green-button"><span>Попробовать<br>чип-тюнинг</span></a>
					</div>
				</div>
			</div>
			<div class="b-nav">
				<a href="#" class="b-left-arrow"></a>
				<a href="#" class="b-right-arrow"></a>
			</div>
		</div>
	</div>
	<div class="b b-10">
		<div class="b-block b-920">
			<h2 class="b-title">С момента первого поколения чип-блоков, разработанного в 1995 году в Германии многое изменилось</h2>
			<h3 class="b-desc">За 20 лет они были сильно модернизированы и обрели огромную популярность: 8 300 продаж в месяц в 37 странах мира!</h3>
			<div class="clearfix">
				<div class="left left-block">
					<div class="clearfix b-head">
						<div class="b-img"></div>
						<div class="left">
							<h3>8<span>млн</span></h3>
							<h4>операций<br>в секунду</h4>
						</div>
					</div>
					<p>Совершенная немецкая электроника обрабатывает 8 млн операций в секунду<br><b>Сохраняется дилерская гарантия</b><br>Чип-блоки сертифицированы<br>как дополнительно оборудование<br>для <span><?=$car_rod?></span></p>
					<div class="b-serts clearfix">
						<div class="left">
							<img src="i/sert.jpg" alt="">
							<p>Немецкий сертификат качества TUV</p>
						</div>
						<div class="left">
							<img src="i/sert.jpg" alt="">
							<p>ГОСТ 5812-11</p>
						</div>
					</div>
				</div>
				<div class="right right-block">
					<div class="clearfix b-head">
						<div class="b-img"></div>
						<div class="left">
							<h3>1</h3>
							<h4>индивидуальная<br>программа<br>на каждый тип<br>двигателя</h4>
						</div>
					</div>
					<p>
						Более 5000 программ разработаны<br>
						и протестированы индивидуально<br>
						под каждую модель автомобиля<br>
						<b>Монтаж сводится к одному щелчку</b><br>
						Легкая установка - оригинальные штекеры <span><?=$car_rod?></span>
					</p>
					<div class="b-belt"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-11">
		<div class="b-block b-920">
			<div class="b-arrow"></div>
			<div class="clearfix">
				<div class="left" style="max-width: 540px;">
					<h2 class="b-title">Получите бесплатную<br>компьютерную<br>диагностику</h2>
					<ul>
						<li>За 15 минут точно определим слабые<br>места двигателя</li>
						<li>Выявим ошибки в ЭБУ</li>
						<li>Дадим конкретные рекомендации<br>по исправлению</li>
						<li>Бесплатно при заявке с сайта до 25 сентября</li>
					</ul>
				</div>
				<div class="right b-form-block">
					<div class="b-form-cont b-white-form">
						<? if(!isset($_GET["empty"])): ?>
						<div class="b-logo" style="background-image: url('i/lexus-logo.png');"></div>
						<? endif; ?>
						<h3>Оставьте заявку<br>на компьютерную<br>диагностику прямо<br>сейчас</h3>
						<form action="thanks.php" method="POST" id="b-form-4" data-block="#b-popup-1">
							<input type="text" id="phone" name="phone" required placeholder="Введите номер телефона"/>
							<input type="hidden" name="subject" value="Заказ"/>
							<a href="#" class="ajax b-green-butt" onclick="$('#b-form-4').submit(); return false;"><span>Оставить заявку<br>на диагностику</span></a>
						</form>
						<h4>Наш мастер выедет к вам<br>и <b>проведёт монтаж на месте<br>за 20 минут</b></h4>
					</div>
				</div>
			</div>
			<div class="b-lexus-back"></div>
			<div class="b-lexus-front"></div>
		</div>
		<div class="b-road"></div>
	</div>
	<div class="b b-12">
		<div class="b-map" id="map_canvas"></div>
		<div class="b-block b-absolute b-920">
			<h2 class="b-title">Возможен как выездной монтаж,<br>так и монтаж в нашем центре<br>на Петровско-Разумовской</h2>
			<div class="clearfix">
				<img src="i/logo.png" alt="" class="left">
				<div class="left">
					<b>Приезжайте, будем рады вас видеть</b><br>
					г. Москва, Гостиничный проезд, д. 6, к. 2.<br>
					Работаем с 11:00 до 19:00 без выходных
				</div>
			</div>
		</div>
	</div>
	<div class="b b-13">
		<div class="b-block b-block-1">
			<div class="b-modal b-callback b-callback-2 b-form-cont b-white-form b-from-bottom">
				<h3>Задайте вопрос<br>нашему менеджеру</h3>
				<h5>Оставьте Ваши данные,<br>и наш менеджер свяжется<br>с вами в течение 7 минут</h5>
				<form action="thanks.php" method="POST" id="b-form-6" data-block="#b-popup-1">
					<label for="name-1">Введите ваше имя:</label>
					<input type="text" id="name-2" name="name" required placeholder="Иван Иванов"/>
					<label for="name-1">Ваш телефон:</label>
					<input type="text" id="phone-2" name="phone" required placeholder="+7 (___) ___-__-__"/>
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
				<form action="thanks.php" method="POST" id="b-form-8" data-block="#b-popup-1">
					<label for="name-3">Введите ваше имя:</label>
					<input type="text" id="name-3" name="name" required placeholder="Иван Иванов"/>
					<label for="name-3">Ваш телефон:</label>
					<input type="text" id="phone-3" name="phone" required placeholder="+7 (___) ___-__-__"/>
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
				Упаковщик:<br><a href="https://vk.com/surgay.marketing" target="_blank">Владимир Сургай</a><br>Верстка: <a href="http://line-up.ru" target="_blank">LineUP</a>
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
						<form action="thanks.php" method="POST" id="b-form-7" data-block="#b-popup-1">
							<select name="mark" id="mark" required>
								<option value="<?=$mark_val?>" selected><?=$mark?></option>
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