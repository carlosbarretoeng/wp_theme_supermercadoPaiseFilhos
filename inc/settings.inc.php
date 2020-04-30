<?php
function pais_e_filhos_theme_get_image_banner()
{
    if (isset($_GET['id'])) {
        $image = wp_get_attachment_image(filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT), 'medium', false, array('id' => 'myprefix-preview-image'));
        $data = array('image' => $image,);
        wp_send_json_success($data);
    } else {
        wp_send_json_error();
    }
}

function pais_e_filhos_admin()
{
    wp_enqueue_media();
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

    wp_enqueue_style('pais_e_filhos_theme_bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('pais_e_filhos_theme_custom_css', get_stylesheet_uri());

    // wp_enqueue_script('pais_e_filhos_theme_jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), null, true);
    // wp_enqueue_script('pais_e_filhos_theme_popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), null, true);
    wp_enqueue_script('pais_e_filhos_theme_bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), null, true);
    wp_enqueue_script('pais_e_filhos_theme_fontawesome_js', get_template_directory_uri() . '/js/fontawesome.min.js', array(), null, true);
    wp_enqueue_script('pais_e_filhos_theme_input_mask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js', array(), null, true);
    wp_enqueue_script('pais_e_filhos_theme_info_js', get_template_directory_uri() . '/admin/js/info.js', array(), null, true);

    add_menu_page(
        'Pais & Filhos Admin Page',
        'Pais & Filhos',
        'manage_options',
        'pais_e_filhos_theme_admin_page',
        'pais_e_filhos_theme_admin_page',
        get_template_directory_uri() . '/images/logo.png',
        100
    );

    add_submenu_page(
        'pais_e_filhos_theme_admin_page',
        'Informações',
        'Informações',
        'manage_options',
        'pais_e_filhos_theme_admin_page',
        'pais_e_filhos_theme_admin_page',
        1
    );

    add_action('admin_init', 'pais_e_filhos_custom_options');
}

function pais_e_filhos_custom_options()
{
    register_setting(
        'pais_e_filhos',
        'pais_e_filhos_theme_telephone'
    );

    register_setting(
        'pais_e_filhos',
        'pais_e_filhos_theme_whatsapp'
    );

    register_setting(
        'pais_e_filhos',
        'pais_e_filhos_theme_email'
    );

    register_setting(
        'pais_e_filhos',
        'pais_e_filhos_theme_banner'
    );
}

function pais_e_filhos_theme_admin_page()
{
    require(get_template_directory() . "/admin/info.php");
}

function pais_e_filhos_theme_atendimento()
{
    echo "Define os parâmetros de atendimento";
}

function pais_e_filhos_theme_textField($args)
{
    $field = $args['field'];
    $placeholder = $args['placeholder'];
    $value = esc_attr(get_option($field));
    echo "<input name='" . $field . "' value='" . $value . "' placeholder='" . $placeholder . "'/>";
}

function pais_e_filhos_theme_get_options_by_key($key)
{
    return get_option('pais_e_filhos_theme_' . $key);
}

function pais_e_filhos_theme_print_options_by_key($key)
{
    echo pais_e_filhos_theme_get_options_by_key($key);
}

add_action('admin_menu', 'pais_e_filhos_admin');
add_action('pais_e_filhos_theme_print_option', 'pais_e_filhos_theme_print_options_by_key');

add_action('wp_ajax_banner_image', 'pais_e_filhos_theme_get_image_banner');