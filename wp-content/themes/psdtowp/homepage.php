<?php
/**
 * Template Name: Homepage
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PSDtoWP
 */

get_header();
?>
<div class="home-content">
	<div class="home-banner row ml-0 mr-0">
		<div class="container">
			<div class="banner-text">
				<h1>REVENANT IS A RESPONSIVE THEME</h1>
				<p>lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum</p>
			</div>
		</div>
	</div><!----home-banner--->
	<div class="home-services row ml-0 mr-0">
		<?php get_template_part('template-parts/home', 'services'); ?>
	</div><!----Home Services--->

	<div class="home-portfolio row ml-0 mr-0">
		<?php get_template_part('template-parts/home', 'portfolio'); ?>
	</div><!----Home portfolio--->

	<div class="home-testimonials-faqs row ml-0 mr-0">
		<?php get_template_part('template-parts/home', 'testimonials-faqs'); ?>
	</div><!----Home testimonials-faqs--->

	<div class="home-news row ml-0 mr-0">
		<?php get_template_part('template-parts/home', 'news'); ?>
	</div><!----Home News--->

	<div class="home-brands row ml-0 mr-0">
		<?php get_template_part('template-parts/home', 'brands'); ?>
	</div><!----Home News--->

</div>
<?php
//get_sidebar();
get_footer(); 
?>