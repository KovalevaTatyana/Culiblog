<?php get_header(); ?>
                <!--контент-->
            <div class="middle">
                <main class="main wrapper">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>        
                    <?php 
                        $title       = get_field('title_recipes');
                        $description = get_field('description_recipes');
                    ?>      
                    <article class="recipes">
                        <h2 class="recipes-name">
                        <?php echo $title; ?>
                        </h2>
                        <?php 
                            $image = get_field('foto_recipes');
                            if( !empty($image) ): 
	                           $url = $image['url'];
	                           $alt = $image['alt'];
	                           $size = 'medium';
	                           $thumb = $image['sizes'][ $size ];
	                           $width = $image['sizes'][ $size . '-width' ];
	                           $height = $image['sizes'][ $size . '-height' ];
	                       ?>
		                      <img class="recipes-foto" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
	                        <?php endif; ?>
                        <ul class="ingredients">
                            <?php if( have_rows('ingredients_recipes') ): while( have_rows('ingredients_recipes') ): the_row(); 
		                      $title       = get_sub_field('ingredients');
		                      $number      = get_sub_field('number');
		                      $unit        = get_sub_field('unit');
		                    ?>
                                <li><?php echo $title;?> - <?php echo $number;?><?php echo $unit;?></li>
                                <?php endwhile; endif;?>
                        </ul>
                        <section class="cooking">
                               <?php echo $description; ?>
                        </section>
                    </article>
                    <?php endwhile; ?>
                        <?php else: ?>
                        <p class="not-found">Рецепт не найден, Вы держитесь здесь, Вам всего доброго, хорошего настроения и здоровья!</p>
                    <?php endif; ?>
                    <?php the_posts_pagination(array(
                        'prev_next' => false,
                        'type'      => 'list'
                    )); ?>
                </main>
                <!--контент-->
                 <?php get_sidebar(); ?>
            </div>             
<?php get_footer(); ?> 
