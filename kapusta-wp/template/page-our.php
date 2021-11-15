<?php 
/*
    Template Name: Наши мастера
*/
?>
<?php 
    get_header( );
?>
    <section class="our">
        <div class="container container-big">
            <div class="our__items">
                <?php 
                    $posts = get_posts( array( 
                        'numberposts' => -1,
                        'category_name'    => 'our',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                        ?>
                            <div class="our__item">
                                
                                <img src="<?php the_field('our_img'); ?>" alt="photo" class="our__item__photo">    
                                
                                <div class="our__item__person">
                                    <div class="our__item__person-name"><?php the_title();?></div>
                                    <div class="our__item__person-descr"><?php the_field('our_descr'); ?></div>
                                    <div class="our__item__person-link">
                                        <a href="<?php echo get_permalink( ); ?>">Читать далее</a>
                                    </div>
                                </div>
                            </div> 
                        <?php
                    }

                    wp_reset_postdata(); // сброс
                ?> 
                <div class="our__item our__item-last">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/our/mom.png" alt="mom">
                </div>
            </div>            
            
        </div>
    </section>
<?php 
    get_footer( );
?>
