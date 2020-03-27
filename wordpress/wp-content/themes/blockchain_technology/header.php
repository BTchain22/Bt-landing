<?php
/**
 * The header for our theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/css/select2.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.scrollbar/0.2.11/jquery.scrollbar.min.css">
      <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>



      <header id="mob-header" class="header scrolled">
         <div class="header-logo float-left">
            <a href="/">
            <img alt="Blockchain Technology" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
            </a>
         </div>
         <ul class="header-auth float-right d-none">
            <li>
               <a href="#" class="header-signup" data-toggle="modal" data-target="#modal-signup">
               Регистрация
               </a>
            </li>
            <li>
               <a href="#" class="header-login" data-toggle="modal" data-target="#modal-login">
               Авторизация
               </a>
            </li>
         </ul>
         <div class="header-authorized float-right">
           
         </div>
         <div class="burger my-burger">
            <span></span>
            <span></span>
            <span></span>
         </div>
      </header>
      <div class="menu-holder" id="block_id">
         <div class="inner-wrap">
            <div class="scroll-holder">
               <div class="holder-box d-flex flex-column align-items-center text-center">
                  <a href="tel:" class="menu-holder__phone">8 800 33 37 178</a>
                  <?php
				wp_nav_menu( array(
					'container'       => 'ul',
					'theme_location'  => 'top',
					'menu_id'         => '',
					'menu_class'	  => '',	
					'depth'           => 1,
				) );
			?>
               </div>
            </div>
         </div>
      </div>
      <header id="header">
         <div class="header-logo header-row">
            <a href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" alt="Blockchain Technology" class="lazyload" >
            <span class="header-logo__sitename">Blockchain Technology</span>
            </a>
         </div>
         <div class="header-phone header-row">
            <a href="tel:88003337178">8 800 333 7178</a>
         </div>
         <nav class="navbar navbar-default navbar-expand header-row">
            <div class="collapse navbar-collapse">
              
			   
			   <?php
				wp_nav_menu( array(
					'container'       => 'ul',
					'theme_location'  => 'top',
					'menu_id'         => 'mainNav',
					'menu_class'	  => 'nav navbar-nav nav-pills menu-nav_list',	
					'depth'           => 1,
				) );
			?> 
			   
            </div>
         </nav>
         <div class="header-row header-social-icons d-block">
            <ul class="social-icons">
               <li class="social-icons-vk">
                  <a href="https://vk.com/public191857613" target="_blank" title="Vk">
                     <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                        <path d="M13.162 18.994c.609 0 .858-.406.851-.915-.031-1.917.714-2.949 2.059-1.604 1.488 1.488 1.796 2.519 3.603 2.519h3.2c.808 0 1.126-.26 1.126-.668 0-.863-1.421-2.386-2.625-3.504-1.686-1.565-1.765-1.602-.313-3.486 1.801-2.339 4.157-5.336 2.073-5.336h-3.981c-.772 0-.828.435-1.103 1.083-.995 2.347-2.886 5.387-3.604 4.922-.751-.485-.407-2.406-.35-5.261.015-.754.011-1.271-1.141-1.539-.629-.145-1.241-.205-1.809-.205-2.273 0-3.841.953-2.95 1.119 1.571.293 1.42 3.692 1.054 5.16-.638 2.556-3.036-2.024-4.035-4.305-.241-.548-.315-.974-1.175-.974h-3.255c-.492 0-.787.16-.787.516 0 .602 2.96 6.72 5.786 9.77 2.756 2.975 5.48 2.708 7.376 2.708z"/>
                     </svg>
                  </a>
               </li>
               <li class="social-icons-instagram">
                  <a class="social-instagram" href="https://www.instagram.com/blockchaintechnology_rus/" target="_blank" title="Instagram">
                     <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                     </svg>
                  </a>
               </li>
               <li class="social-icons-youtube">
                  <a class="social-youtube" href="#" target="_blank" title="Youtube">
                     <svg xmlns="http://www.w3.org/2000/svg" width="8" height="10" viewBox="0 0 7.562 9.625">
                        <defs>
                           <filter id="filter" x="215.438" y="928.156" width="8" height="10">
                              <feFlood result="flood" flood-color="#cfd5de"/>
                              <feComposite result="composite" operator="in" in2="SourceGraphic"/>
                              <feBlend result="blend" in2="SourceGraphic"/>
                           </filter>
                        </defs>
                        <path d="M223,932.966l-7.565,4.82v-9.638Z" transform="translate(-215.438 -928.156)"/>
                     </svg>
                  </a>
               </li>
            </ul>
         </div>
      </header>
      <div class="top-header-row d-flex">
         <?php get_search_form(); ?>
         <div class="currency-quotes d-flex float-left">
          <div class="slogan-box"> 
		  Развитие технологий - залог нашего будущего
		  </div>
         </div>
         <div class="flex-align-right d-flex">
            <div class="header-langs">
               <div class="langs">
                  <ul class="dd-list">
                     <li class="active"><a href="">RU</a></li>
                     <li><a href="">EN</a></li>
                  </ul>
               </div>
            </div>
            <div class="header-search">
               <a href="#" class="icon-magnifier">
                  <svg width="13" height="13" viewBox="0 0 421 421" version="1.1" xmlns="http://www.w3.org/2000/svg">
                     <path d=" M 181.28 0.00 L 186.70 0.00 C 194.20 -0.18 201.59 1.26 209.06 1.65 C 241.96 6.09 273.62 19.57 299.48 40.42 C 324.28 60.24 343.83 86.59 355.48 116.14 C 363.59 136.42 367.96 158.19 368.40 180.01 C 369.50 221.87 355.67 264.00 329.80 296.95 C 328.66 298.18 327.88 300.17 329.60 301.32 C 356.20 328.07 383.00 354.66 409.64 381.38 C 413.87 385.67 419.05 389.81 420.38 396.01 C 421.29 401.79 421.03 408.42 416.96 413.04 C 411.82 419.81 401.88 422.92 394.01 419.29 C 388.73 417.24 385.17 412.63 381.22 408.81 C 358.59 386.10 335.73 363.60 313.30 340.69 C 308.70 336.45 304.33 331.97 299.93 327.53 C 275.42 347.01 246.08 360.53 215.12 365.54 C 199.57 368.34 183.66 368.19 167.94 367.33 C 124.31 363.76 82.34 343.58 52.07 311.98 C 18.35 277.51 -0.74 229.22 0.51 181.00 C 0.86 136.24 18.66 91.91 49.20 59.19 C 70.24 36.18 97.39 19.01 126.90 9.09 C 144.49 3.54 162.84 0.39 181.28 0.00 M 176.34 39.45 C 137.54 41.62 99.91 60.10 74.74 89.75 C 57.41 109.83 45.60 134.76 41.57 161.01 C 39.27 173.21 39.66 185.72 40.24 198.07 C 41.97 213.47 45.70 228.75 52.20 242.86 C 64.91 271.63 87.39 295.92 114.95 311.04 C 131.87 320.45 150.80 326.09 170.00 328.13 C 177.03 328.05 184.03 329.90 191.03 328.60 C 227.36 327.30 262.82 311.16 288.03 285.02 C 316.87 255.81 332.15 213.81 328.83 172.92 C 327.59 166.98 327.76 160.83 326.09 154.97 C 320.21 124.95 304.06 97.13 281.32 76.74 C 253.19 50.89 214.41 37.37 176.34 39.45 Z" />
                  </svg>
               </a>
            </div>
            <ul class="header-auth">
               <li>
                  <a href="#" class="header-signup" data-toggle="modal" data-target="#modal-signup">
                  Регистрация
                  </a>
               </li>
               <li>
                  <a href="#" class="header-login" data-toggle="modal" data-target="#modal-login">
                  Авторизация
                  </a>
               </li>
            </ul>
          
         </div>
      </div>
	  
	  
	  
	  
      <div id="modal-signup" class="modal fade" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
		
                  <h1 class="modal-title">Регистрация</h1>
                  <button type="button" class="close icon-cross" data-dismiss="modal" aria-label="Close">
				  
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 938.4 938.4" width="9" height="9">
                        <path fill="000000" d="M541.8,469.2l397.6,397.6l-72.6,72.6L469.2,541.8L71.6,939.4L-1,866.8l397.6-397.6L-1,71.6L71.6-1l397.6,397.6 L866.8-1l72.6,72.6L541.8,469.2z"/>
                     </svg>
                  </button>
               </div>
               <div class="modal-body">
			   
                  <form>
                     <div class="row">
                        <div class="col-md-6">
                           <input type="text" class="form-control" placeholder="Логин" required="required">
                        </div>
                        <div class="col-md-6">
                           <input type="email" class="form-control" placeholder="E-mail">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <input type="password" class="form-control" placeholder="******" required="required">
                        </div>
                        <div class="col-md-6">
                           <input type="password" class="form-control" placeholder="Повторите пароль" required="required">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <img src="<?php echo get_template_directory_uri(); ?>/img/trash/captcha.png" alt="">
                        </div>
                        <div class="col-md-6">
                           <button type="submit" class="btn btn-gradient">Зарегистрироваться</button>
                        </div>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="regPrivacyCheck" checked="checked">
                        <label class="form-check-label" for="regPrivacyCheck">
                        Нажимая кнопку «Зарегистрироваться», я даю согласие на обработку <a href="#">персональных данных</a>
                        </label>
                     </div>
                  </form>
				  	   <div class="module__dev">В разработке</div>
               </div>
			   
               <div class="modal-footer">
                  <div class="modal-footer-error">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 655 462" width="29" height="26">
                        <path d="M315.8,2.5c17.6-4.7,37.2-1.9,52.6,7.9c9.3,5.8,17,14.1,22.4,23.7C454,143.7,517.2,253.1,580.4,362.6 c3.6,6.4,6.2,13.3,7.5,20.5c0.5,2.8,0.6,5.7,1.5,8.4c0.4,1.2,0.6,2.4,0.6,3.6v0.3c0,1.5-0.3,3.1-0.8,4.5c-0.9,2.6-0.8,5.5-1.4,8.2 c-3.4,16.8-13.5,32.3-27.7,41.9c-11.1,7.6-24.6,11.6-38,11.4c-121,0.1-242,0-363,0c-11.4-0.1-23,0.8-34-2.5 c-23-6.2-41.2-26-46.5-49c-0.9-3.4-0.8-7-1.9-10.3c-0.4-1.2-0.7-2.5-0.7-3.7l0-0.9c0-1.8,0.4-3.5,0.9-5.2c1-3.1,0.9-6.5,1.8-9.7 c2.7-12.5,10.4-22.9,16.4-33.9C155.4,241.7,215.7,137.4,276,33C284.5,18.1,299.2,6.8,315.8,2.5 M329.3,43.4 c-6.9,1-13.2,5.3-16.5,11.4c-63.4,109.6-126.6,219.3-190,328.9c-4.8,8.1-3.8,19.1,2.3,26.3c4.4,5.8,11.7,9,18.9,8.7 c126.4,0,252.7,0,379.1,0c13.7,0.5,25.2-13.3,23-26.6c-0.6-5.7-4.1-10.4-6.8-15.3C478.6,271.8,418,166.7,357.3,61.7 c-2.7-4.3-4.7-9.1-8.5-12.5C343.6,44.3,336.2,42.2,329.3,43.4z"/>
                        <path d="M332.5,138.6c6.3-1.5,13.2,0.7,18.1,4.8c5,4.3,7.5,11,7.4,17.6c0,38,0,76.1,0,114.1c0,4.7-1,9.5-3.6,13.4 c-3.9,6.1-11.2,10-18.4,9.6c-7.4-0.1-14.6-4.5-18-11.1c-2.7-4.5-2.6-9.9-2.6-15c0.1-37.7-0.1-75.4,0.1-113.1 C315.5,149.3,323,140.4,332.5,138.6z"/>
                        <path d="M332.4,322.6c9.1-1.6,18.8,2.2,24.5,9.5c7.4,9.1,7.2,23.4-0.6,32.3c-7.9,9.9-23.4,12.2-33.7,5c-9.2-5.9-13.9-18-10.6-28.4 C314.5,331.5,322.8,324.2,332.4,322.6z"/>
                     </svg>
                     Вы не заполнили одно из обязательных полей
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="modal-login" class="modal fade" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
			     
                  <h1 class="modal-title">Авторизация</h1>
                  <button type="button" class="close icon-cross" data-dismiss="modal" aria-label="Close">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 938.4 938.4" width="9" height="9">
                        <path fill="000000" d="M541.8,469.2l397.6,397.6l-72.6,72.6L469.2,541.8L71.6,939.4L-1,866.8l397.6-397.6L-1,71.6L71.6-1l397.6,397.6 L866.8-1l72.6,72.6L541.8,469.2z"/>
                     </svg>
                  </button>
               </div>
               <div class="modal-body">
                  <form>
                     <div class="row">
                        <div class="col-md-6">
                           <input type="text" class="form-control" placeholder="Логин" required="required">
                        </div>
                        <div class="col-md-6">
                           <input type="password" class="form-control" placeholder="Пароль" required="required">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <img src="<?php echo get_template_directory_uri(); ?>/img/trash/captcha.png" alt="">
                        </div>
                        <div class="col-md-6">
                           <button type="submit" class="btn btn-gradient">Войти</button>
                        </div>
                     </div>
                  </form>
				   <div class="module__dev">В разработке</div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close icon-cross" data-dismiss="modal" aria-label="Close">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 938.4 938.4" width="9" height="9">
                        <path fill="000000" d="M541.8,469.2l397.6,397.6l-72.6,72.6L469.2,541.8L71.6,939.4L-1,866.8l397.6-397.6L-1,71.6L71.6-1l397.6,397.6 L866.8-1l72.6,72.6L541.8,469.2z"/>
                     </svg>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="embed-responsive embed-responsive-16by9">
                     <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>