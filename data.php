<!-- -------------------------------------NAVIGATION----------------------------------------------- -->

<?php

$nav = array();
	$nav[0]['link'] = 'ekitap.php';
	$nav[0]['text'] = 'Home';

	$nav[1]['link'] = '#books';
	$nav[1]['text'] = 'Книги';

	$nav[2]['link'] = '#top_books';
	$nav[2]['text'] = 'Топ книги';

	$nav[3]['link'] = '#loc';
	$nav[3]['text'] = 'Локации';

	$nav[4]['link'] = '#footerbox';
	$nav[4]['text'] = 'Контакты';

	$nav[5]['link'] = 'loginPage.php';
	$nav[5]['text'] = "<strong><i style='font-size:20px' class='fas'>&#xf406;</i> Выйти</strong>";
?>

<!-- -------------------------------------about e-kitap (site_info)----------------------------------------------- -->


<?php

$site_info_list = [
	'✌ с 2019 года',
	'😎 №1 в Казахстане',
	'💰 более 13тыс проданных книг',
	'😁 50тыс пользователей',
	'📚 более 950 книг',
	'🥳 34 розыгрышей'
]

?>

<?php

$cat = array();
	$cat[0]['link'] = '';
	$cat[0]['text'] = 'Все Книги';

	$cat[1]['link'] = '?category=artistic';
	$cat[1]['text'] = 'Художественные';

	$cat[2]['link'] = '?category=baby';
	$cat[2]['text'] = 'Детские';

	$cat[3]['link'] = '?category=comics';
	$cat[3]['text'] = 'Комиксы, манга';

	$cat[4]['link'] = '?category=religious';
	$cat[4]['text'] = 'Религиозные';

	$cat[5]['link'] = '?category=business';
	$cat[5]['text'] = 'Бизнес';

	$cat[6]['link'] = '?category=self-development';
	$cat[6]['text'] = 'Саморазвитие';
?>