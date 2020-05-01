<?php
function pais_e_filhos_add_menus() {
    register_nav_menu('superior_desktop','Superior Desktop' );
    register_nav_menu('institucional','Institucional' );
}

add_action( 'init', 'pais_e_filhos_add_menus' );

add_filter( 'wp_nav_menu_items', 'institucional_custom_menu_item', 10, 2 );
add_filter( 'wp_nav_menu_items', 'superior_desktop_custom_menu_item', 10, 3 );

function institucional_custom_menu_item ( $items, $args ) {
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

function superior_desktop_custom_menu_item ( $items, $args ) {
    if($args->menu->slug == "menu-superior-desktop"){
        $result = array();
        preg_match_all('/<li .*>(?<content><a .*<\/a>)<\/li>/', $items, $result);
        $result = $result['content'];
        $items = "";
        foreach($result as $res){
            echo "<!-- "; var_dump($res); echo " -->";
            $res = str_replace('<a ', '<a class="nav-link"', $res);
            $items .= "<li class=\"nav-item\">" . $res . "</li>";
        }
    }
    return $items;
}