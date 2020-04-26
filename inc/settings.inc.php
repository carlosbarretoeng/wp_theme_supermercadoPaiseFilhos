<?php

function pais_e_filhos_admin()
{
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

    add_submenu_page(
        'pais_e_filhos_theme_admin_page',
        'Tema',
        'Tema',
        'manage_options',
        'pais_e_filhos_theme_template_page',
        'pais_e_filhos_theme_template_page',
        2
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

    add_settings_section(
        'pais_e_filhos_atendimento',
        'Atendimento',
        'pais_e_filhos_theme_atendimento',
        'pais_e_filhos_theme_admin_page'
    );

    add_settings_field(
        'pais_e_filhos_atendimento_telefone',
        'Telefone',
        'pais_e_filhos_theme_textField',
        'pais_e_filhos_theme_admin_page',
        'pais_e_filhos_atendimento',
        array(
            'field' => 'pais_e_filhos_theme_telephone',
            'placeholder' => 'Telefone'
        )
    );

    add_settings_field(
        'pais_e_filhos_atendimento_whatsapp',
        'Whatsapp',
        'pais_e_filhos_theme_textField',
        'pais_e_filhos_theme_admin_page',
        'pais_e_filhos_atendimento',
        array(
            'field' => 'pais_e_filhos_theme_whatsapp',
            'placeholder' => 'Whatsapp'
        )
    );
}

function pais_e_filhos_theme_admin_page()
{
    require(get_template_directory() . "/admin/info.php");
}

function pais_e_filhos_theme_template_page()
{
    echo "OPA";
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

function pais_e_filhos_theme_get_options_by_key($key) {
    return get_option('pais_e_filhos_theme_' . $key);
}

function pais_e_filhos_theme_print_options_by_key($key) {
    echo pais_e_filhos_theme_get_options_by_key($key);
}

add_action('admin_menu', 'pais_e_filhos_admin');
add_action('pais_e_filhos_theme_print_option', 'pais_e_filhos_theme_print_options_by_key');