<?php
acf_form_head();
get_header("interior");
?>

<section>
  <div class="row full collapse">
      <div class="large-12 medium-12 small-12 columns">
          <img src="img/banner_separador.jpg" alt="">
      </div>
  </div>
	<div class="large-11 medium-11 small-12 columns large-centered medium-centered">
		<?php
		while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php
			the_content();
			$args = [
				'new_post'        => [
					'post_type'   => 'puestos_ranchos',
					'post_status' => 'pending'
				],
				'post_id'         => 'new_post',
				'post_title'      => false,
				'submit_value'    => 'Enviar',
				'updated_message' => 'Contacto actualizado',
			];
			acf_form( $args );
		endwhile;
		?>
	</div>
</section>

<?php get_footer(); ?>
