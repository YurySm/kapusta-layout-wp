<?php
	get_header();
?>
	    <section class="master">
        <div class="container container-big">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/artem/artem-bg.png" alt="photo" class="master__bg">
            <h2 class="master__title">
                <?php the_title(); ?>
			</h2>
			<div class="master__wrapper">
				<div class="master__wrapper-row">
						<?php 
							$descr = get_field('our_descr_1');
							$img = get_field('our_img_1');
							if ($descr) {

								if ($img) {
									?>
										<img src="<?php echo bloginfo('template_url'); ?>/assets/img/artem/circ-1.png" alt="bg" class="master__wrapper-bg">
										<img src=" <?php the_field('our_img_1'); ?>" alt="photo" class="master__wrapper-img">
									<?php
								}else{
									?>
										<img src="<?php echo bloginfo('template_url'); ?>/assets/img/our/no-photo.png" alt="no-photo">
									<?php
								};
								?>
								<div class="master__wrapper-descr">
									<h2 class="master__subtitle">Путь к преподаванию</h2>
									<?php the_field('our_descr_1'); ?>
								</div>
							<?php
							};
						?>     
				</div>
			
				<div class="master__wrapper-row reverse">
						
						<?php 
							$descr = get_field('our_descr_2');
							$img = get_field('our_img_2');
							if ($descr) {
								?>
									<div class="master__wrapper-descr">
									<?php the_field('our_descr_2'); ?>
									</div>
								<?php
								if ($img) {
									?>
										<img src="<?php echo bloginfo('template_url'); ?>/assets/img/artem/circ-2.png" alt="bg" class="master__wrapper-bg-2">
										<img src=" <?php the_field('our_img_2'); ?>" alt="photo" class="master__wrapper-img-2">
									<?php
								}else{
									?>
										<img src="<?php echo bloginfo('template_url'); ?>/assets/img/our/no-photo.png" alt="no-photo">
									<?php
								};
							};
						?>                   
				</div>
				<div class="master__wrapper-row">
						<?php 
							$descr = get_field('our_descr_3');
							$img = get_field('our_img_3');
							if ($descr) {

								if ($img) {
									?>
										<img src="<?php echo bloginfo('template_url'); ?>/assets/img/artem/circ-3.png" alt="bg" class="master__wrapper-bg-3">
										<img src=" <?php the_field('our_img_3'); ?>" alt="photo" class="master__wrapper-img-3">
									<?php
								}else{
									?>
										<img src="<?php echo bloginfo('template_url'); ?>/assets/img/our/no-photo.png" alt="no-photo">
									<?php
								};
								?>
									<div class="master__wrapper-descr">
									<?php the_field('our_descr_3'); ?>
									</div>
								<?php
							};
						?>   
				</div>
				<div class="master__wrapper-row reverse">
						<?php 
							$descr = get_field('our_descr_4');
							$img = get_field('our_img_4');
							if ($descr) {
								?>
									<div class="master__wrapper-descr">
									<?php the_field('our_descr_4'); ?>
									</div>
								<?php

								if ($img) {
									?>
										<img src="<?php echo bloginfo('template_url'); ?>/assets/img/artem/circ-4.png" alt="bg" class="master__wrapper-bg-4">
										<img src=" <?php the_field('our_img_4'); ?>" alt="photo" class="master__wrapper-img-4">
									<?php
								}else{
									?>
										<img src="<?php echo bloginfo('template_url'); ?>/assets/img/our/no-photo.png" alt="no-photo">
									<?php
								};

							};
						?>
				</div>
			</div>
        </div>
    </section>

<?php
get_footer();
?>
