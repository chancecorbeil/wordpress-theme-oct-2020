<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
  <!-- Hero footer: will stick at the bottom -->
  <div class="hero-foot">
    <nav class="tabs is-boxed">
      <div class="container">
        <ul>

          <?php

                // Check rows exists.
                if( have_rows('page_sections') ):

                    // Loop through rows.
                    while( have_rows('page_sections') ) : the_row();

                        // Load sub field value.
                        $sub_value = get_sub_field('subtitle');

                        // Do something...
                        ?>

                        <li><a href="#<?php the_sub_field('subtitle'); ?>"><?php the_sub_field('subtitle'); ?></a></li>                    

                        <?php

                    // End loop.
                    endwhile;

                // No value.
                else :
                    // Do something...
                endif;

                ?>

        </ul>
      </div>
    </nav>
  </div>
</section>
        <!-- Begin: Bulma Hero -->





<!-- Begin: Main Content Area and Sidebar Section -->
<section class="section">
    <div class="container">

        <div class="columns is-variable is-8">

            <div class="column is-9 maincontentarea">

                <?php

                // Check rows exists.
                if( have_rows('page_sections') ):

                    // Loop through rows.
                    while( have_rows('page_sections') ) : the_row();

                        // Load sub field value.
                        $sub_value = get_sub_field('subtitle');
                        $sub_value = get_sub_field('title');
                        $sub_value = get_sub_field('content');

                        // Do something...
                        ?>

                        <div class="pageparticle" id="<?php the_sub_field('subtitle'); ?>">
                            <p class="subtitle"><?php the_sub_field('subtitle'); ?></p>
                            <h2 class="title is-2"><?php the_sub_field('title'); ?></h2>
                            <?php the_sub_field('content'); ?>                            
                            
                        </div>

                        <?php

                    // End loop.
                    endwhile;

                // No value.
                else :
                    // Do something...
                endif;

                ?>

            </div>

            <?php get_template_part( 'sidebar' );           // sidebar (sidebar.php) ?>

        </div>

    </div>
</section>
<!-- End: Main Content Area and Sidebar Section -->







	</main><!-- #main -->

<?php
get_footer();
