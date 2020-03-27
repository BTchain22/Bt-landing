<?php
/**
 * Чистый Шаблон для разработки
 * Это шаблон 404 ошибки, отрабатывает, когда написали фигни в адресную строку
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
get_header(); // Подключаем хедер ?> 

 <main id="content">
    <div class="container">
 
	 
		 <?php echo do_shortcode( '[flexy_breadcrumb]'); ?>
			
		<h1 class="title">Раздел пустой</h1>
          
                 





</div>
</main>
<?php get_footer(); // Подключаем футер ?>