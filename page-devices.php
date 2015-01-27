<?php /* Template Name: Devices */ ?>
<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<?php the_field( "intro_text" ); ?>
	
		<table>
			<?php 
				if( have_rows('devices') ):
				while ( have_rows('devices') ) : the_row(); 
			?> 
			<tr>
				<td><?php the_sub_field( "device_name" ); ?></td>
				<td><?php the_sub_field( "device_type" ); ?></td>
				<td><?php the_sub_field( "device_os" ); ?></td>
				<td><a href="<?php the_sub_field( "device_contributor_url" ); ?>"><?php the_sub_field( "device_contributor" ); ?></a></td>
			</tr>
			<?php 
			    endwhile;
			    endif;
			?>
			
		</table>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
