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
			
		<section class="management row">
				
				
				
				
				

<?php if (have_posts()) : while (have_posts()) : the_post(); // Цикл записей ?>

				
			<div class="management-item col-md-6 col-lg-4">
					
				<div class="management-item__photo">
					<img src="<?php the_post_thumbnail();  ?>" alt="<?php the_title(); ?>" class="lazyload">
				</div>
					
				<div class="management-item__content">
					
					<div class="management-item__post">
						<?php the_excerpt(); ?>
					</div>
					
					<div class="management-item__name">
						<?php the_title(); ?>
					</div>
					
					<div class="management-item__contacts contacts-list">
						
					
							
						<div class="contacts-list__item">
							
							<div class="contacts-list__item-icon icon-email"></div>
							
							<div class="contacts-list__item-text "><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></div>
								
						</div>
						
					</div>
					
				</div>
					
			</div>


	   
				   

<?php endwhile; // Конец цикла.
else: echo '<h2>Извините, ничего не найдено...</h2>'; endif; // Если записей нет - извиняемся ?>	 




<?php // Пагинация
global $wp_query;
$big = 999999999;
echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'type' => 'list',
	'prev_text'    => __('« Сюда'), 
    'next_text'    => __('Туда »'),
	'total' => $wp_query->max_num_pages
) );
?>
				
				
				
		</section>
      
    </div>
	
	</main>

<?php get_footer(); // Подключаем футер ?>