<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон вывода постов в категории(рубрике)
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */

get_header(); // Подключаем хедер ?>


	
			
		 <main id="content" class="map">
	
		<div class="container"> 
	
				 <?php echo do_shortcode( '[flexy_breadcrumb]'); ?>
			
			<h1>Наши партнеры</h1>
		
			<div class="partners-map-control clearfix">
		
				<div class="partners-map-control__buttons float-left">
			
					<a href="#" class="partners-map-control__buttons-onmap active">
						<svg width="26" height="29" viewBox="0 0 405 455" version="1.1" xmlns="http://www.w3.org/2000/svg">
							<path opacity="1.00" d=" M 176.10 3.78 C 182.51 3.65 188.54 0.95 194.98 1.07 C 203.77 1.02 212.79 0.30 221.36 2.76 C 226.11 3.97 231.18 3.36 235.82 5.09 C 240.23 6.73 244.93 7.45 249.31 9.21 C 263.10 13.69 275.80 21.02 287.53 29.45 C 294.62 35.32 301.43 41.59 307.57 48.47 C 321.13 62.71 330.45 80.56 336.65 99.11 C 337.68 104.78 340.09 110.15 340.59 115.93 C 341.06 124.05 344.21 131.82 343.61 140.04 C 344.28 147.85 340.94 155.12 340.40 162.82 C 337.68 174.70 334.46 186.53 329.70 197.79 C 324.28 212.83 317.63 227.39 310.60 241.73 C 302.63 257.96 294.51 274.12 285.61 289.86 C 278.30 303.59 269.96 316.73 262.48 330.36 C 260.94 332.60 259.49 334.91 258.09 337.25 C 262.59 338.75 267.39 338.85 271.96 340.10 C 280.11 342.50 288.82 340.86 296.99 343.17 C 304.31 345.38 312.17 344.30 319.44 346.67 C 322.90 347.80 326.55 348.10 330.15 348.55 C 351.46 353.90 373.60 359.11 391.86 372.01 C 398.03 377.25 404.26 384.02 405.00 392.44 L 405.00 400.50 C 402.71 407.78 398.31 414.59 391.96 418.95 C 384.58 424.60 376.21 428.80 367.50 431.98 C 361.18 434.36 354.91 436.95 348.27 438.35 C 342.60 440.48 336.50 440.90 330.73 442.68 C 325.66 444.21 320.26 444.23 315.26 446.02 C 309.30 448.05 302.82 446.76 296.83 448.60 C 292.70 449.91 288.38 450.43 284.06 450.49 C 274.58 450.61 265.14 451.70 255.79 453.18 C 246.24 454.09 236.61 453.56 227.03 453.96 C 203.34 455.18 179.64 453.81 155.94 453.63 C 148.65 453.58 141.55 451.64 134.29 451.28 C 125.79 450.12 117.01 451.28 108.71 448.73 C 102.58 446.73 95.91 448.08 89.80 445.98 C 87.13 445.06 84.36 444.53 81.57 444.16 C 75.58 443.48 69.97 441.11 64.00 440.33 C 46.90 435.85 29.56 430.45 14.90 420.26 C 8.58 416.11 3.76 409.91 0.95 402.94 C -0.15 399.09 0.03 395.01 0.29 391.06 C 0.47 387.47 2.81 384.58 4.26 381.44 C 8.06 376.87 12.02 372.25 17.24 369.25 C 26.35 363.90 36.03 359.47 46.11 356.28 C 55.06 353.52 64.22 351.49 73.19 348.81 C 77.36 348.08 81.64 347.99 85.71 346.70 C 92.93 344.38 100.70 345.32 107.97 343.17 C 116.14 340.83 124.85 342.56 133.00 340.11 C 137.54 338.80 142.35 338.81 146.84 337.30 C 125.32 301.74 105.22 265.29 87.63 227.61 C 79.27 209.13 71.50 190.25 66.48 170.57 C 64.25 164.22 64.30 157.36 62.13 150.99 C 61.40 141.53 60.78 131.69 63.55 122.49 C 64.72 117.70 64.21 112.61 65.95 107.95 C 67.27 104.34 67.81 100.51 69.03 96.87 C 75.13 79.34 84.21 62.61 96.95 49.01 C 103.24 41.61 110.60 35.21 118.06 29.03 C 131.69 19.27 146.75 11.23 163.02 6.92 C 167.38 5.85 171.53 3.86 176.10 3.78 M 185.06 22.57 C 181.17 22.74 177.75 24.90 173.89 25.26 C 168.64 25.86 163.79 28.07 158.90 29.91 C 155.95 31.72 152.26 31.98 149.62 34.32 C 142.75 37.14 136.80 41.64 130.68 45.75 C 124.19 50.12 119.02 56.07 113.47 61.50 C 108.06 66.70 104.49 73.36 100.07 79.34 C 99.36 81.42 98.41 83.43 96.86 85.04 C 93.43 91.37 90.22 97.88 88.44 104.89 C 86.14 109.66 86.10 115.07 84.05 119.93 C 82.77 127.20 83.07 134.66 82.71 142.02 C 83.15 148.54 82.61 155.36 85.20 161.52 C 86.29 165.43 86.66 169.55 88.44 173.26 C 91.62 185.11 96.75 196.32 101.36 207.66 C 105.68 218.62 111.41 228.94 116.13 239.71 C 120.87 247.84 124.38 256.64 129.33 264.65 C 144.82 293.42 161.27 321.68 178.76 349.27 C 184.38 358.90 190.79 368.04 196.43 377.66 C 197.86 379.87 199.04 382.29 200.83 384.25 C 202.27 384.16 203.69 383.92 205.11 383.69 C 211.28 371.70 219.76 361.04 226.10 349.14 C 228.38 346.36 230.26 343.29 231.94 340.13 C 235.45 333.96 239.58 328.18 243.07 322.01 C 247.23 314.74 252.15 307.85 255.31 300.06 C 255.71 299.77 256.51 299.20 256.91 298.91 C 261.53 289.72 266.98 280.97 271.78 271.87 C 273.22 269.23 274.44 266.44 276.18 263.97 C 291.03 236.26 304.72 207.85 315.29 178.22 C 316.58 172.78 318.91 167.67 319.69 162.10 C 322.39 155.39 322.14 148.08 322.33 140.98 C 322.00 133.74 322.58 126.33 320.71 119.26 C 318.68 114.61 319.17 109.28 316.52 104.86 C 314.95 97.00 310.98 89.89 306.90 83.08 C 303.63 76.91 299.53 71.22 295.39 65.62 C 288.00 57.71 280.62 49.52 271.35 43.74 C 266.31 40.25 261.24 36.71 255.53 34.38 C 252.84 32.10 249.22 31.64 246.21 29.94 C 241.29 28.06 236.39 25.90 231.11 25.24 C 227.31 24.67 223.83 22.76 219.96 22.56 C 208.34 21.89 196.68 21.91 185.06 22.57 M 148.37 359.32 C 140.65 360.34 132.86 360.32 125.11 360.75 C 120.22 360.89 115.68 363.02 110.82 363.36 C 106.52 363.66 102.07 363.44 98.00 365.11 C 92.68 367.43 86.62 365.94 81.27 368.16 C 76.91 370.11 71.98 369.67 67.55 371.33 C 64.25 372.80 60.59 373.04 57.22 374.26 C 53.36 376.26 49.01 376.95 45.10 378.86 C 37.46 381.31 30.39 385.33 23.99 390.13 C 20.72 392.47 20.21 397.91 23.47 400.47 C 31.86 407.82 42.50 411.83 52.86 415.51 C 57.41 416.20 61.38 418.95 66.05 419.07 C 68.48 419.09 70.77 419.90 72.71 421.36 C 76.86 422.14 81.14 422.39 85.15 423.84 C 90.87 425.97 97.16 425.05 102.93 427.02 C 109.13 429.08 115.73 428.45 122.14 429.05 C 125.84 429.36 129.23 431.24 132.97 431.36 C 138.99 431.61 145.01 431.96 151.04 432.00 C 158.10 432.00 165.03 433.60 172.06 434.17 C 192.34 434.56 212.63 434.49 232.92 434.20 C 239.33 433.88 245.60 432.20 252.03 432.05 C 261.38 431.39 271.14 432.74 280.09 429.44 C 287.34 428.04 295.00 429.51 302.08 427.01 C 308.08 425.02 314.63 425.96 320.57 423.67 C 324.55 422.07 329.06 422.66 332.96 420.85 C 337.25 418.35 342.56 419.46 346.89 417.01 C 355.40 414.81 363.63 411.56 371.40 407.42 C 375.26 405.45 378.91 402.98 382.02 399.95 C 384.76 397.51 384.30 392.72 381.48 390.52 C 372.43 383.02 361.22 378.99 350.24 375.28 C 346.77 373.39 342.74 373.23 339.12 371.77 C 334.29 369.55 328.71 370.32 323.86 368.16 C 318.50 365.80 312.24 367.68 307.05 364.85 C 300.81 362.95 294.11 364.16 287.89 362.18 C 280.82 360.05 273.35 360.70 266.08 360.16 C 259.36 359.87 252.73 358.49 245.98 358.53 C 240.17 365.55 235.65 373.47 230.98 381.26 C 226.78 387.38 222.98 393.76 218.84 399.91 C 215.33 405.04 212.40 410.64 207.84 414.96 C 204.32 415.38 200.78 415.38 197.27 414.92 C 194.21 411.83 191.61 408.33 189.46 404.56 C 184.10 396.84 179.19 388.84 174.01 381.02 C 169.41 373.30 164.77 365.59 159.20 358.52 C 155.58 358.59 151.95 358.79 148.37 359.32 Z" />
							<path opacity="1.00" d=" M 182.47 83.39 C 188.59 80.68 195.38 80.58 201.95 80.47 C 208.88 80.58 216.07 80.52 222.52 83.40 C 230.32 85.25 236.56 90.45 243.13 94.72 C 250.27 101.53 256.25 109.73 259.80 118.98 C 260.54 123.14 263.60 126.60 263.37 130.96 C 263.61 139.31 263.95 147.74 262.95 156.04 C 260.77 161.59 258.52 167.11 256.11 172.57 C 252.83 177.08 249.70 181.76 245.64 185.64 C 241.95 189.41 237.38 192.12 233.12 195.18 C 226.97 198.16 220.52 200.42 213.95 202.26 C 206.39 202.93 198.74 202.85 191.17 202.30 C 184.57 200.47 178.09 198.19 171.88 195.27 C 167.39 191.77 162.26 189.05 158.40 184.79 C 152.58 178.43 147.41 171.21 144.81 162.91 C 143.96 159.89 141.93 157.23 141.88 154.00 C 141.28 146.03 141.34 138.01 141.82 130.04 C 141.96 125.51 144.64 121.64 145.68 117.32 C 149.58 108.89 154.94 100.98 161.82 94.71 C 168.31 90.30 174.75 85.40 182.47 83.39 M 188.94 103.03 C 180.14 105.98 173.16 112.64 167.81 120.04 C 166.10 123.20 163.81 126.19 163.35 129.86 C 162.83 133.65 160.80 137.09 160.75 140.95 C 160.42 146.43 163.70 151.25 164.00 156.67 C 166.81 161.82 170.32 166.51 174.14 170.94 C 177.63 173.94 181.28 176.84 185.51 178.73 C 189.59 181.01 194.32 181.42 198.79 182.49 C 204.95 184.19 210.91 181.02 216.94 180.18 C 220.01 178.15 223.53 176.89 226.46 174.63 C 232.60 169.73 237.35 163.36 241.07 156.49 C 241.65 152.79 242.46 149.12 243.57 145.54 C 245.55 139.62 241.90 133.92 241.30 128.08 C 238.07 119.40 231.46 112.36 224.14 106.87 C 221.14 105.40 218.32 103.45 215.01 102.75 C 210.96 101.91 207.24 99.60 202.99 99.82 C 198.03 99.39 193.67 102.09 188.94 103.03 Z" />
						</svg>

						На карте
						
					</a>
				
					<a href="#" class="partners-map-control__buttons-list">
						
						<img src="<?php echo get_template_directory_uri(); ?>/img/icon-list.png" alt="">
						
						Список
						
					</a>
			
				</div>
			
				<div class="partners-map-control__filter d-flex float-right">
			
					<div class="partners-map-control__filter-city">
			
						<select>
							<option selected="selected" disabled="disabled">Город</option>
							<option>Москва</option>
							<option>Санкт-Петербург</option>
							<option>Новосибирск</option>
							<option>Екатеринбург</option>
							<option>Нижний Новгород</option>
							<option>Казань</option>
							<option>Самара</option>
							<option>Омск</option>
							<option>Челябинск</option>
							<option>Ростов-на-Дону</option>
							<option>Уфа</option>
							<option>Волгоград</option>
							<option>Пермь</option>
							<option>Красноярск</option>
							<option>Воронеж</option>
						</select>
						
					</div>
					
					<div class="partners-map-control__filter-service">
				
						<select class="service">
							<option selected="selected" disabled="disabled">Сфера услуг</option>
							<option>Детские товары</option>
							<option>Одежда</option>
							<option>Смартфоны</option>
							<option>Фитнес-центры</option>
							<option>Детские товары</option>
							<option>Одежда</option>
							<option>Смартфоны</option>
							<option>Детские товары</option>
							<option>Одежда</option>
							<option>Смартфоны</option>
							<option>Фитнес-центры</option>
							<option>Детские товары</option>
							<option>Одежда</option>
							<option>Смартфоны</option>
							<option>Детские товары</option>
						</select>
						
					</div>
				
					<div class="partners-map-control__filter-search">
					
						<svg width="13" height="13" viewBox="0 0 421 421" version="1.1" xmlns="http://www.w3.org/2000/svg">
							<path d=" M 181.28 0.00 L 186.70 0.00 C 194.20 -0.18 201.59 1.26 209.06 1.65 C 241.96 6.09 273.62 19.57 299.48 40.42 C 324.28 60.24 343.83 86.59 355.48 116.14 C 363.59 136.42 367.96 158.19 368.40 180.01 C 369.50 221.87 355.67 264.00 329.80 296.95 C 328.66 298.18 327.88 300.17 329.60 301.32 C 356.20 328.07 383.00 354.66 409.64 381.38 C 413.87 385.67 419.05 389.81 420.38 396.01 C 421.29 401.79 421.03 408.42 416.96 413.04 C 411.82 419.81 401.88 422.92 394.01 419.29 C 388.73 417.24 385.17 412.63 381.22 408.81 C 358.59 386.10 335.73 363.60 313.30 340.69 C 308.70 336.45 304.33 331.97 299.93 327.53 C 275.42 347.01 246.08 360.53 215.12 365.54 C 199.57 368.34 183.66 368.19 167.94 367.33 C 124.31 363.76 82.34 343.58 52.07 311.98 C 18.35 277.51 -0.74 229.22 0.51 181.00 C 0.86 136.24 18.66 91.91 49.20 59.19 C 70.24 36.18 97.39 19.01 126.90 9.09 C 144.49 3.54 162.84 0.39 181.28 0.00 M 176.34 39.45 C 137.54 41.62 99.91 60.10 74.74 89.75 C 57.41 109.83 45.60 134.76 41.57 161.01 C 39.27 173.21 39.66 185.72 40.24 198.07 C 41.97 213.47 45.70 228.75 52.20 242.86 C 64.91 271.63 87.39 295.92 114.95 311.04 C 131.87 320.45 150.80 326.09 170.00 328.13 C 177.03 328.05 184.03 329.90 191.03 328.60 C 227.36 327.30 262.82 311.16 288.03 285.02 C 316.87 255.81 332.15 213.81 328.83 172.92 C 327.59 166.98 327.76 160.83 326.09 154.97 C 320.21 124.95 304.06 97.13 281.32 76.74 C 253.19 50.89 214.41 37.37 176.34 39.45 Z" />
						</svg>
				
						<input type="text" value="">
						
					</div>
			
				</div>
		
			</div>
		
		</div>
		
		<div id="map">
		<!-- YaMaps — Yandex Maps for WordPress plugin  https://www.yhunter.ru/portfolio/dev/yamaps/ -->
		<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
		<script>
			if (typeof(YaMapsWP) === "undefined") {
				var YaMapsWP = {}, YMlisteners = {};
			}			
		</script>
						<script type="text/javascript">
                        ymaps.ready(init); 
                 		var myMap0;
						YMlisteners.myMap0 = {};
						YaMapsWP.myMap0 = {center: "54.0744,29.4052", zoom: "5", type: "yandex#map", controls: "", places: {}};

                 		var yamapsonclick = function (url) {
							location.href=url;
                 		}

                        function init () {
                            myMap0 = new ymaps.Map("yamap0", {
                                    center: [54.0744,29.4052],
                                    zoom: 5,
                                    type: "yandex#map",
                                    controls: [] ,
                                    
                                },
                                {
                                	suppressMapOpenBlock: true
                                }); 

							
		YaMapsWP.myMap0.places.placemark1 = {icon: "islands#dotIcon", name: "Головной офис", color: "#1e98ff", coord: "55.757369418444405,37.6231741671363", url: "",};
		myMap0placemark1 = new ymaps.Placemark([55.757369418444405,37.6231741671363], {
                                hintContent: "Головной офис",
                                iconContent: "",


                              
                            }, {                        
                            	preset: "islands#dotIcon", 
                            	iconColor: "#1e98ff",
                            });  
		
		YaMapsWP.myMap0.places.placemark2 = {icon: "islands#dotIcon", name: "Головной офис в Минске", color: "#1e98ff", coord: "53.8970,27.5468", url: "",};
		myMap0placemark2 = new ymaps.Placemark([53.8970,27.5468], {
                                hintContent: "Головной офис в Минске",
                                iconContent: "",


                              
                            }, {                        
                            	preset: "islands#dotIcon", 
                            	iconColor: "#1e98ff",
                            });  
		
		YaMapsWP.myMap0.places.placemark3 = {icon: "islands#dotIcon", name: "Головной офис в Киеве", color: "#1e98ff", coord: "50.4529,30.5119", url: "",};
		myMap0placemark3 = new ymaps.Placemark([50.4529,30.5119], {
                                hintContent: "Головной офис в Киеве",
                                iconContent: "",


                              
                            }, {                        
                            	preset: "islands#dotIcon", 
                            	iconColor: "#1e98ff",
                            });  
		
		YaMapsWP.myMap0.places.placemark4 = {icon: "islands#dotIcon", name: "Головной офис в Варшаве", color: "#1e98ff", coord: "52.2301,21.0142", url: "",};
		myMap0placemark4 = new ymaps.Placemark([52.2301,21.0142], {
                                hintContent: "Головной офис в Варшаве",
                                iconContent: "",


                              
                            }, {                        
                            	preset: "islands#dotIcon", 
                            	iconColor: "#1e98ff",
                            });  
		myMap0.geoObjects.add(myMap0placemark1).add(myMap0placemark2).add(myMap0placemark3).add(myMap0placemark4);
                            	if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
                            		myMap0.behaviors.disable('drag');	
								}

                        }
                    </script>
                    
    <div id="yamap0"  style="position: relative; min-height: 33rem; margin-bottom: 0 !important;"></div><style>.yamapauthor {position: relative; height: 0;  margin-bottom: 1rem !important; overflow: visible; width: 100%; text-align: center; top: -32px;} .yamapauthor a {display: inline-block; -webkit-box-align: center; padding: 3.5px 5px; text-decoration: none !important; border-bottom: 0; border-radius: 3px; background-color: #fff; cursor: pointer; white-space: nowrap; box-shadow: 0 1px 2px 1px rgba(0,0,0,.15),0 2px 5px -3px rgba(0,0,0,.15);} .yamapauthor a img {width: 17px; height: 17px; margin: 0; display: block;}</style><div class="yamapauthor" style=""><a href="https://www.yhunter.ru/portfolio/dev/yamaps/" title="YaMaps — Яндекс.Карты для WordPress" target="_blank" style=""><img src="http://advanchm.beget.tech/wp-content/plugins/yamaps/js/img/placeholder.svg" /></a></div>
		</div>
		
		<div class="container">
		
			<section class="partners-list">
		
				<div class="partners-list-item d-md-flex">
			
					<div class="partners-list-item__logo d-flex align-items-center justify-content-center">
					
						<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/partners/logo-tom-taylor.png" class="logo"  width="64" height="30">
					
					</div>
				
					<div class="partners-list-item__text d-flex flex-column  justify-content-center">
				
						<div class="partners-list-item__type">
						
							<a href="#">Одежда</a>
					
						</div>
					
						<div class="partners-list-item__title">
					
							<a href="#">Tom Tailor</a> <span>263</span>
					
						</div>
					
						<p>Программы лояльности потребителей обладают преимуществами</p>
				
					</div>
			
				</div>
			
				<div class="partners-list-item d-md-flex">
			
					<div class="partners-list-item__logo d-flex align-items-center justify-content-center">
					
						<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/partners/logo-reebok.png" class="logo"  width="64" height="30">
					
					</div>
				
					<div class="partners-list-item__text d-flex flex-column  justify-content-center">
				
						<div class="partners-list-item__type">
						
							<a href="#">Reebok</a>
					
						</div>
					
						<div class="partners-list-item__title">
					
							<a href="#">Reebok</a> <span>1056</span>
					
						</div>
					
						<p>Программы лояльности потребителей обладают преимуществами. Бонусные программы лояльности потребителей обладают преимуществами</p>
				
					</div>
			
				</div>
			
				<div class="partners-list-item d-md-flex">
			
					<div class="partners-list-item__logo d-flex align-items-center justify-content-center">
					
						<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/partners/logo-restore.png" class="logo"  width="64" height="30">
					
					</div>
				
					<div class="partners-list-item__text d-flex flex-column  justify-content-center">
				
						<div class="partners-list-item__type">
						
							<a href="#">Смартфоны</a>
					
						</div>
					
						<div class="partners-list-item__title">
					
							<a href="#">re:store</a> <span>103</span>
					
						</div>
					
						<p>Программы лояльности потребителей обладают преимуществами</p>
				
					</div>
			
				</div>
			
				<div class="partners-list-item d-md-flex">
			
					<div class="partners-list-item__logo d-flex align-items-center justify-content-center">
					
						<img alt="" src="<?php echo get_template_directory_uri(); ?>/img/partners/logo-dmir.png" class="logo"  width="64" height="30">
					
					</div>
				
					<div class="partners-list-item__text d-flex flex-column  justify-content-center">
				
						<div class="partners-list-item__type">
						
							<a href="#">Детские товары</a>
					
						</div>
					
						<div class="partners-list-item__title">
					
							<a href="#">Детский мир</a> <span>439</span>
					
						</div>
					
						<p>Программы лояльности потребителей обладают преимуществами. Бонусные программы лояльности потребителей обладают преимуществами</p>
				
					</div>
			
				</div>
		
			</section>
      
	    <br><br>
		</div>
		
	</main>



<?php get_footer(); // Подключаем футер ?>