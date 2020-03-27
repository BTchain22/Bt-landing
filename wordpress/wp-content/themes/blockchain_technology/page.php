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
			
		
		
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // Начало цикла ?>
<h1><?php the_title(); // Заголовок ?></h1>
<?php the_content(); // Содержимое страницы ?>
<?php endwhile; // Конец цикла ?>  
		
		
      
    </div></main>



<?php get_footer(); // Подключаем футер ?>