<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон вывода постов в категории(рубрике)
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */

get_header(); // Подключаем хедер ?>







 <main id="content"><div class="container">
	
		 <?php echo do_shortcode( '[flexy_breadcrumb]'); ?>
			
		<h1><?php wp_title(''); // Заголовок категории ?></h1>
			
		<section class="companies-list">
				
				
				
				
					

<?php if (have_posts()) : while (have_posts()) : the_post(); // Цикл записей ?>




<div class="companies-list-item d-flex">
			
				<div class="companies-list-item d-flex">
					
				<div class="companies-list-item__logo">
					<img src="<?php the_post_thumbnail();  ?>" alt="" class="lazyload">
				</div>
					
				<div class="companies-list-item__content">
					
					<div class="companies-list-item__title">
						<h2><?php the_title(); ?></h2>
					</div>
					
					<div class="companies-list-item__desc">
						<?php the_field('text'); ?>
					</div>
					
					<div class="companies-list-item__link">
						<?php 
$link = get_field('link');
if( $link ): ?>
    <a class="button" href="<?php echo esc_url( $link ); ?>">Continue Reading</a>
<?php endif; ?>
					</div>
					
					<p>	<?php the_excerpt(); ?></p>
					
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
      
    </div></main>









<?php get_footer(); // Подключаем футер ?>