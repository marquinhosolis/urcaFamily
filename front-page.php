<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
<main>
	<section class="cover bubblesBg homeCover" style="background-image: url(<?php the_field('cover_background'); ?>);">
		<div class="container">
			<div class="homeCoverText">
				<h1><strong><?php the_field('cover_title'); ?></strong><br><?php the_field('cover_subtitle'); ?></h1>
				<a href="<?php echo site_url(); ?>/where-to-buy/" class="btn-white">where to buy</a>
			</div>
			<div class="homeCoverImage">
				<img src="<?php the_field('cover_image'); ?>" alt="Urca Products">
			</div>
	</section>
	<section class="homeIntro">
		<div class="container">
			<div class="homeIntroText">
				<h2><?php the_field('home_intro_title'); ?></h2>
				<div class="homeIntroCopy">
					<?php the_field('home_intro_copy'); ?>
				</div>
			</div>
			<div class="homeIntroImage">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/bubbles-isolated.png" alt="Bubbles">
			</div>
		</div>
	</section>
	<section class="exploreProductsHome">
		<div class="container">
			<h2 class="sectionTitle">Explore our products</h2>
			<div class="productsHome">
				<?php
					if( have_rows('home_products_link_') ):
						while ( have_rows('home_products_link_') ) : the_row(); ?>
							<a href="<?php echo site_url();?><?php the_sub_field('home_product_link'); ?>">
								<img src="<?php the_sub_field('home_link_product_image'); ?>" alt="All propose Cleaners">
								<div class="productsHomeLabel"><?php the_sub_field('home_product_label'); ?></div>
							</a>
					<?php endwhile;
					endif;
				?>
			</div>
		</div>
	</section>
	<section class="whyChoseHome">
		<div class="container">
			<h2 class="sectionTitle">Why choose Urca?</h2>
			<div class="reasonsHome">
				<?php
					if( have_rows('why_choose_urca') ):
						while ( have_rows('why_choose_urca') ) : the_row(); ?>
							<div class="reasonHome">
								<img src="<?php the_sub_field('why_choose_urca_image'); ?>" alt="<?php the_sub_field('why_choose_urca_title'); ?>">
								<h3><?php the_sub_field('why_choose_urca_title'); ?></h3>
								<p><?php the_sub_field('why_choose_urca_copy'); ?></p>
							</div>
					<?php endwhile;
					endif;
				?>
			</div>
			<a href="<?php echo site_url();?>/about-us/" class="btn-light-blue">learn more</a>
		</div>
	</section>
	<section class="lookingUrcaHome">
		<div class="container">
			<div class="lookingUrcaHomeText">
				<h2 class="sectionTitle"><?php the_field('where_to_buy_title'); ?></h2>
				<a href="<?php echo site_url();?>/where-to-buy/" class="btn-light-blue">where to buy</a> <br>
			</div>
			<div class="lookingUrcaHomeImage">
				<img src="<?php the_field('where_to_buy_image'); ?>" alt="">	
			</div>
		</div>
	</section>
	<section class="homeCta">
		<div class="container">
			<h2>Have a question, comment or suggestion?</h2>
			<a href="<?php echo site_url();?>/contact/" class="btn-light-blue">Contact us now</a>
		</div>
	</section>
</main>
<?php get_footer(); ?>		