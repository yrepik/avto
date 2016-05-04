<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 

<sectiin class="header_avto">
	<div class="container">
		<h2><b>Автозапчасти</b> на любой автомобиль<br> с доставкой по <b>донецку</b></h2>
		<img src="<?php bloginfo('template_directory'); ?>/img/car_head.png" alt="" />
		<form action="" class="header_form" novalidate  method="post">
			<h2><b>Оставьте заявку</b> и получите скидку в 5%</h2>
			<div class="form_line">
				<input type="text" name="name" placeholder="Ваше имя">
				<input type="tel" name="tel" placeholder="Ваш телефон">
				<input type="email" name="email" placeholder="Ваш Email">
				<input type="text" name="detal" placeholder="Требуемая деталь">
			</div>
			<button><h4>Оставить свою заявку</h4></button>
		</form>
	</div>
</sectiin>
<!--<section class="razdelitel">
	<div class="razdelitel_img"></div>

</section>-->
<section class="howto">
	<div class="container">
		<div class="tit">
		<h2><b>Как приобрести</b> запчасти в нашем магазине?</h2>
		</div>
		<div class="howto__item ">
			<div class="howto__item_thumb">
				<img src="<?php bloginfo('template_directory'); ?>/img/bloknot.png" alt="" />
			</div>
			<h4>Заполните форму на нашем сайте либо звоните нам по тел.:  +9815228413</h4>
		</div>
		<div class="howto__item ">
			<div class="howto__item_thumb big" >
				<img src="<?php bloginfo('template_directory'); ?>/img/call_man.png" alt="" />
			</div>
			<h4>Заполните форму на нашем сайте либо звоните нам по тел.:  +9815228413</h4>
		</div>
		<div class="howto__item ">
			<div class="howto__item_thumb">
				<img src="<?php bloginfo('template_directory'); ?>/img/car.png" alt="" />
			</div>
			<h4>Заполните форму на нашем сайте либо звоните нам по тел.:  +9815228413 </h4>
		</div>
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>