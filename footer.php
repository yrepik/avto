<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php $args = array( // опции для вывода нижнего меню, чтобы они работали, меню должно быть создано в админке
						'theme_location' => 'bottom', // идентификатор меню, определен в register_nav_menus() в function.php
						'container'=> false, // обертка списка, false - это ничего
						'menu_class' => 'nav nav-pills bottom-menu', // класс для ul
				  		'menu_id' => 'bottom-nav', // id для ul
				  		'fallback_cb' => false
				  	);
					wp_nav_menu($args); // выводим нижние меню
					?>
				</div>
			</div>
		</div>
	</footer>
	<div class="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">x</span>
    <form action="" class="modal_form" novalidate  method="post">
			<div class="modal_form_line">
                <input class="form_line__name" type="text" name="name" placeholder="Ваше имя">
                <input class="form_line__phone" type="tel" name="tel" placeholder="Ваш телефон">
                <input class="form_line__email" type="email" name="email" placeholder="Ваш Email">
                <TEXTAREA NAME="address" WRAP="virtual">Ваш адрес...</TEXTAREA>
			</div>
            <button class="js_headerAuto"><h4>Оставить свою заявку</h4></button>
		</form>
  </div>

</div>
<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
</body>
</html>