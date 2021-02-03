<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PSDtoWP
 */
?>

	<footer id="colophon" class="site-footer">
		<div class="footer-container">
		<div class="footer-head-row row ml-0 mr-0">
			<div class="container">
				<div class="connected-heading footer-head-col pull-left col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<p class="first-heading">Get to know us better now!</p>
					<p>Share your Products over the Social Networks</p>
				</div>
				<div class="footer-head-col footer-icons-col pull-left col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<a href="#rss"><i class="fa fa-rss"></i></a>
					<a href="#rss"><i class="fa fa-pinterest"></i></a>
					<a href="#rss"><i class="fa fa-facebook"></i></a>
					<a href="#rss"><i class="fa fa-twitter"></i></a>
					<a href="#rss"><i class="fa fa-dribbble"></i></a>
				</div>
				<div class="search-heading footer-head-col pull-left col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<p class="first-heading">Search!</p>
					<p>Search across our website</p>
				</div>
				<div class="search-col footer-head-col pull-left col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
		<div class="footer-widgets-row row ml-0 mr-0">
			<div class="container">
				<div class="footer-widget-textwidget footer-widget-col pull-left col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<?php dynamic_sidebar('footer-1'); ?>
				</div>
				<div class="footer-widget-recent-posts footer-widget-col pull-left col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<?php dynamic_sidebar('footer-2'); ?>
				</div>
				<div class="footer-widget-col pull-left col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<?php dynamic_sidebar('footer-3'); ?>
				</div>
				<div class="footer-widget-newsletter footer-widget-col pull-left col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<?php dynamic_sidebar('footer-4'); ?>
				</div>
			</div>
		</div>
		<div class="footer-copyrights-row row ml-0 mr-0">
			<div class="container">
				<div class="footer-menu-col pull-left col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-3',
								'menu_id'        => 'footer-menu',
								'container_class' => 'footer-menu-container',
								'menu_class' => 'footer-menu'
							)
						);
					?>
				</div>
				<div class="footer-copyrights-col pull-right col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<?php dynamic_sidebar('footer-5'); ?>
				</div>
			</div>
		</div>
		</div><!-- .footer-container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script >
	$('.portfolio-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		autoplay:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:4
			}
		}
	})
	$('.brands-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		autoplay:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:5
			}
		}
	})
$('.tnp-name').attr('placeholder', 'Name');
$('.tnp-email').attr('placeholder', 'Email');

 // Add minus icon for collapse element which is open by default
$(".collapse.show").each(function(){
	$(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
});

// Toggle plus minus icon on show hide of collapse element
$(".collapse").on('show.bs.collapse', function(){
	$(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
}).on('hide.bs.collapse', function(){
	$(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
});
</script>
</body>
</html>