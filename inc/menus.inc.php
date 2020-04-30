<?php
function pais_e_filhos_add_menus() {
    register_nav_menu('institucional','Institucional' );
}

add_action( 'init', 'pais_e_filhos_add_menus' );

add_filter( 'wp_nav_menu_items', 'your_custom_menu_item', 10, 2 );
function your_custom_menu_item ( $items, $args ) {
    if($args->menu->slug == "menu-institucional"){
        $result = array();
        preg_match_all('/<li .*>(?<content><a .*<\/a>)<\/li>/', $items, $result);
        $result = $result['content'];
        $items = "";
        foreach($result as $res){
            $items .= "<li class=\"list-group-item bg-transparent\">" . $res . "</li>";
        }
    }
    return $items;
}