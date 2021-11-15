<?php 
/*
    Template Name: Расписание
*/
?>
<?php 
    get_header( );
?>
    <section class="timetable">
        <img src="<?php the_field('timetable_bg'); ?>" alt="bg" class="timetable__bg">
        <div class="container">
            <h1 class="timetable__title">
                <?php the_field('timetable_title'); ?>
            </h1>
            <img src="<?php the_field('timetable_img_mob_1'); ?>" alt="calendar" class="timetable__img-top">
            <div class="timetable__table">


                <div class="timetable__table-week">
                    <h2 class="timetable__table-title"><?php the_field('timetable_day_1'); ?></h2>
                    <div class="timetable__table-wrapper">
                        <div class="time"><?php the_field('timetable_day_1_time_1'); ?></div>
                        <div class="learn"><?php the_field('timetable_day_1_descr_1'); ?></div>
                    </div>
                    <div class="timetable__table-wrapper">
                        <div class="time"><?php the_field('timetable_day_1_time_2'); ?></div>
                        <div class="learn"><?php the_field('timetable_day_1_descr_2'); ?></div>
                    </div>
                    <div class="timetable__table-wrapper">
                        <div class="time"><?php the_field('timetable_day_1_time_3'); ?></div>
                        <div class="learn"><?php the_field('timetable_day_1_descr_3'); ?></div>
                    </div>
                </div>

                <img src="<?php the_field('timetable_img_mob_2'); ?>" alt="watch" class="timetable__img-watch">

                <div class="timetable__table-week">
                    <h2 class="timetable__table-title"><?php the_field('timetable_day_2'); ?></h2>
                    <div class="timetable__table-wrapper">
                        <div class="time"><?php the_field('timetable_day_2_time_1'); ?></div>
                        <div class="learn"><?php the_field('timetable_day_2_descr_1'); ?></div>
                    </div>
                    <div class="timetable__table-wrapper">
                        <div class="time"><?php the_field('timetable_day_2_time_2'); ?></div>
                        <div class="learn"><?php the_field('timetable_day_2_descr_2'); ?></div>
                    </div>
                    <div class="timetable__table-wrapper">
                        <div class="time"><?php the_field('timetable_day_2_time_3'); ?></div>
                        <div class="learn"><?php the_field('timetable_day_2_descr_3'); ?></div>
                    </div>
                </div>

                <img src="<?php the_field('timetable_img_mob_3'); ?>" alt="paper" class="timetable__img-paper">

                <div class="timetable__table-week">
                    <h2 class="timetable__table-title"><?php the_field('timetable_day_3'); ?></h2>
                    <div class="timetable__table-wrapper">
                        <div class="time"><?php the_field('timetable_day_3_time_1'); ?></div>
                        <div class="learn"><?php the_field('timetable_day_3_descr_1'); ?></div>
                    </div>
                    <div class="timetable__table-wrapper">
                        <div class="time"><?php the_field('timetable_day_3_time_2'); ?></div>
                        <div class="learn"><?php the_field('timetable_day_3_descr_2'); ?></div>
                    </div>
                    <div class="timetable__table-wrapper">
                        <div class="time"><?php the_field('timetable_day_3_time_3'); ?></div>
                        <div class="learn"><?php the_field('timetable_day_3_descr_3'); ?></div>
                    </div>
                </div>
            </div>            
        </div>
        <img src="<?php the_field('timetable_img_mob_4'); ?>" alt="rt" class="timetable__img-rtop">
        <img src="<?php the_field('timetable_img_mob_5'); ?>" alt="rb" class="timetable__img-rbot">
        <img src="<?php the_field('timetable_img_mob_6'); ?>" alt="flowers" class="timetable__img-bottom">
    </section>
<?php 
    get_footer( );
?>
