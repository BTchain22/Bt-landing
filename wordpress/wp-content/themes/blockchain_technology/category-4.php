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
      <div class="news__fillter">
         <div class="news__fillter__day__box">
            <div class="news__fillter__day__box__name">
               Выбрать дату
            </div>
            <div class="news__fillter__day__box__body">
			
			 <div class="slide__calendar owl-carousel owl-theme">
			 
			 <div class="news__fillter__day__box__item ">
			  <div class="news__fillter__day__box__body__month">Март 2020</div>
			
               <table>
                  <tr>
                     <th>Пн</th>
                     <th>Вт</th>
                     <th>Ср</th>
                     <th>Чт</th>
                     <th>Пт</th>
                     <th>Сб</th>
                     <th>Вс</th>
                  </tr>
                  <tr>
                     <td class="off">24</td>
                     <td class="off">25</td>
                     <td class="off">26</td>
                     <td class="off">27</td>
                     <td class="off">28</td>
                     <td class="off">29</td>
                     <td><a href="/2020/03/01?cat=4">1</a></td>
                  </tr>
                  <tr>
                     <td><a href="/2020/03/02?cat=4">2</a></td>
                     <td>3</td>
                     <td>4</td>
                     <td>5</td>
                     <td>6</td>
                     <td>7</td>
                     <td>8</td>
                  </tr>
                  <tr>
                     <td>9</td>
                     <td>10</td>
                     <td>11</td>
                     <td>12</td>
                     <td>13</td>
                     <td>14</td>
                     <td>15</td>
                  </tr>
                  <tr>
                     <td>16</td>
                     <td>17</td>
                     <td>18</td>
                     <td>19</td>
                     <td>20</td>
                     <td>21</td>
                     <td>22</td>
                  </tr>
                  <tr>
                     <td>23</td>
                     <td>24</td>
                     <td>25</td>
                     <td>26</td>
                     <td>27</td>
                     <td>28</td>
                     <td>29</td>
                  </tr>
                  <tr>
                     <td>30</td>
                     <td>31</td>
                     <td class="off">1</td>
                     <td class="off">2</td>
                     <td class="off">3</td>
                     <td class="off">4</td>
                     <td class="off">5</td>
                  </tr>
               </table>
			  </div>
			
			
			 <div class="news__fillter__day__box__item">
			  <div class="news__fillter__day__box__body__month">Февраль 2020</div>
			
               <table>
                  <tr>
                     <th>Пн</th>
                     <th>Вт</th>
                     <th>Ср</th>
                     <th>Чт</th>
                     <th>Пт</th>
                     <th>Сб</th>
                     <th>Вс</th>
                  </tr>
                  <tr>
                     <td class="off">27</td>
                     <td class="off">28</td>
                     <td class="off">29</td>
                     <td class="off">30</td>
                     <td class="off">31</td>
                     <td >1</td>
                     <td>2</td>
                  </tr>
                  <tr>
                     <td>3</td>
                     <td>4</td>
                     <td>5</td>
                     <td>6</td>
                     <td>7</td>
                     <td>8</td>
                     <td>9</td>
                  </tr>
                  <tr>
                     <td>10</td>
                     <td>11</td>
                     <td>12</td>
                     <td>13</td>
                     <td>14</td>
                     <td>15</td>
                     <td>16</td>
                  </tr>
                  <tr>
                     <td>17</td>
                     <td>18</td>
                     <td>19</td>
                     <td>20</td>
                     <td>21</td>
                     <td>22</td>
                     <td>23</td>
                  </tr>
                  <tr>
                     <td>24</td>
                     <td>25</td>
                     <td>26</td>
                     <td>27</td>
                     <td><a href="/2020/02/28?cat=4">28</a></td>
                     <td>29</td>
                     <td class="off">1</td>
                  </tr>
                  <tr>
                     <td class="off">2</td>
                     <td class="off">3</td>
                     <td class="off">4</td>
                     <td class="off">5</td>
                     <td class="off">6</td>
                     <td class="off">7</td>
                     <td class="off">8</td>
                  </tr>
               </table>
			  </div>
			 </div>
            </div>
         </div>
         <div class="news__fillter__month__box">
            <div class="news__fillter__month__box__name"><span>Выберите месяц</span></div>
            <div class="news__fillter__month__box__body">
               <ul>
                  <li><a href="/2020/02?cat=4">Февраль</a> </li>
                  <li><a href="/2020/03?cat=4">Март</a>  </li>
               </ul>
            </div>
         </div>
      </div>
      <section class="news-list row">
         <?php if (have_posts()) : while (have_posts()) : the_post(); // Цикл записей ?>
         <div class="news-list-item col-md-6 col-lg-4">
            <div class="news-list-item__image">
               <img src="<?php the_post_thumbnail();  ?>" alt="<?php the_title(); ?>" class="lazyload">
            </div>
            <div class="news-list-item__content">
               <div class="news-list-item__date">
                  <?php the_time('j.m.Y'); // Дата создания поста?>
               </div>
               <div class="news-list-item__title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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