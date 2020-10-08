<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
        <!-- Begin: Bulma Hero -->





<!-- Begin: Main Content Area and Sidebar Section -->
<section class="section">
    <div class="container">

        <div class="columns">

            <div class="column is-12 maincontentarea">
			  
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'oct-2020-theme' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'oct-2020-theme' ) . '</span> <span class="nav-title">%title</span>',
						)
					);

				endwhile; // End of the loop.
				?>

            </div>

        </div>

    </div>
</section>
<!-- End: Main Content Area and Sidebar Section -->







	</main><!-- #main -->

<?php
get_footer();
