<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CC_Theme_Sept_2020
 */

?>

		
	
<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/10/footer-houses.png" alt="" width="466" height="104" class="aligncenter footerhouses size-full wp-image-211" />

<!-- Begin: Footer Top Feature -->
<section class="section footertopfeature">
		<div class="container has-text-centered">

		<span class="title is-2">Be part of the solution</span><a href="<?php echo get_site_url(); ?>/donate/" class="button is-salmon">Donate</a>

		</div>
</section>
<!-- End: Footer Top Feature -->


<!-- Begin: Footer -->
<section class="section footersection">
	<footer id="colophon" class="site-footer">
		<div class="container">

			<div class="columns">

				<div class="column is-9">

					<div class="columns">
						<div class="column is-8">
							<?php the_field('footer_contact_form', 'option'); ?>
						</div>
						<div class="column is-4">
							<?php the_field('contact_info_section', 'option'); ?>
						</div>
					</div>

					<hr>

					<div class="columns">
						<div class="column is-4">
							<?php the_field('language_translation_tool', 'option'); ?>
						</div>
						<div class="column is-4">
							<?php the_field('footer_menu', 'option'); ?>
						</div>
						<div class="column is-4 copyrightsection">
							<?php the_field('copyright_section', 'option'); ?>
						</div>
					</div>



				</div>

				<div class="column">
					<div class="site-branding">
					<?php the_custom_logo(); ?>
					</div><!-- .site-branding -->

					<?php the_field('social_media_section', 'option'); ?>

				</div>

			</div>

		</div>
	</footer><!-- #colophon -->
</section>
<!-- End: Footer -->




</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Begin Constant Contact Active Forms -->
<script> var _ctct_m = "81c4823b14b40e29bd039ec601c3755f"; </script>
<script id="signupScript" src="//static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js" async defer></script>
<!-- End Constant Contact Active Forms -->

</body>
</html>
