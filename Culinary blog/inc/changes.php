<?php
function rename_posts_labels( $labels ){
	// заменять автоматически нельзя: Запись = Статья, а в тексте получим "Просмотреть статья"

	$new = array(
		'name'                  => 'Рецепты',
		'singular_name'         => 'Рецепт',
		'add_new'               => 'Добавить рецепт',
		'add_new_item'          => 'Добавить рецепт',
		'edit_item'             => 'Редактировать рецепт',
		'new_item'              => 'Новый рецепт',
		'view_item'             => 'Просмотреть рецепт',
		'search_items'          => 'Поиск рецептов',
		'not_found'             => 'Рецепты не найдены.',
		'not_found_in_trash'    => 'Рецепты в корзине не найдены.',
		'parent_item_colon'     => '',
		'all_items'             => 'Все рецепты',
		'archives'              => 'Архивы рецептов',
		'insert_into_item'      => 'Вставить в рецепт',
		'uploaded_to_this_item' => 'Загруженные для этого рецепта',
		'featured_image'        => 'Миниатюра рецепта',
		'filter_items_list'     => 'Фильтровать список рецептов',
		'items_list_navigation' => 'Навигация по списку рецептов',
		'items_list'            => 'Список рецептов',
		'menu_name'             => 'Рецепты',
		'name_admin_bar'        => 'Рецепт',
	);

	return (object) array_merge( (array) $labels, $new );
}
add_filter('post_type_labels_post', 'rename_posts_labels');