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
<section class="razdelitel">
	<div class="container"></div>

</section>
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
<section class="car_one">
	<div class="container">
		<h2><b>Не нашли</b> комплектующие для своего авто?</h2>
		<h4>Оставьте заявку и мы вам немедленно перезвони, поможем и подскажем</h4>
		<form action="" class="car_one_form" novalidate  method="post">
			<div class="form_line">
				<input type="text" name="name" placeholder="Ваше имя">
				<input type="tel" name="tel" placeholder="Телефон">
				<button><h4>Отправить</h4></button>
			</div>
		</form>
		<img src="<?php bloginfo('template_directory'); ?>/img/orange_car.png" alt="" />
	</div>
</section>
<section class="car_two">
	<div class="container">
		<h2>Причины выбрать нас</h2>
			<div class="whyweare__item">
				<img src="<?php bloginfo('template_directory'); ?>/img/case.png" alt="" />
				<h5>выгодные цены, гибкая система скидок</h5>
			</div>
			<div class="whyweare__item">
				<img src="<?php bloginfo('template_directory'); ?>/img/gear.png" alt="" />
				<h5>Более 10 000 запчастей всегда в наличии <br><small>*на складе поставщика</small></h5>
			</div>
			<div class="whyweare__item">
				<img src="<?php bloginfo('template_directory'); ?>/img/service.png" alt="" />
				<h5>Наличие собственного автосервиса</h5>
			</div>
			<div class="whyweare__item">
				<img src="<?php bloginfo('template_directory'); ?>/img/delivery.png" alt="" />
				<h5>Доставка по городу</h5>
			</div>
			<div class="whyweare__item">
				<img src="<?php bloginfo('template_directory'); ?>/img/hands.png" alt="" />
				<h5>индивидуальный подход и человеческое отношение</h5>
			</div>
			<div class="whyweare__item">
				<img src="<?php bloginfo('template_directory'); ?>/img/like.png" alt="" />
				<h5>95% клиентов становятся постоянными</h5>
			</div>
	</div>
</section>
<section class="comment">
	<div class="container">
		<h2><b>Отзывы</b> наших клиентов</h2>
		<div class="comment__item">
			<div class="comment__item_thumb">
				<img src="<?php bloginfo('template_directory'); ?>/img/userpic_1.png" alt="" />
			</div>
			<div class="comment__item_text"></div>
		</div>
		<div class="comment__item">
			<div class="comment__item_thumb">
				<img src="<?php bloginfo('template_directory'); ?>/img/userpic_2.png" alt="" />
			</div>
			<div class="comment__item_text"></div>
		</div>
		<div class="comment__item">
			<div class="comment__item_thumb">
				<img src="<?php bloginfo('template_directory'); ?>/img/userpic_3.png" alt="" />
			</div>
			<div class="comment__item_text"></div>
		</div>
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>