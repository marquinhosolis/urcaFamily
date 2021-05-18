<?php
/*
Template Name: Products Page
*/
?>
<?php get_header(); ?>
	<section class="cover bubblesBg productsCover" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/wp/bubbles-bg.png);">
		<div class="container">
			<h1>Your home’s hardworking helper</h1>	
			<h2>With naturally inspired fragrances and family-friendly ingredients, Urca’s outstanding  performance will power through even the toughest cleaning jobs.</h2>
		</div>
	</section>
	<main>
		<div class="productsSection" id="laundry">
			<div class="container">
				<div class="productsSectionTitle">
					<h3>Fabric Softeners</h3> 
				</div>
				<div class="productsSectionWrapper">
					<div class="productsSectionSlider flexslider">
						<ul class="slides">
							<?php
								$args = array(
									'post_type' => array( 'products' ),
									'cat'       => 4,
									'posts_per_page' => -1
								);

								$query = new WP_Query( $args );
								if ( $query->have_posts() ) {
									while ( $query->have_posts() ) {
										$query->the_post(); 
										
										$featuredImg = get_the_post_thumbnail_url('');

										?>
										<li>
											<div class="productsSectionContent">
												<div class="productsSectionImage">
													<img src="<?php echo $featuredImg; ?>" alt="<?php the_title(); ?>">
												</div>
												<div class="productsSectionText">
													<?php 
														$str = get_field('product_type');
														echo strtoupper($str);
													?> <br>
													<strong> <?php the_title(); ?></strong> <br>
													<?php the_field('amount'); ?>
												</div>
											</div>
										</li>
									<?php }
								} 
								wp_reset_postdata();
							?>
						</ul>
					</div>
				</div>
				<div class="productsSectionTitle">
					<h3>Laundry Detergent</h3> 
				</div>
				<div class="productsSectionWrapper">
					<div class="productsSectionSlider flexslider">
						<ul class="slides">
							<?php
								$args = array(
									'post_type' => array( 'products' ),
									'cat'       => 5,
									'posts_per_page' => -1
								);

								$query = new WP_Query( $args );
								if ( $query->have_posts() ) {
									while ( $query->have_posts() ) {
										$query->the_post(); 
										
										$featuredImg = get_the_post_thumbnail_url('');

										?>
										<li>
											<div class="productsSectionContent">
												<div class="productsSectionImage">
													<img src="<?php echo $featuredImg; ?>" alt="<?php the_title(); ?>">
												</div>
												<div class="productsSectionText">
													<?php the_field('product_type'); ?> <br>
													<strong> <?php the_title(); ?></strong> <br>
													<?php the_field('amount'); ?>
												</div>
											</div>
										</li>
									<?php }
								} 
								wp_reset_postdata();
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="productsSection" id="all-purpose-cleaners">
			<div class="container">
				<div class="productsSectionTitle">
					<h3>All Purpose Cleaners</h3> 
				</div>
				<div class="productsSectionWrapper">
					<div class="productsSectionSlider flexslider">
						<ul class="slides">
						<?php
								$args = array(
									'post_type' => array( 'products' ),
									'cat'       => 6,
									'posts_per_page' => -1
								);

								$query = new WP_Query( $args );
								if ( $query->have_posts() ) {
									while ( $query->have_posts() ) {
										$query->the_post(); 
										
										$featuredImg = get_the_post_thumbnail_url('');

										?>
										<li>
											<div class="productsSectionContent">
												<div class="productsSectionImage">
													<img src="<?php echo $featuredImg; ?>" alt="<?php the_title(); ?>">
												</div>
												<div class="productsSectionText">
													<?php the_field('product_type'); ?> <br>
													<strong> <?php the_title(); ?></strong> <br>
													<?php the_field('amount'); ?>
												</div>
											</div>
										</li>
									<?php }
								} 
								wp_reset_postdata();
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>	

		
	<section class="homeCta">
		<div class="container">
			<h2>Have a question, comment or suggestion?</h2>
			<a href="<?php echo site_url();?>/contact/" class="btn-light-blue">Contact us now</a>
		</div>
	</section>
	</main>
<?php get_footer(); ?>		