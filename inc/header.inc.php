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
}

function get_navbar_mobile()
{
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">
            <?php get_template_part('images/inline', 'logo_name.svg'); ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">Hidden brand</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
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

function get_categorias()
{
    $taxonomy = 'product_cat';
    $orderby = 'name';
    $show_count = 0;
    $pad_counts = 0;
    $hierarchical = 1;
    $title = '';
    $empty = 0;

    $args = array(
        'taxonomy' => $taxonomy,
        'orderby' => $orderby,
        'show_count' => $show_count,
        'pad_counts' => $pad_counts,
        'hierarchical' => $hierarchical,
        'title_li' => $title,
        'hide_empty' => $empty
    );
    $product_categories = get_categories($args);
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

add_action('pais_e_filhos_header_navbar', 'get_navbar');
add_action('pais_e_filhos_header_categorias', 'get_categorias');