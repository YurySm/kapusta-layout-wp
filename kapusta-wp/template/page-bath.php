<?php 
/*
    Template Name: Банька
*/
?>
<?php 
    get_header( );
?>
    <section class="bath">

        <div class="container">
            <img src="<?php the_field('bath_bg'); ?>" alt="bg" class="bath__bg">
            
            <h2 class="bath__title"><?php the_field('bath_title'); ?></h2>
            <img src="<?php the_field('bath_img'); ?>" alt="bath" class="bath__img">
            <img src="<?php the_field('bath_img_mob'); ?>" alt="bg_mob" class="bath__img_mob">
            <div class="bath__photos">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/musik/photo-bg.png" alt="bg">
            </div>
            <div class="bath__photos_mob">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/mob/bath_photo_bg_mob.png" alt="bg">
            </div>

            <div class="bath__photos-items">
                <img src="<?php the_field('bath_photo_1'); ?>" alt="photo-1" class="bath__photo">
                <img src="<?php the_field('bath_photo_2'); ?>" alt="photo-2" class="bath__photo">
                <img src="<?php the_field('bath_photo_3'); ?>" alt="photo-3" class="bath__photo">
            </div>
            <div class="bath__photos-items_mob">
                <img src="<?php the_field('bath_photo_1'); ?>" alt="photo-1" class="bath__photo">
                <img src="<?php the_field('bath_photo_2'); ?>" alt="photo-2" class="bath__photo">
                <img src="<?php the_field('bath_photo_3'); ?>" alt="photo-3" class="bath__photo">
            </div>
        </div>
    </section>
<?php 
    get_footer( );
?>
