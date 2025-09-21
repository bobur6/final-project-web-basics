<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="ekitap.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

	<style>
		.bar1{
		    height: 91px;
		}
	</style>

</head>
<body>

<!-- ------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------ -->
<!-- -------------------------------------------------------HEADER------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------ -->

<header>
		<div class="container">
			<div class="nav">
				<div class="logo">
					<img src="images/logo.png" alt="logotype">
				</div>
				<div class="search">
					<input type="search" placeholder="найти товар...">
					<button type="submit">Искать</button>
				</div>
				<nav>
					<?php
						include 'data.php';
						for ($i = 0; $i < count($nav); $i++) {
							echo "<a href='" . $nav[$i]['link'] . "'>" . $nav[$i]['text'] . "</a>";
						}	
					?>
				</nav>
			</div>
		</div>
	</header>

	<div class="bar1"></div>

<!-- ------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------ -->
<!-- -------------------------------------------------------One BOOK---------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------ -->

<?php
	include 'books.php';
	for($i=0;$i<count($book);$i++){
	    if($_GET['id']==$book[$i]['id']){
?>
	    
	<div class="oneBook">
		<div class="container">
			<div class="oneBook_img">
				<img src="images/books/<?=$book[$i]['img'];?>">
			</div>
			<div class="oneBook_info">
				<h3><?=$book[$i]['name'];?></h3>
				<h4><?=$book[$i]['author'];?></h4>
				<p><?=$book[$i]['description'];?></p>
				<span><?=$book[$i]['price'];?></span>
			</div>
		</div>
	</div>


<?php
    	}
	}
?>

<!-- ------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------ -->
<!-- -------------------------------------------------------FOOTER----------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------ -->



	<footer>
		<div id="footerbox">

			<div id="ftr_top">

				<div class="ftr_left">

					<div class="ftr_left_1">

						<div class="ftr_topic">Покупателям</div>
						<ul class="topic_list">
							<li>
								<a class="text-main-black" href="https://www.meloman.kz/faq-page/#group10">График работы магазинов</a>
							</li>
							<li>
								<a class="text-main-black" href="https://www.meloman.kz/faq-page/#group7">Доставка</a>
							</li>
							<li>
								<a class="text-main-black" href="https://www.meloman.kz/faq-page/#group8">Оплата</a>
							</li>
							<li>
								<a class="text-main-black" href="https://www.meloman.kz/contacts">Контакты </a>
							</li>
							<li>
								<a class="text-main-black" href="https://www.meloman.kz/shops">Магазины</a>
							</li>
							<li>
								<a class="text-main-black" href="https://www.meloman.kz/faq-page/#group2">Возврат товара</a>
							</li>
							<li>
								<a class="text-main-black" href="https://www.meloman.kz/faq-page">Вопросы и ответы</a>
							</li>
							<li>
								<a class="text-main-black" href="https://www.meloman.kz/public-offer-contract">Договор публичной оферты</a>
							</li>
						</ul>
					</div>

					<div class="ftr_left_2">
						<div>
							<div class="ftr_topic">Сервисы</div>
							<ul class="topic_list">
								<li>
									<a class="text-main-black" href="https://www.meloman.kz/podarochnye-sertifikaty">Подарочные сертификаты</a>
								</li>
								<li>
									<a class="text-main-black" href="https://www.meloman.kz/app">Бонусные карты</a>
								</li>
							</ul>
						</div>
						<div>
							<div class="ftr_topic">Корпоративный блок</div>
							<ul class="topic_list">
								<li>
									<a class="text-main-black" href="https://www.meloman.kz/contacts-for-press">Контакты для прессы</a>
								</li>
								<li>
									<a class="text-main-black" href="https://www.meloman.kz/social-responsibility">Социальная ответственность</a>
								</li>
								<li>
									<a class="text-main-black" href="https://www.meloman.kz/arenda-pomeschenij">Аренда помещений</a>
								</li>
								<li>
									<a class="text-main-black" href="https://b2b.meloman.kz">Оптовым покупателям (b2b)</a>
								</li>
								<li>
									<a class="text-main-black" href="https://supplier.marwin.kz/">Как стать поставщиком?</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="ftr_left_3">
						<div>
							<div class="ftr_topic">О Компании</div>
							<ul class="topic_list">
								<li>
									<a class="text-main-black" href="https://www.meloman.kz/history">История компании в цифрах</a>
								</li>
								<li>
									<a class="text-main-black" href="https://www.meloman.kz/history-facts">История в фактах</a>
								</li>
								<li>
									<a class="text-main-black" href="https://www.meloman.kz/our-units">Наши подразделения</a>
								</li>
								<li>
									<a class="text-main-black" href="https://www.meloman.kz/vacancies">Вакансии</a>
								</li>
							</ul>
						</div>
						<div>
							<div class="ftr_topic">Связаться с нами</div>
							<ul class="icons">
								<li>
									<a href="tel:+77774846622">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-forward-fill" viewBox="0 0 16 16" id="IconChangeColor"> <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm10.761.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z" id="mainIconPathAttribute"></path> </svg>
									</a>
								</li>
								<li>
									<a href="https://t.me/ekitap.kz">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z" id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000"></path></svg>
									</a>
								</li>
								<li>
									<a href="https://wa.me/4957777777">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" id="mainIconPathAttribute" fill="green"></path> </svg>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>


				<div class="ftr_right">

					<div class="ftr_right_1">
						<div class="ftr_inbox">
							<div class="ftr_topic">Наши проекты</div>
							<ul class="topic_list">
								<li>
									<a class="text-main-black" href="http://www.marwin.kz" rel="nofollow"><b>Marwin.kz</b> — интернет-магазин товаров для детей</a>
								</li>
								<li>
									<a class="text-main-black" href="http://www.komfort.kz" rel="nofollow"><b>Комфорт</b> - товары для дома и ремонта</a>
								</li>
								<li>
									<a class="text-main-black" href="https://m-sunrise.kz" rel="nofollow"><b>Sunrise</b> — Отдыхайте с нами</a>
								</li>
								<li>
									<a class="text-main-black" href="http://www.arsenal.kz/" rel="nofollow"><b>Арсенал</b> - торгово-развлекательный комплекс и кинотеатр</a>
								</li>
							</ul>
						</div>
						<div class="ftr_inbox">
							<div class="ftr_topic">Присоединяйтесь к соцсетям e-Kitap</div>
							<div class="icons">
								<div class="img__1"><a href="https://www.tiktok.com/@ekitap.kz"></a></div>
								<div class="img__2"><a href="https://www.youtube.com/channel/@ekitapkz"></a></div>
								<div class="img__3"><a href="http://instagram.com/ekitap.kz"></a></div>
								<div class="img__4"><a href="https://www.facebook.com/ekitapkz"></a></div>
								<div class="img__5"><a href="https://twitter.com/ekitap_kz"></a></div>
								<div class="img__6"><a href="https://vk.com/ekitap_kz"></a></div>
							</div>
						</div>
					</div>

					<div class="ftr_right_2">
						<div>
							<div class="ftr_topic">Заказывайте в приложении «Меломан» и получайте бонусы</div>
							<div class="app_buttons">
								<a href="https://play.google.com/store/apps/details?id=com.ionicframework.kitapkcell">
									<img src="images/playstore.jpg">
								</a>
								<a href="https://apps.apple.com/kz/app/bilim/id1601509880">
									<img src="images/appstore.jpg">
								</a>
								
							</div>
														
						</div>
						<div id="qr">
							<img src="images/qr.png" alt="app qr code">
						</div>
					</div>
				</div>
			</div>

			<div class="ftr_bottom">
				<p>© Все права защищены, eKitap 2001-2023</p>
				<img src="https://simg.marwin.kz/media/khalel/footer/cards2.svg" alt="cards">
			</div>

		</div>
	</footer>
</body>
</html>