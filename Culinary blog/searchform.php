<form method="get" id="searchform" action="<?php echo home_url( '/' ) ?>"> 
    <input type="search" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Введите название рецепта">
    <input type="submit" id="searchsubmit" value="Поиск">                              
</form>   