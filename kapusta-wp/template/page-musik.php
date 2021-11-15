<?php 
/*
    Template Name: Музыка
*/
?>
<?php 
    get_header( );
?>
        <section class="musik">
        <div class="container">
            <img src="<?php the_field('musik_bg'); ?>" alt="bg" class="musik__bg">
            <img src="<?php the_field('musik_bg_mob'); ?>" alt="bg" class="musik__bg_mob">
            <h2 class="musik__title"><?php the_field('musik_title'); ?></h2>
            <div class="musik__descr"><?php the_field('musik_descr'); ?></div>
            <div class="musik__photos">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/musik/photo-bg.png" alt="bg">
            </div>
            <div class="musik__photos_mob">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/mob/musik_photos_bg_mob.png" alt="bg_mob">
            </div>
            <div class="musik__photos-items">
                <img src="<?php the_field('musik_photo_1'); ?>" alt="photo-1" class="musik__photo">
                <img src="<?php the_field('musik_photo_2'); ?>" alt="photo-2" class="musik__photo">
                <img src="<?php the_field('musik_photo_3'); ?>" alt="photo-3" class="musik__photo">
            </div>
            <div class="musik__photos-items_mob">
                <img src="<?php the_field('musik_photo_1'); ?>" alt="photo-1" class="musik__photo">
                <img src="<?php the_field('musik_photo_2'); ?>" alt="photo-2" class="musik__photo">
                <img src="<?php the_field('musik_photo_3'); ?>" alt="photo-3" class="musik__photo">
            </div>
            
        </div>
    </section>
<?php 
    get_footer( );
?>
