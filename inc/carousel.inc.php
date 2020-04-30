<?php
function get_carousel()
{
    $image_id = get_option('pais_e_filhos_theme_banner');
    if (intval($image_id) > 0) {
        $image = wp_get_attachment_image($image_id, 'medium', false, array('id' => 'pais_e_filhos_banenr_preview', 'class' => 'd-block img-fluid w-100'));
    }
    ?>
    <div class="<?php echo wp_is_mobile() ? "carousel_mobile" : "carousel_desktop" ?>">
        <div class="carousel slide carousel-fade" data-ride="carousel" data-interval="1500">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <?php echo $image ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}

add_action('pais_e_filhos_carousel', 'get_carousel');
?>