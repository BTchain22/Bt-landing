<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон вывода постов в категории(рубрике)
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */

get_header(); // Подключаем хедер ?>







 <main id="content">
 <div class="container">
	
		 <?php echo do_shortcode( '[flexy_breadcrumb]'); ?>
			
		<h1><?php wp_title(''); // Заголовок категории ?></h1>
			
				
		<section class="cards-list row">
				
			<div class="cards-list-item col-md-6 col-lg-4"><div class="cards-list-item__wrapper">
					
				<div class="cards-list-item__photo">
					<div class="cards-list-item__label">
						New!
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/cards/cards-reebok.jpg" alt="" class="lazyload">
				</div>
					
				<div class="cards-list-item__content">
					
					<div class="cards-list-item__type">
						Дисконтная карта
					</div>
					
					<div class="cards-list-item__title">
						<a href="#">Reebok</a>
					</div>
					
					<div class="cards-list-item__digit">
						5000
					</div>
					
				</div>
					
			</div></div>
			
			<div class="cards-list-item col-md-6 col-lg-4"><div class="cards-list-item__wrapper">
				
				<div class="cards-list-item__photo">
					<div class="cards-list-item__label">
						New!
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/cards/cards-tailor.jpg" alt="" class="lazyload">
				</div>
					
				<div class="cards-list-item__content">
					
					<div class="cards-list-item__type">
						Дисконтная карта
					</div>
					
					<div class="cards-list-item__title">
						<a href="#">Tom Tailor</a>
					</div>
					
					<div class="cards-list-item__digit">
						1000
					</div>
					
				</div>
					
			</div></div>
			
			<div class="cards-list-item col-md-6 col-lg-4"><div class="cards-list-item__wrapper">
					
				<div class="cards-list-item__photo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/cards/cards-dmir.jpg" alt="" class="lazyload">
				</div>
					
				<div class="cards-list-item__content">
					
					<div class="cards-list-item__type">
						Дисконтная карта
					</div>
					
					<div class="cards-list-item__title">
						<a href="#">Детский Мир</a>
					</div>
					
					<div class="cards-list-item__digit">
						3000
					</div>
					
				</div>
				
			</div></div>
			
			<div class="cards-list-item col-md-6 col-lg-4"><div class="cards-list-item__wrapper">
					
				<div class="cards-list-item__photo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/cards/cards-dmir.jpg" alt="" class="lazyload">
				</div>
					
				<div class="cards-list-item__content">
					
					<div class="cards-list-item__type">
						Дисконтная карта
					</div>
					
					<div class="cards-list-item__title">
						<a href="#">Детский Мир</a>
					</div>
					
					<div class="cards-list-item__digit">
						3000
					</div>
					
				</div>
				
			</div></div>
			
			<div class="cards-list-item col-md-6 col-lg-4"><div class="cards-list-item__wrapper">
					
				<div class="cards-list-item__photo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/cards/cards-tailor.jpg" alt="" class="lazyload">
				</div>
					
				<div class="cards-list-item__content">
					
					<div class="cards-list-item__type">
						Дисконтная карта
					</div>
					
					<div class="cards-list-item__title">
						<a href="#">Tom Tailor</a>
					</div>
					
					<div class="cards-list-item__digit">
						1000
					</div>
					
				</div>
					
			</div></div>
			
			<div class="cards-list-item col-md-6 col-lg-4"><div class="cards-list-item__wrapper">
					
				<div class="cards-list-item__photo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/cards/cards-reebok.jpg" alt="" class="lazyload">
				</div>
					
				<div class="cards-list-item__content">
					
					<div class="cards-list-item__type">
						Дисконтная карта
					</div>
					
					<div class="cards-list-item__title">
						<a href="#">Reebok</a>
					</div>
					
					<div class="cards-list-item__digit">
						5000
					</div>
					
				</div>
					
			</div></div>
			
			<div class="cards-list-item col-md-6 col-lg-4"><div class="cards-list-item__wrapper">
					
				<div class="cards-list-item__photo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/cards/cards-reebok.jpg" alt="" class="lazyload">
				</div>
					
				<div class="cards-list-item__content">
					
					<div class="cards-list-item__type">
						Дисконтная карта
					</div>
					
					<div class="cards-list-item__title">
						<a href="#">Reebok</a>
					</div>
					
					<div class="cards-list-item__digit">
						5000
					</div>
					
				</div>
					
			</div></div>
			
			<div class="cards-list-item col-md-6 col-lg-4"><div class="cards-list-item__wrapper">
					
				<div class="cards-list-item__photo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/cards/cards-tailor.jpg" alt="" class="lazyload">
				</div>
					
				<div class="cards-list-item__content">
					
					<div class="cards-list-item__type">
						Дисконтная карта
					</div>
					
					<div class="cards-list-item__title">
						<a href="#">Tom Tailor</a>
					</div>
					
					<div class="cards-list-item__digit">
						1000
					</div>
					
				</div>
					
			</div></div>
			
			<div class="cards-list-item col-md-6 col-lg-4"><div class="cards-list-item__wrapper">
					
				<div class="cards-list-item__photo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/cards/cards-dmir.jpg" alt="" class="lazyload">
				</div>
					
				<div class="cards-list-item__content">
					
					<div class="cards-list-item__type">
						Дисконтная карта
					</div>
					
					<div class="cards-list-item__title">
						<a href="#">Детский Мир</a>
					</div>
					
					<div class="cards-list-item__digit">
						3000
					</div>
					
				</div>
				
			</div></div>
				
		</section>

</div>
</main>







<?php get_footer(); // Подключаем футер ?>