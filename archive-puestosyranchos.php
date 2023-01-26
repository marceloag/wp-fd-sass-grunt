<?php get_header("interior"); ?>

<section>
    <div class="row full collapse">
        <div class="large-12 medium-12 small-12 columns">
            <img src="img/banner_catalogo.jpg" alt="">
        </div>
    </div>
		<!--  -->
    <div class="row full" id="contenedor_puestos_ranchos">
      <div class="large-11 medium-10 small-12 columns large-centered medium-centered contendor_item">
        <ul class="large-block-grid-3  medium-block-grid-2 small-block-grid-2">
          <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <a href="<?php the_permalink();?>">
                                <div class="contenedor">
                                    <div class="item">
                                        <div class="puesto_rancho">
                                            <span class="puesto">Puesto</span>
                                        </div>
                                        <div class="texto">
                                            <h3><i class="fa-solid fa-location-dot"></i><?php the_title();?></h3>
                                            <span class="lugar"><?php get_field("comuna");?></span>
                                        </div>

                                        <span class="degradado"></span>

                                        <?php the_post_thumbnail("medium");?>
                                    </div>
                                </div>
                            </a>
                        </li>
          <?php endwhile; ?>
        </ul>
      </div>
    </div>
</div>
		

<?php get_footer(); ?>
