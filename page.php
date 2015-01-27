<?php get_header(); ?>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<div <?php post_class(); ?>>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
		<!-- /article -->

	<?php endwhile; ?>

	<?php endif; ?>

	</section>
	<!-- /section -->

<?php get_footer(); ?>
