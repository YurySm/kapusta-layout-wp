<footer>
        <div class="container">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/footer/footer-line.png" alt="line" class="footer__line">
            <div class="footer__wrapper">
                <div class="footer__info">
                    <div class="footer__info-promo">Не стесняйтесь связаться с нами по любым вопросам</div>
                    <div>
                        Телефон:<a class="footer__info" href="tel:<?php the_field('phone', 13); ?>"><?php the_field('phone', 13); ?></a>                        
                    </div>
                    <div class="footer__info-addres">Адрес: <?php the_field('addres', 13); ?></div>
                </div>
                <div class="footer__social">
                    <a href="<?php the_field('insta', 13); ?>" class="footer__link"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/inst.svg" alt="instagram"></a>
                    <a href="<?php the_field('facebook', 13); ?>" class="footer__link"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/facebook.svg" alt="facebook"></a>
                    <a href="<?php the_field('vk', 13); ?>" class="footer__link"><img src="<?php echo bloginfo('template_url'); ?>/assets//img/icon/vk.svg" alt="vk"></a>
                </div>
            </div>
            <div class="footer__img_inner">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/cat/3-cat-01-1.gif" alt="cat">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/cat/1-cat-01.gif" alt="cat"> 
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/cat/2-cat-01.gif" alt="cat">     
            </div> 
        </div>

    </footer>

    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <?php wp_footer(); ?>
</body>
</html>