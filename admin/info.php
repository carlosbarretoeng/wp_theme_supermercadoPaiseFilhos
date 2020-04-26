<h1>Informações sobre o Supermercado</h1>

<?php settings_errors() ?>
<form method="post" action="options.php">
    <?php settings_fields('pais_e_filhos'); ?>
    <?php do_settings_sections('pais_e_filhos_theme_admin_page'); ?>
    <?php submit_button() ?>
</form>
