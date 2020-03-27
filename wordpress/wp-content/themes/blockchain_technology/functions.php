<?php


register_nav_menus( array( // Регистрируем 2 меню
	'top' => 'Верхнее меню',
	'left' => 'Нижнее'
) );

function true_thumbnail_url_only( $html ){
  return preg_replace('#.*src="([^\"]+)".*#', '\1', $html );
}
add_filter('post_thumbnail_html', 'true_thumbnail_url_only', 10, 5);

remove_filter( 'the_excerpt', 'wpautop' );// для анонсов


add_theme_support('post-thumbnails'); // Включаем поддержку миниатюр
set_post_thumbnail_size(300, 300); // Задаем размеры миниатюре
