<?php get_header('interior'); ?>

    <section>
        <div class="row full collapse">
            <div class="large-12 medium-12 small-12 columns featpage">
                <?php the_post_thumbnail("pagefeat");?>
            </div>
        </div>

        <div class="row">
            <div class="large-10 medium-11 small-12 columns large-centered medium-centered">
                    <div class="texto_interior">
                        <h5>Patrimonio arquitectónico rural</h5>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content();?>
                    </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
