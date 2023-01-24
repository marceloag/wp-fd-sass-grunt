<?php
acf_form_head();
get_header();
?>

<section>
	<main role="main">
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
	</main>
</section>

<?php get_footer(); ?>
