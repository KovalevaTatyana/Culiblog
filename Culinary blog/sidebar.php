                <!--боковая панель-->                
                <aside class="sidebar wrapper">
                    <a href="#" class="burger">
                        <span class="toggle"></span>
                    </a>
                    <nav class="navigation-sidebar">
                        <h3>Категории</h3>
                        
                        <?php
                            wp_nav_menu( array (
                            'theme_location'  => 'sidebar_menu',
                            'container'       => 'ul', 
                            'menu_class'      => 'navigation-sidebar-menu',
                            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                            'walker'          => new sidebar_menu,
                            ) );
                       ?>
                          
                    </nav>
                </aside>
                <!--боковая панель-->