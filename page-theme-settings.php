<?php
/**
 * The template for displaying the Theme Settings page
 *
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CC_Theme_Sept_2020
 */

get_header();
?>

	<main id="primary" class="site-main">

<!-- Begin: Bulma Hero -->
<section class="hero is-primary is-medium">
  <div class="hero-body" style="background-image: url('<?php the_field('hero_image'); ?>'); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
      <h1 class="title">
        <?php echo get_the_title(); ?>
      </h1>
    </div>
  </div>
</section>
<!-- End: Bulma Hero -->


<!-- Begin: Main Content Area and Sidebar Section -->
<section class="section">
    <div class="container">

        <div class="columns">

            <div class="column is-9 maincontentarea">

                <div class="pageparticle">
                    <h2 class="title is-2">Below are all the settings from the Theme Settings page</h2>

                    <span class="title is-3">Footer Contact Form</span>
                    <?php the_field('footer_contact_form', 'option'); ?>

                    <span class="title is-3">Contact Info Section</span>
                    <?php the_field('contact_info_section', 'option'); ?>

                    <span class="title is-3">Language Translation Tool</span>
                    <?php the_field('language_translation_tool', 'option'); ?>

                    <span class="title is-3">Footer Menu</span>
                    <?php the_field('footer_menu', 'option'); ?>

                    <span class="title is-3">Copyright Section</span>
                    <?php the_field('copyright_section', 'option'); ?>

                    <span class="title is-3">Social Media Section</span>
                    <?php the_field('social_media_section', 'option'); ?>

                    <span class="title is-3">Social Media Share</span>
                    <?php the_field('social_media_share', 'option'); ?>

                    <span class="title is-3">Quote Feature</span>
                    <?php the_field('quote_feature', 'option'); ?>

                    <span class="title is-3">Quote Feature Signature</span>
                    <?php the_field('quote_feature_signature', 'option'); ?>

                    

                    <hr>
                </div>


            </div>

            <div class="column sidebar">
                <div class="pageparticle">
                    <p class="subtitle">Related Content</p>
                    <h3 class="title is-3">Headline page</h3>
                    <p>Egestas erat imperdiete.</p>
                    <button class="button is-primary">Learn More</button>
                </div>

            </div>

        </div>

    </div>
</section>
<!-- End: Main Content Area and Sidebar Section -->

















	</main><!-- #main -->

<?php
get_footer();
