<?php get_header("interior"); ?>
    <section>
        <div class="row full collapse">
            <div class="large-12 medium-12 small-12 columns">
                <img src="<?php bloginfo('template_directory'); ?>/img/banner_separador.jpg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="large-11 medium-11 small-12 columns large-centered medium-centered">
                <div class="row">
                    <div class="texto_interior">
                        <div class="large-6 medium-6 small-12 columns contendeor_img">
                            <ul class="example-orbit" data-orbit data-options="bullets:false;slide_number:false;animation:fade">
                                <li>
                                    <img src="<?php bloginfo('template_directory'); ?>/img/img_puesto_2.jpg" alt="">
                                </li>

                                <li>
                                    <img src="<?php bloginfo('template_directory'); ?>/img/img_puesto_3.jpg" alt="">
                                </li>

                                <li>
                                    <img src="<?php bloginfo('template_directory'); ?>/img/img_puesto.jpg" alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="large-6 medium-6 small-12 columns">
                            <div class="titulo">
                                <h3><i class="fa-solid fa-location-dot"></i> <?php echo get_field("nombre");?></h3> 
                                <span class="rancho"><?php echo get_field("tipo_de_construccion");?></span>
                                <h5 class="otros_nombres">Otros nombres: <?php echo get_field("otros_nombres");?></h5>
                            </div>
                            <p>Memoria histórica: <?php echo get_field("memoria_historica");?></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="texto_interior text-center">
                        <table>

                            <tbody>
                                <tr>
                                    <th width="500">Comuna:</th>
                                    <td><?php echo get_field("comun");?></td>
                                </tr>
                                <tr>
                                    <th width="500">Provincia:</th>
                                    <td><?php echo get_field("provincia");?></td>
                                </tr>
                                <tr>
                                    <th width="500">Mapa:</th>
                                    <td>
                                      <?php 
                                        $location = get_field('ubicacion');
                                        if( $location ): ?>
                                            <div class="acf-map" data-zoom="10">
                                                <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
                                            </div>
                                      <?php endif; ?>
                                        <!-- <div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2392.41009519422!2d-70.89923992275055!3d-53.156680755572616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbdb2637f592fc0d9%3A0x1432269e02dd9821!2sCroop%20Agencia%20Digital!5e0!3m2!1ses!2scl!4v1673551775817!5m2!1ses!2scl' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe></div> -->
                                    </td>
                                </tr>

                                <tr>
                                    <th width="500">Nombre predio:</th>
                                    <td><?php echo get_field("predio");?></td>
                                </tr>
                                <tr>
                                    <th width="500">Uso original:</th>
                                    <td><?php echo get_field("uso_original_del_puesto_o_rancho");?></td>
                                </tr>
                                <tr>
                                    <th width="500">Año construcción:</th>
                                    <td><?php echo get_field("anio_construccion");?></td>
                                </tr>
                                <tr>
                                    <th width="500">Materialidad:</th>
                                    <td><?php echo get_field("materialidad");?></td>
                                </tr>
                                <tr>
                                    <th width="500">Dimensiones:</th>
                                    <td><?php echo get_field("tamanio");?> mts2.</td>
                                </tr>
                                <tr>
                                    <th width="500">Habitabilidad actual:</th>
                                    <td><?php echo get_field("habitabilidad_actual");?></td>
                                </tr>
                                <tr>
                                    <th width="500">Uso actual</th>
                                    <td><?php echo get_field("uso_actual");?></td>
                                </tr>

                        </table>
                    </div>
                </div>

                <br>

            </div>
        </div>
    </section>

<?php get_footer("ficha"); ?>