        </div>

        <div id="footer" class="container bg-dark text-white">
            <div class="row">
                <div class="col-sm-16 col-md-4">
                    <div class="card bg-transparent border-0">
                        <div class="card-body">
                            <h4 class="card-title">Institucional</h4>
                            <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'institucional',
                                        'container_id' => 'menu_institucional',
                                        'menu_class' => 'list-group list-group-flush'
                                    )
                                );
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-16 col-md-8">

                </div>
                <div class="col-sm-16 col-md-4">
                    <div class="card bg-transparent border-0">
                        <div class="card-body">
                            <h4 class="card-title">Atendimento</h4>
                            <ul class="list-group">
                                <li class="list-group-item px-0 py-1 border-0 bg-transparent">
                                    <i class="float-left mr-1 fa fa-3x fa-phone-square-alt"></i>
                                    <h5 class="float-left"><?php do_action('pais_e_filhos_theme_print_option', 'telephone') ?></h5>
                                </li>
                                <li class="list-group-item px-0 py-1 border-0 bg-transparent">
                                    <i class="float-left mr-1 fab fa-3x fa-whatsapp"></i>
                                    <h5 class="float-left"><?php do_action('pais_e_filhos_theme_print_option','whatsapp') ?></h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/fontawesome.min.js"></script>
    </body>
</html>