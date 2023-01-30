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