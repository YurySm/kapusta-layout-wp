<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kapusta
 */

get_header();
?>
	<section class="no_page">

		<div class="container">
			
			<h2 class="no_page__title">УПС!! <br> Данная страница не найдена</h2>
			<img src="<?php echo bloginfo('template_url'); ?>/assets/img/cat/2-cat-01.gif" alt="bath" class="no_page__img">
			<a href="<?php echo get_home_url(); ?>" class="no_page__link">
				на главную
            </a>
			


		</div>
	</section>


<?php
get_footer();
