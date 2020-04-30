<div class="container-fluid pr-3">
    <h3>Supermercado Pais & Filhos</h3>

    <?php settings_errors() ?>

    <form method="post" action="options.php">
        <?php settings_fields('pais_e_filhos'); ?>

        <ul class="nav nav-tabs mt-2" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="atendimento-tab" data-toggle="tab" href="#atendimento" role="tab"
                   aria-controls="atendimento"
                   aria-selected="true">Atendimento</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="banner-tab" data-toggle="tab" href="#banner" role="tab" aria-controls="banner"
                   aria-selected="false">Banner</a>
            </li>
        </ul>
        <div class="tab-content pt-2" id="myTabContent">
            <div class="tab-pane active" id="atendimento" role="tabpanel" aria-labelledby="atendimento-tab">
                <div class="row">
                    <div class="form-group col-sm-16 col-md-4 p-1">
                        <label for="inputPassword" class="col-form-label">Telefone:</label>
                        <div>
                            <input class="form-control" name="pais_e_filhos_theme_telephone"
                                   value="<?php esc_attr_e(esc_attr(get_option('pais_e_filhos_theme_telephone'))); ?>"/>
                        </div>
                    </div>
                    <div class="form-group col-sm-16 col-md-4 p-1">
                        <label for="inputPassword" class="col-form-label">Whatsapp:</label>
                        <div>
                            <input class="form-control" name="pais_e_filhos_theme_whatsapp"
                                   value="<?php esc_attr_e(esc_attr(get_option('pais_e_filhos_theme_whatsapp'))); ?>"/>
                        </div>
                    </div>
                    <div class="form-group col-sm-16 col-md-8 p-1">
                        <label for="inputPassword" class="col-form-label">Email:</label>
                        <div>
                            <input class="form-control" name="pais_e_filhos_theme_email"
                                   value="<?php esc_attr_e(esc_attr(get_option('pais_e_filhos_theme_email'))); ?>"/>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Salvar</button>
            </div>
            <div class="tab-pane fade show" id="banner" role="tabpanel" aria-labelledby="banner-tab">
                <div class="row">
                    <div class="form-group col-sm-16 col-md-8 p-1">
                        <label class="col-form-label">Imagem:</label>
                    </div>
                    <div class="form-group col-sm-16 col-md-4 p-1">
                        <button id="loadBannerImage" class="btn btn-secondary btn-block col-form-label">
                            Selecionar
                        </button>
                    </div>
                    <div class="form-group col-sm-16 col-md-4 p-1">
                        <button id="loadBannerImage" class="btn btn-primary btn-block col-form-label">
                            Salvar
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="d-flex justify-content-center align-items-center alert alert-dark"
                         style="width: 100%; margin: 0 auto" role="alert">
                        <?php
                        $image_id = get_option('pais_e_filhos_theme_banner');
                        if (intval($image_id) > 0) {
                            $image = wp_get_attachment_image($image_id, 'medium', false, array('id' => 'pais_e_filhos_banenr_preview', 'class' => 'd-block img-fluid w-100'));
                        } else {
                            $image = '<img style="max-width: 728px" class="d-block w-100 img-fluid" id="pais_e_filhos_banenr_preview" src="https://via.placeholder.com/728x182.png?text=Selecione uma imagem de 728x182" />';
                        }
                        echo $image;
                        ?>
                    </div>
                    <input type="text" name="pais_e_filhos_theme_banner"
                           value="<?php esc_attr_e(esc_attr(get_option('pais_e_filhos_theme_banner'))); ?>"/>
                </div>
            </div>
        </div>
    </form>
</div>