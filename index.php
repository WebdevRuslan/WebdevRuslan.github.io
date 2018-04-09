<!DOCTYPE html>
<html lang="ru">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Сайт Веб-разработчика Руслана Сафина">
		<meta name="author" content="Руслан Сафин">
		<link rel="icon" href="img/favicon.png">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=cyrillic" rel="stylesheet">
		<title>Сафин Руслан - Веб-разработчик</title>
		<link rel="stylesheet" href="css/bootstrap-grid.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/animate.css">
</head>
<body>
<header>
 	<div class="container">
 		<div class="row">
 			<div class="col-lg-7">
 				<img class="header-img wow fadeInLeftBig" src="img/I-mac.png" alt="Монитор">
 			</div>
 			<div class="col-lg-5">
 				<p class="header-pretitle wow fadeInRightBig" data-wow-delay="0.1s">Веб-разработчик</p>
 				<h1 class="header-title wow fadeInRightBig" data-wow-delay="0.2s">Сафин Руслан</h1>
 				<p class="header-subtitle wow fadeInRightBig" data-wow-delay="0.3s">Верстка на HTML/CSS <br>
					Разработка сайтов под ключ</p>
				<div class="header-button-block wow fadeInRightBig" data-wow-delay="0.4s">
					<a href="https://vk.me/king_for_you" target="_blanc" class="header-button">Связаться</a>
					<small>*Это бесплатно</small>
 				</div>	
 			</div>
 		</div>
 	</div>
</header>

<section class="portfolio">
	<div class="container">
		<div class="portfolio-block wow  fadeIn">
			<h2 class="portfolio-title">Портфолио</h2>
			<p class="portfolio-subtitle">Мои работы</p>
			<div class="row">
				<div class="col-md-6">
					<div class="work-1">
						<img class="img" src="img/Gazprom.png" alt="Газпром">
						<h3>внутренний университет «Газпром нефти»</h3>
						<p class="portfolio-text">У «Газпром нефти» есть внутренний Корпоративный университет для сотрудников. Это настоящий университет, где сотрудники проходят обучение у внутренних тренеров компании или у специально приглашенных лекторов и экспертов....</p>
						<a href="Sublime Text 3.rar">Смотреть работу</a>
					</div>
					<!-- /.col-6 -->
				</div>
				<div class="col-md-6">
					<div class="work-2">
						<img class="img" src="img/Mir.png" alt="Платежная система Мир">
						<h3>Сайт платежной системы «Мир»</h3>
						<p class="portfolio-text">Обновленная версия сайта знакомит посетителей с компаниями, уже принимающими карты к оплате, и приглашает всех остальных присоединиться к проекту...</p>
						<a href="#">Смотреть работу</a>
					</div>
					<!-- /.col-6 -->
				</div>
			</div>
			<!-- /.row -->
		</div>
	</div>
	<!-- /.container -->	
</section>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h4 class="footer-author">Сафин Руслан</h4>
				<p class="footer-text">Разработка сайтов под ключ</p>
			</div>
			<!-- /.col-4 -->
			<div class="col-md-4">
				<div class="social">
					<p class="social-text">Подпишитесь:</p>
					<a class=" wow bounceInDown" data-wow-delay="0.1s" href="#"><img src="img/social/fb.png" alt="Facebook"></a>

					<a class=" wow bounceInDown" data-wow-delay="0.2s" href="#"><img src="img/social/tg.png" alt="Telegramm"></a>

					<a class="wow bounceInDown" data-wow-delay="0.3s" href="https://vk.com/king_for_you"  target = "_blanc"><img src="img/social/vk.png" alt="VK"></a>

					<a class=" wow bounceInDown" data-wow-delay="0.4s" href="#"><img src="img/social/yt.png" alt="YouTube"></a>
				</div>
			</div>
			<!-- /.col-4 -->
			<div class="col-md-4">
				<div class="sta">
					<p class="text-sta">Напишите мне:</p>
					<a class="footer-button" href="https://vk.me/king_for_you" target="_blanc">Написать</a>
				</div>
			</div>
			<!-- /.col-4 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</footer>

</body>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<script src="js/wow.min.js"></script>
<script>
	new WOW().init();
</script>
</html>