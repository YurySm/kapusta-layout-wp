<?php 
/*
    Template Name: Йога
*/
?>
<?php 
    get_header( );
?>

    <section class="yoga">
        <div class="container">
            <img src="<?php the_field('yoga_bg'); ?>" alt="bg" class="yoga__bg">
            <h2 class="yoga__title"><?php the_field('yoga_title'); ?></h2>
            <img src="<?php the_field('yoga_img'); ?>" alt="woman" class="yoga__img">
            <img src="<?php the_field('yoga_img_mob'); ?>" alt="woman" class="yoga__img_mob">
            <div class="yoga__descr">
                <?php the_field('yoga_descr'); ?>
            </div>
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/mob/yoga_descr_mob.png" alt="descr" class="yoga__descr_img">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/cat/2-cat-01.gif" alt="cat" class="yoga__cat_mob"> 
            <div class="yoga__big-photo">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/yoga/frame-big.png" alt="frame" class="yoga__big-photo_bg">
                <div class="yoga__big-photo_img">
                    <img src="<?php the_field('yoga_photo_big'); ?>" alt="photo">
                </div>
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/yoga/yoga-bg-bottom.png" alt="bg" class="yoga__big-photo__bg">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/mob/yoga_bottom.png" alt="child" class="yoga__big-photo__bg_mob">
            </div>

            <div class="yoga__photos">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/yoga/yoga-photo-bg.png" alt="bg">
            </div>
            <div class="yoga__photos_mob">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/mob/yoga_photo_bg.png" alt="bg">
            </div>
            <div class="yoga__photos-items">
                <img src="<?php the_field('yoga_photo_1'); ?>" alt="photo-1" class="yoga__photo">
                <img src="<?php the_field('yoga_photo_2'); ?>" alt="photo-2" class="yoga__photo">
                <img src="<?php the_field('yoga_photo_3'); ?>" alt="photo-3" class="yoga__photo">
            </div>
            <div class="yoga__photos-items_mob">
                <img src="<?php the_field('yoga_photo_1'); ?>" alt="photo-1" class="yoga__photo">
                <img src="<?php the_field('yoga_photo_2'); ?>" alt="photo-2" class="yoga__photo">
                <img src="<?php the_field('yoga_photo_3'); ?>" alt="photo-3" class="yoga__photo">
            </div>
        </div>
    </section>
<?php 
    get_footer( );
?>
