<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<section class="section section-devices" id="devices">
			<h2><?php the_field( "devices_title" ); ?></h2>
			<p class="section-intro"><?php the_field( "devices_intro" ); ?></p>
			<table class="striped">
				<thead>
					<tr>
						<th>Device</th>
						<th>Type</th>
						<th>OS</th>
						<th>Contributor</th>
					</tr>
				</thead>
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
			
			<div class="card">
				<div class="card-content">
					<h3 class="card-title">Contribute a device!</h3>
					<p>Have an old device lying around? Or would you like to a device for the lab? Please support the local community by contributing a device to the Pittsburgh Open Device Lab.</p>
				</div>
				<div class="card-action">
					<a href="mailto:brad@bradfrost.com?subject=Pitsburgh%20Open%20Device%20Lab%20Device%20Donation">Donate a device</a>
				</div>
			</div>
		</section>
		
		<section class="section section-visit" id="visit">
			<h2><?php the_field( "visit_title" ); ?></h2>
			
			<div class="row">
		        <div class="col s12 m6">
		          <div class="card">
		            <div class="card-image">
		              <a href="<?php the_field( "visit_map_link" ); ?>"><img src="<?php the_field( "visit_map_image_url" ); ?>" alt="View location map" /></a>
		            </div>
		            <div class="card-content">
		              <?php the_field( "visit_address" ); ?>
		            </div>
		            <div class="card-action">
		              <a href="<?php the_field( "visit_map_link" ); ?>">View map</a>
		            </div>
		          </div>
		        </div>
		        <div class="col s12 m6">
			      	<?php the_field( "visit_content" ); ?>
			      	<a href="mailto:elliott%40catapultpgh.org?subject=Pitsburgh%20Open%20Device%20Lab" class="btn btn-large">Schedule a Visit</a>
			    </div>
		    </div>
		      
		</section>
		
	
		
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
