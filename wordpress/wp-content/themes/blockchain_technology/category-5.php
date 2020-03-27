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
			
			
			
			
		<div class="tabs">
		
		<ul class="tabs__caption">
				<li class="active">Планируемые мероприятия</li>
				<li>Прошедшие мероприятия</li>
			</ul>
		
		
			<div class="tabs__content active">
	
	
		
			<section class="events-list row">
			
	 <?php
	 
	 $date_now = date('Y-m-d H:i:s');
$time_now = strtotime($date_now);

// Find date time in 7 days.
$time_next_week = strtotime('+365 day', $time_now);
$date_next_week = date('Y-m-d H:i:s', $time_next_week);


	 
            $args = array( 'posts_per_page' => 10, 'category__in' => 5, 'meta_query'  => array(
        array(
            'key'         => 'start_date',
            'compare'     => 'BETWEEN',
            'value'       => array( $date_now, $date_next_week ),
            'type'        => 'DATETIME'
        )
    ),
    'order'          => 'ASC',
    'orderby'        => 'meta_value',
    'meta_key'       => 'start_date',
    'meta_type'      => 'DATETIME');
            query_posts($args);
            while ( have_posts() ) : the_post();$i++; 
		
        ?>
				
			
				
				
						
			<div class="events-list-item col-md-6 col-lg-4" >
				<a href="<?php the_permalink(); ?>">	
				<div class="events-list-item__photo">
					<img src="<?php the_post_thumbnail();  ?>" alt="<?php the_title(); ?>" class="lazyload">
				</div>
					
				<div class="events-list-item__content">
					
					<div class="events-list-item__date">
							<?php the_field('start_date'); ?>
					</div>
					
					<div class="events-list-item__title">
						<?php the_title(); ?>
					</div>
					
				
					
				</div>
					</a>
			</div>
				
				
				
				
				
				
				
				
		<?php endwhile; wp_reset_query(); ?>
				

</section>
		</div>		
		
		
		<div class="tabs__content">
	
		<section class="events-list row">
				
					 <?php
	 
 $today = date('Ymd');


	 
            $args = array( 'posts_per_page' => 6, 'category__in' => 5, 'meta_query'  => array(
        array(
            'key'         => 'start_date',
            'compare'     => '<',
            'value'       => $today,
            'type'        => 'DATETIME'
        )
    ),
    'order'          => 'ASC',
    'orderby'        => 'meta_value',
    'meta_key'       => 'start_date',
    'meta_type'      => 'DATETIME');
            query_posts($args);
            while ( have_posts() ) : the_post();
		
        ?>
		
						
			<div class="events-list-item col-md-6 col-lg-4" >
				<a href="<?php the_permalink(); ?>">	
				<div class="events-list-item__photo">
					<img src="<?php the_post_thumbnail();  ?>" alt="<?php the_title(); ?>" class="lazyload">
				</div>
					
				<div class="events-list-item__content">
					
					<div class="events-list-item__date">
							<?php the_field('start_date'); ?>
					</div>
					
					<div class="events-list-item__title">
						<?php the_title(); ?>
					</div>
					
				
					
				</div>
					</a>
			</div>
			<?php endwhile; wp_reset_query(); ?>
			
				
		</section> 	
		</div>
		
      </div>
	  
	  
    </div></main>









<?php get_footer(); // Подключаем футер ?>