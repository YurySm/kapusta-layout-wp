<?php 
/*
    Template Name: Контакты
*/
?>
<?php 
    get_header( );
?>

    <section class="contacts">
        <img src="<?php the_field('contacts_bg'); ?>" alt="bg" class="contacts__bg">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/mob/contacts_bg.png" alt="bg_mob" class="contacts__bg_mob">
        <div class="container">
            <h1 class="contacts__title"><?php the_field('contacts_title'); ?>
            </h1>
            <img src="<?php the_field('contacts_img'); ?>" alt="circle" class="contacts__img">
            <div class="contacts__info">
                <div class="contacts__tel">
                    <?php the_field('contacts_phone'); ?>
                </div>
                <div class="contacts__addres">
                <?php the_field('contacts_addres'); ?>
                </div>
            </div>
            <div class="contacts__map">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A5a92db17a40d0fd8ef77110b6990efa3c87b06b665e4bbd261a5d3b78777a647&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
            </div>
        </div>
    </section>
<?php 
    get_footer( );
?>
