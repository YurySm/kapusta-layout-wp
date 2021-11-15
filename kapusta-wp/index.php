<?php
    get_header();
?>

 


    <section class="carousel">        
        <div class="container">
            <div class="carousel__inner">
                <?php   
                    $posts = get_posts( array( 
                        'numberposts' => -1,
                        'category_name'    => 'slider',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                        ?>
                            <div>
                                <h2 class="carousel__title"><?php the_title(); ?></h2>
                                <img src="<?php the_field('slider_img'); ?>" alt="slider">
                                <div class="carousel__descr">
                                    <?php the_field('slider_descr'); ?>
                                </div>
                                <?php 
                                    $field = get_field('slider_btn');
                                    if ($field == 'on') {
                                        ?>
                                            <a href="<?php the_field('slider_link');?>">подробнее</a>
                                        <?php
                                    }
                                ?>            
                            </div>
                        <?php
                    }

                    wp_reset_postdata(); // сброс
                ?>

            </div>
        </div>
    </section>

    <section class="carousel__mob">        
        <div class="container">
            <div class="carousel__mob_inner">
            <?php   
                    $posts = get_posts( array( 
                        'numberposts' => -1,
                        'category_name'    => 'slider',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                        ?>
                            <div>
                                <h2 class="carousel__mob_title"><?php the_title(); ?></h2>
                                <img src="<?php the_field('slider_img_mob'); ?>" alt="slider_mob">
                                <div class="carousel__mob_descr">
                                    <?php the_field('slider_descr'); ?>
                                </div>
                                <?php 
                                    $field = get_field('slider_btn');
                                    if ($field == 'on') {
                                        ?>
                                            <a href="<?php the_field('slider_link');?>">подробнее</a>
                                        <?php
                                    }
                                ?>              
                            </div>
                        <?php
                    }

                    wp_reset_postdata(); // сброс
                ?>

            </div>
        </div>
    </section>

<?php 
    get_footer();
?>