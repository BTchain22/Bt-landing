<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон главной страницы
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
get_header(); // Подключаем хедер?> 

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // Начало цикла ?>

      <main id="content" class="home">
         <section class="first">
            <div class="row">
			
				<?php

// проверяем есть ли данные в гибком содержании
if( get_field('first_screen') ):

 	// перебираем макеты гибкого содержания
    while ( has_sub_field('first_screen') ) : 
 
?>


	
            <div class="first-item col-lg-6">
               <div class="first-item__title"><?php the_sub_field('title1');?> 
			   
			   </div>
               <p><?php the_sub_field('text1');?></p>
               <div class="first-item__buttons d-flex align-items-center">
                  <a href="#" class="btn btn-gradient" data-toggle="modal" data-target="#modal-signup">Зарегистрироваться</a>
                  <a href="#" class="btn btn-play" data-toggle="modal" data-src="//www.youtube.com/watch?v=0uBOtQOO70Y" data-target="#modal-video"></a>
               </div>
            </div>
            <div class="first-item col-6 text-center d-none d-xl-block">
               <img alt="Blockchain Technology" src="<?php the_sub_field('img1');?>">
            </div>



     <?php  

    endwhile;

else :

    // макетов не найдено

endif;

?>
			
		
			</div>
         </section>
     
         <section class="about">
            <div class="row">
			
				<?php

// проверяем есть ли данные в гибком содержании
if( get_field('second_screen') ):

 	// перебираем макеты гибкого содержания
    while ( has_sub_field('second_screen') ) : 
 
?>
			
			
			
            <div class="about-item col-lg-6">
               <img alt="Blockchain Technology" src="<?php the_sub_field('img2');?>">
            </div>
            <div class="about-item col-lg-6 d-flex align-items-center justify-content-center">
               <div class="about-item__text">
                  <div class="about-item__text-title"><?php the_sub_field('title2');?></div>
                  <?php the_sub_field('text2');?>
               </div>
            </div>
			
			
			
			<?php  

    endwhile;

else :

    // макетов не найдено

endif;

?>
			
			
			
         </section>
         <div id="advantagesCarousel" class="advantages-slider carousel carousel-fade d-flex flex-column align-tems-center justify-content-center" data-ride="carousel">
            <ol class="carousel-indicators justify-content-start">
               <li data-target="#advantagesCarousel" data-slide-to="0" class="active"><span>01</span></li>
               <li data-target="#advantagesCarousel" data-slide-to="1"><span>02</span></li>
               <li data-target="#advantagesCarousel" data-slide-to="2"><span>03</span></li>
            </ol>
            <div class="carousel-inner d-flex flex-column align-tems-center justify-content-center" role="listbox">
			
			
			
				<?php

// проверяем есть ли данные в гибком содержании
if( get_field('third_screen') ):

 	// перебираем макеты гибкого содержания
    while ( has_sub_field('third_screen') ) : 
	$i++; 
?>



			
               <div class="advantages-slider-item carousel-item  <?php if ($i == 1) {echo "active";} ?>"  align-tems-center justify-content-center">
                  <div class="row w-100 align-items-center">
                     <div class="col-lg-6">
                        <div class="advantages-slider-item__title">
						
						<?php the_sub_field('title3');?></div>
                        <?php the_sub_field('text3');?>
                     
                     </div>
                     <div class="col-lg-6 text-center">
					 
					 

	<img src="<?php the_sub_field('img3'); ?>" class="lazyload" />


					 
					 
					
                     </div>
                  </div>
               </div>


	

     




     <?php  

    endwhile;

else :

    // макетов не найдено

endif;

?>


		
	
			
         
            
            </div>
         </div>
         <section class="numbers">
            <div class="container">
               <div class="row">
			   
			   
			   	<?php

// проверяем есть ли данные в гибком содержании
if( get_field('fourth_screen') ):

 	// перебираем макеты гибкого содержания
    while ( has_sub_field('fourth_screen') ) : 
	$c++; 
?>


 <div class="numbers-item col-md-4 col-lg-4">
                     <div class="circle" data-value="0.8" data-thickness="11">
                        <span><?php the_sub_field('label4');?></span>

                        
						<?php if ($c == 1) {?>

						<svg viewBox="0 0 100 100"><path d="M 50,50 m 0,-44.5 a 44.5,44.5 0 1 1 0,89 a 44.5,44.5 0 1 1 0,-89" stroke="#e3f2ff" stroke-width="11" fill-opacity="0"></path><path d="M 50,50 m 0,-44.5 a 44.5,44.5 0 1 1 0,89 a 44.5,44.5 0 1 1 0,-89" stroke="#4e58f0" stroke-width="11" fill-opacity="0" style="stroke-dasharray: 279.641, 279.641; stroke-dashoffset: 55.9282;"></path></svg>
						<?php } else if ($c == 2) {?>
					
					<svg viewBox="0 0 100 100"><path d="M 50,50 m 0,-44.5 a 44.5,44.5 0 1 1 0,89 a 44.5,44.5 0 1 1 0,-89" stroke="#e3f2ff" stroke-width="11" fill-opacity="0"></path><path d="M 50,50 m 0,-44.5 a 44.5,44.5 0 1 1 0,89 a 44.5,44.5 0 1 1 0,-89" stroke="#4e58f0" stroke-width="11" fill-opacity="0" style="stroke-dasharray: 279.641, 279.641; stroke-dashoffset: 125.839;"></path></svg>
					<?php } else if ($c == 3) { ?>
					<svg viewBox="0 0 100 100"><path d="M 50,50 m 0,-44.5 a 44.5,44.5 0 1 1 0,89 a 44.5,44.5 0 1 1 0,-89" stroke="#e3f2ff" stroke-width="11" fill-opacity="0"></path><path d="M 50,50 m 0,-44.5 a 44.5,44.5 0 1 1 0,89 a 44.5,44.5 0 1 1 0,-89" stroke="#4e58f0" stroke-width="11" fill-opacity="0" style="stroke-dasharray: 279.641, 279.641; stroke-dashoffset: 212.527;"></path></svg>
					
					<?php } else {} ; ?>
					
					</div>
                     <div class="numbers-item__label text-center"><?php the_sub_field('text4');?></div>
                  </div>

     <?php  

    endwhile;

else :

    // макетов не найдено

endif;

?>
			
			   
			   
                 
               </div>
            </div>
         </section>
         <section class="benefits">
            <div class="container">
               <div class="row">
			   
			   	<?php

// проверяем есть ли данные в гибком содержании
if( get_field('fifth_screen') ):

 	// перебираем макеты гибкого содержания
    while ( has_sub_field('fifth_screen') ) : 
 
?>
			   
			   
                  <div class="benefits-item col-md-6 col-lg-6">
                     <div class="benefits-item__title"><?php the_sub_field('title5');?> </div>
                     <?php the_sub_field('text5');?>
                  </div>
				  
			 
	  <div class="benefits-item col-md-6 col-lg-6 text-center">
                     <div class="benefits-item__list d-flex">



		   	  
                 <?php 

        		
                      // проверяем есть ли данные в гибком содержании
if( have_rows('adv') ):
     // перебираем данные
    while ( have_rows('adv') ) : the_row();

	?>
		
	
	    
		   <div class="benefits-item__list-icon d-flex flex-column justify-content-center">
                           <div class="benefits-item__list-icon__media">
                              <img alt="" src="<?php the_sub_field('adv_img');?>">
                           </div>
                           <div class="benefits-item__list-icon__label"><?php the_sub_field('adv_title');?></div>
                        </div>
	  

        <?php 

    endwhile;
else :
endif;	?>
					 
					 
                      
						
					
                
				  
				

 </div>
                  </div>



			 <?php  

    endwhile;

else :

    // макетов не найдено

endif;

?>	  
				  
				  
				  
				  
               </div>
            </div>
         </section>
      
		 
		 
         <section class="partners" style="display: none">
            <h2>Партнеры</h2>
            <div id="partnersCarousel" class="partners-slider carousel slide multiple-items" data-ride="carousel">
			
			  <a href="#partnersCarousel" role="button" data-slide="prev">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 69.8 114.6" width="7" height="12">
                     <polygon points="69.8,98.2 31,57.3 69.8,16.4 54.3,0.1 15.5,41 15.5,40.9 0.1,57.2 0,57.3 15.5,73.7 15.5,73.7 54.3,114.6 "/>
                  </svg>
               </a>
               <a href="#partnersCarousel" role="button" data-slide="next">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 69.8 114.6" width="7" height="12">
                     <polygon points="0,98.2 38.8,57.3 0,16.4 15.5,0.1 54.3,41 54.3,40.9 69.7,57.2 69.8,57.3 54.3,73.7 54.3,73.7 15.5,114.6 "/>
                  </svg>
               </a>
			 
		
			
				
              
               <div class="carousel-inner" role="listbox">
			   
			   
			   
			   	 
			   	<?php

// проверяем есть ли данные в гибком содержании
if( get_field('sixth_screen') ):

 	// перебираем макеты гибкого содержания
    while ( has_sub_field('sixth_screen') ) : 
	$b++; 
?>

<div class="partners-slider-item carousel-item <?php if ($b == 1) {echo "active";} ?>" >
                     <div class="col-md-4">
                        <img src="<?php the_sub_field('img6');?>" alt="" class="lazyload">
                     </div>
                  </div>



     <?php  

    endwhile;

else :

    // макетов не найдено

endif;

?>
			   
			   
			   
               </div>
            </div>
         </section>
      </main>



<?php endwhile; // Конец цикла ?>   


<?php get_footer(); // Подключаем футер ?>