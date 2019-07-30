<?php 
function register_menu() {  

/*
*  Регистрация меню
*/
    
    register_nav_menus (array(
        'sidebar_menu' => 'Меню в боковой панели',
    ) );
    }
add_action ('after_setup_theme', 'register_menu');


