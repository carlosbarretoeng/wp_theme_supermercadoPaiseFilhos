<!
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div class="container bg-white px-0">
    <header class="container fixed-top p-0">
        <?php do_action('pais_e_filhos_header_navbar'); ?>
    </header>
    <div id="conteudo" class="collapse show multi-collapse px-2">
    <?php do_action('pais_e_filhos_carousel'); ?>
