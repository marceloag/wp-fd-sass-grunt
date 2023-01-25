<?php get_header(); ?>

<div class="row">
  <h2>Archivo de Puestos y Ranchos</h2>
	<div class="large-12 columns">
 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2><?php single_cat_title(); ?> </h2>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2>Archive for <?php the_time('F jS, Y'); ?></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2>Archive for <?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2 class="pagetitle">Author Archive</h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="pagetitle">Blog Archives</h2>
			
		<?php } ?>
		<!--  -->
		<ul class="large-block-grid-4 small-block-grid-2">
			<?php while (have_posts()) : the_post(); ?>
			<li>
				<div class="producto <?php the_category_unlinked(); ?>">
					<a href=" <?php the_permalink(); ?> ">
                        <?php the_post_thumbnail("productotop"); ?>
                    </a>
					<div class="info text-center">
                        <div class="titulop">
                        	<?php the_title(); ?>
                        </div> 
                          <div class="precio">$<?php echo get_field("precio"); ?></div>
                    </div>
				</div>
			</li>
			<?php endwhile; ?>
		</ul>

	</div>
</div>
		

<?php get_footer(); ?>
