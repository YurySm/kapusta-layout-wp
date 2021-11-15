<?php 
/*
    Template Name: Форум
*/
?>
<?php 
    get_header( );
?>      <img src="<?php the_field('forum_bg'); ?>" alt="bg" class="contacts__bg">
        <section class="forum">
            
            <div class="container">
                <h1 class="contacts__title  forum__title"><?php the_field('forum_title'); ?>
            </div>
        

        </section>
<?php 
    get_footer( );
?>
