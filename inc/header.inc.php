<?php
function get_navbar_desktop()
{
    ?>
    <nav class="navbar navbar-light bg-white">
        <a class="navbar-brand" href="/">
            <?php get_template_part('images/inline', 'logo_name.svg'); ?>
        </a>

        <div class="d-flex inline">
            <form class="form-inline my-0 mr-3" method="get" action="<?php echo home_url('/'); ?>">
                <input type="hidden" name="post_type" value="product"/>
                <div class="input-group">
                    <input type="text" class="form-control border-primary" placeholder="Pesquisar" name="s">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="button" id="button-addon2"><i
                                    class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </nav>
    <?php
    get_categorias();
}

function get_navbar_mobile()
{
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="btn btn-light" type="button" data-toggle="collapse" data-target=".multi-collapse"
                aria-controls="navbarMobileCat conteudo" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>

        <a class="navbar-brand" href="/">
            <?php get_template_part('images/inline', 'logo_name.svg'); ?>
        </a>

        <a id="carrinho" class="btn btn-light" href="<?php echo wc_get_cart_url(); ?>">
            <?php get_template_part('images/inline', 'carrinho.svg'); ?>
        </a>

        <div class="collapse multi-collapse navbar-collapse overflow-auto" id="navbarMobileCat" style="max-height: calc(100vh - 130px) !important;">
            <?php do_action('pais_e_filhos_header_categorias'); ?>
        </div>
    </nav>
    <nav class="navbar navbar-light bg-light px-0">
        <form class="form-inline my-0" method="get" action="<?php echo home_url('/'); ?>" style="width: 100%">
            <input type="hidden" name="post_type" value="product"/>
            <div class="input-group">
                <input type="text" class="form-control border-primary" placeholder="Pesquisar" name="s"  style="width: calc(100% - 45px)">
                <div class="input-group-append">
                    <button class="btn btn-outline-primary" type="button" id="button-addon2"><i
                                class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
    </nav>
    <?php
}

function get_navbar()
{
    if(wp_is_mobile()){
        get_navbar_mobile();
    }else{
        get_navbar_desktop();
    }
}

function get_categorias_desktop($product_categories){
?>
    <div class="d-none d-lg-block bg-white p-0 py-2 container" style="height: 110px">
        <div id="product_categories" class="row">
            <?php
            foreach ($product_categories as $product_category) {
                if ($product_category->slug == 'sem-categoria') continue;
                ?>
                <div class="col px-1">
                    <a class="header_category_item" href="<?php echo get_category_link($product_category->term_id); ?>">
                        <div>
                            <?php get_template_part('images/inline', $product_category->slug . '.svg'); ?>
                        </div>
                        <?php echo $product_category->name ?>
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
<?php
}

function get_categorias_mobile($product_categories){
    ?>
    <ul id="mobile_categories" class="list-unstyled navbar-nav mt-2">
        <li id="minhaConta" class="media">
            <a class="d-flex justify-content-center align-items-center header_category_item" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">
                <div class="align-self-start float-left">
                    <i class="fa fa-lg fa-user  text-black"></i>
                </div>
                <div class="media-body float-left">
                    <span class="mt-0 mb-1 text-black">Minha conta</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
        <hr/>
    <?php
    foreach ($product_categories as $product_category) {
        if ($product_category->slug == 'sem-categoria') continue;
    ?>
        <li class="media">
            <a class="d-flex justify-content-center align-items-center header_category_item" href="<?php echo get_category_link($product_category->term_id); ?>">
                <div class="align-self-start float-left">
                    <?php get_template_part('images/inline', $product_category->slug . '.svg'); ?>
                </div>
                <div class="media-body float-left">
                    <span class="mt-0 mb-1"><?php echo $product_category->name ?></span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
    <?php
    }
    ?>
    </ul>
    <?php
}

function get_categorias()
{
    $args = array(
        'taxonomy' => 'product_cat',
        'orderby' => 'name',
        'show_count' => 0,
        'pad_counts' => 0,
        'hierarchical' => 1,
        'title_li' => '',
        'hide_empty' => 0,
        'parent' => 0
    );
    $product_categories = get_categories($args);
    if(wp_is_mobile()){
        get_categorias_mobile($product_categories);
    }else{
        get_categorias_desktop($product_categories);
    }
}

add_action('pais_e_filhos_header_navbar', 'get_navbar');
add_action('pais_e_filhos_header_categorias', 'get_categorias');