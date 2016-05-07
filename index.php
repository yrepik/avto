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
<section class="catalog">
	<div class="container">
		<h2><b>Каталог</b> нашей продукции</h2>
		<h4>Заполните форму <b>“узнать цену”</b> прямо сейчас и наши менеджеры свяжуться с вами и
дадут полную информацию по цене и наличию запчасти</h4>
<div class="catalog__flex">
		<div class="catalog__item">
			<h4>Детали двигателя</h4>
			<div class="catalog__item_pic">
			<img src="<?php bloginfo('template_directory'); ?>/img/engine.png" alt="" />
			</div>
			<div class="catalog__item_text">
				<p>Ремни ГРМ, ролики, датчики и многое другое</p>
			</div>
			<button><h5>Узнать цену</h5></button>
		</div>
		<div class="catalog__item">
			<h4>тормозная система</h4>
			<div class="catalog__item_pic">
			<img src="<?php bloginfo('template_directory'); ?>/img/brake.png" alt="" />
			</div>
			<div class="catalog__item_text">
				<p>тормозные диски, колодки, суппорта</p>
			</div>
			<button><h5>Узнать цену</h5></button>	
		</div>
		<div class="catalog__item">
			<h4>детали подвески</h4>
			<div class="catalog__item_pic">
			<img src="<?php bloginfo('template_directory'); ?>/img/suspension.png" alt="" />
			</div>
			<div class="catalog__item_text">
				<p>амортизаторы, рычаги, сайлентблоки, стойки</p>
			</div>	
			<button><h5>Узнать цену</h5></button>
		</div>
		<div class="catalog__item">
			<h4>детали сцепления</h4>
			<div class="catalog__item_pic">
			<img src="<?php bloginfo('template_directory'); ?>/img/clutch.png" alt="" />
			</div>
			<div class="catalog__item_text">
				<p>диск сцепления, нажимной диск, система управления,  маховик</p>
			</div>	
			<button><h5>Узнать цену</h5></button>
		</div>
		<div class="catalog__item">
			<h4>охлаждение</h4>
			<div class="catalog__item_pic">
			<img src="<?php bloginfo('template_directory'); ?>/img/cooling.png" alt="" />
			</div>
			<div class="catalog__item_text">
				<p>радиаторы, водяные насосы, термостаты</p>
			</div>	
			<button><h5>Узнать цену</h5></button>
		</div>
		<div class="catalog__item">
			<h4>фильтра</h4>
			<div class="catalog__item_pic">
			<img src="<?php bloginfo('template_directory'); ?>/img/filter.png" alt="" />
			</div>
			<div class="catalog__item_text">
				<p>Масляные, воздушные, топливные, гидравлические</p>
			</div>	
			<button><h5>Узнать цену</h5></button>
		</div>
		<div class="catalog__item">
			<h4>масла и жидкости</h4>
			<div class="catalog__item_pic">
			<img src="<?php bloginfo('template_directory'); ?>/img/oil.png" alt="" />
			</div>
			<div class="catalog__item_text">
				<p>моторные, трансмиссионные жидкости ГУРа, и АКПП</p>
			</div>	
			<button><h5>Узнать цену</h5></button>
		</div>
		<div class="catalog__item">
			<h4>аккумуляторы</h4>
			<div class="catalog__item_pic">
			<img src="<?php bloginfo('template_directory'); ?>/img/battrey.png" alt="" />
			</div>
			<div class="catalog__item_text">
				<p>Для легковых и грузовыз авто и мотоциклов</p>
			</div>	
			<button><h5>Узнать цену</h5></button>
		</div>
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
			<div class="comment__item_text">
				<h5><b>Дмитрий король</b><br>г.Донецк</h5>
				<p>Не ожидал такой оперативности. Менеджер буквально через пять минут позвонил, и уточнил заказ.Подвеску доставили домой, даже не пришлось заморачиваться что бы ее доставить. Сработали оперативно, а главное удивили цены. Пообщали сделать на следующую покупку скидку. В общем молодцы. Я доволен. Рекомендую.
				</p>
			</div>
		</div>
		<div class="comment__item">
			<div class="comment__item_thumb">
				<img src="<?php bloginfo('template_directory'); ?>/img/userpic_2.png" alt="" />
			</div>
			<div class="comment__item_text">
				<h5><b>Анна Весникова </b><br>г.Донецк</h5>
				<p>  Машину купила недавно и столкнулась с проблемой замены масла. После того. как я оставила заявку и менеджер перезвонил через 5 минут и порекомендовал приехать в сервис для замены масла. Сделали все быстро и качественно, даже объяснили как долить масло в следующий раз.буду обращаться еще!</p>
			</div>
		</div>
		<div class="comment__item">
			<div class="comment__item_thumb">
				<img src="<?php bloginfo('template_directory'); ?>/img/userpic_3.png" alt="" />
			</div>
			<div class="comment__item_text">
				<h5><b>Кирилл Бойко</b><br>г.Донецк</h5>
				<p>долго искал топливный насос на китайский мопед. Оставил заявку на деталь, перезвонили и сообщили, что в наличии нет, но могут через некоторое время привезти. Все заняло около 3-х дней. На цену доставка никак не повлияла. Очень доволен. Спасибо.</p>
			</div>
		</div>
	</div>
</section>
<section class="footer_form">
	<div class="section">
		<div class="border">
			<h3>магазин <br> новых автозапчастей для любых автомобилей</h3>
			<form action="" class="footer_form_end" novalidate  method="post">
				<h2><b>Заполните форму</b><br> и получите скидку в 5%</h2>
				<div class="form_line">
					<input type="text" name="name" placeholder="Ваше имя">
					<input type="tel" name="tel" placeholder="Ваш телефон">
					<input type="email" name="email" placeholder="Ваш Email">
					<button><h4>Отправить</h4></button>
				</div>
				
			</form>
			<img src="<?php bloginfo('template_directory'); ?>/img/footer_car.png" alt="" />
			<div class="cont__info">
				<h2><span class="icon icon_tel"></span>+7 (918) 544-56-46</h2>
				<a href="tel:+79185445646" class="knopka"><button><h5>Заказать звонок</h5></button></a>
			</div>
			<div class="cont__info">
				<h2><span class="icon icon_skype"></span>autozap</h2>
				<a href="skype:autozaps" class="knopka"><button><h5>пишите нам в skype</h5></button></a>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>