<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
<main class="contactPage">
    <div class="contactPageImage" style="background-image: url( <?php the_field('background_image'); ?> )">
        <!-- <img src="" alt=""> -->
    </div>
    <section class="contactPageContent">
        <h1 class="sectionTitle">Contact</h1>
        <div class="contactPageContentText">
            <?php the_field('contact_copy'); ?>
        </div>
        
        <div class="contactPageForm">
            <?php echo do_shortcode('[formidable id=1]')?>
        </div>
    </section>
</main>
<?php get_footer(); ?>	