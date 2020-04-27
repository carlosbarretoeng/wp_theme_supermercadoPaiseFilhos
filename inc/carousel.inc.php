<?php
function get_carousel() {
?>
<div class="<?php echo wp_is_mobile() ? "carousel_mobile" : "carousel_desktop" ?>">
    <div class="carousel slide carousel-fade" data-ride="carousel" data-interval="1500">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://picsum.photos/seed/picsum/728/182" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://placedog.net/728/182" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://via.placeholder.com/728x182.png?text=Teste" alt="Third slide">
            </div>
        </div>
    </div>
</div>
<?php
}
add_action('pais_e_filhos_carousel', 'get_carousel');
?>