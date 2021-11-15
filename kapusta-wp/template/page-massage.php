<?php 
/*
    Template Name: Массаж
*/
?>
<?php 
    get_header( );
?>
    <section class="massage">
        <div class="container">
            <h2 class="massage__title"><?php the_field('massage_title'); ?></h2>
            <img src="<?php the_field('massage_bg'); ?>" alt="bg" class="massage__bg">
            <img src="<?php the_field('massage_img'); ?>" alt="massage" class="massage__img">
            <img src="<?php the_field('massage_bg_mob'); ?>" alt="bg" class="massage__bg_mob">
            <div class="massage__promo">
                <?php the_field('massage_descr'); ?>    
            </div>
        </div>
    </section>

<?php 
    get_footer( );
?>
