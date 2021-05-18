<?php
/*
Template Name: About Us
*/
?>

<?php get_header(); ?>
<main>
    <section class="cover bubblesBg coverAboutUs">
        <div class="container">
            <h1>About Urca</h1>
        </div>
    </section>
    <section class="aboutContent">
        <?php
            if( have_rows('copy_sections') ):
                while ( have_rows('copy_sections') ) : the_row(); ?>
                    <div class="aboutArea">
                        <div class="container">
                            <div class="aboutAreaImage">
                                <img src="<?php the_sub_field('section_image'); ?>" alt="">
                            </div>
                            <div class="aboutAreaCopy">
                                <h2><?php the_sub_field('section_title'); ?></h2>
                                <div class="aboutAreaCopyText">
                                    <?php the_sub_field('section_copy'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php endwhile;
            endif;
        ?>
    </section>
    <section class="aboutBubbles">
        <div class="container">
            <?php
                if( have_rows('reasons_why') ):
                    while ( have_rows('reasons_why') ) : the_row(); ?>
                        <div class="aboutwhy">
                            <div class="aboutwhyImage">
                                <img src="<?php the_sub_field('reason_why_image'); ?>" alt="">
                            </div>
                            <div class="aboutwhyText">
                                <h3><?php the_sub_field('reason_why_title'); ?></h3>
                            </div>
                        </div>
                <?php endwhile;
                endif;
            ?>
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