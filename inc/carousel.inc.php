<?php
function get_carousel() {
    $hasImages = false;
?>
<div class="<?php echo wp_is_mobile() ? "carousel_mobile" : "carousel_desktop" ?> slide" data-ride="carousel">
<?php
    if($hasImages){
?>
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <!--<div class="carousel-item active">
            <img class="d-block w-100" src="https://picsum.photos/seed/picsum/728/182" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://picsum.photos/seed/picsum/728/182" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://picsum.photos/seed/picsum/728/182" alt="Third slide">
        </div>-->
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
<?php
    }
?>
</div>
<?php
}
add_action('pais_e_filhos_carousel', 'get_carousel');
?>