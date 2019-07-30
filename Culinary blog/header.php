<!DOCTYPE HTML>
<html>
	<head>
	    <meta charset="utf-8">
	    <meta name="description" content="Кулинарный блог Ковалевой Татьяны">
	    <meta name="Keywords" content="">
        <?php wp_head(); ?>
	</head>
    <body>
        	
        <div id="wrapper">
            <!--шапка-->
            <header class="header wrapper">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/girl_cook.png" alt="">
                <div class="wrap-header">
                    <h1 class="wrap-title">
                        <a href="/">КулиБлог</a>
                    </h1>                            
                    <?php get_search_form(); ?>  
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/boy_cook.png" alt="">
            </header>
            <!--шапка-->