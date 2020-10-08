<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
        Blog
      </h1>
    </div>
  </div>
</section>
        <!-- Begin: Bulma Hero -->







<!-- Begin: Main Content Area and Sidebar Section -->
<section class="section">
    <div class="container">

        <div class="columns">

            <div class="column is-9 maincontentarea newsloop">

              <?php wp_reset_query(); ?>

              <?php
              $args = array(
                'posts_per_page' => -1,
                'post_type' => array( 'post' ),
                'orderby' => 'date',
                'order' => 'DESC',
              );
              $loop = new WP_Query( $args ); 
              ?>

              <?php while ( $loop->have_posts() ) : $loop->the_post();?>

                        <div class="pageparticle newsarticle">
                            <p class="subtitle"><?php CC_Theme_Sept_2020_posted_on(); ?></p>
                            <h2 class="title is-2"><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h2>
                            <div class="newscontent"><?php echo get_the_excerpt(); ?></div>
                            <a class="button is-primary" href="<?php echo get_the_permalink() ?>">Learn More</a>                        
                        </div>

              <?php endwhile; ?>
              <?php wp_reset_query(); ?>

            </div>

            <?php get_template_part( 'sidebar' );           // sidebar (sidebar.php) ?>

        </div>

    </div>
</section>
<!-- End: Main Content Area and Sidebar Section -->

























</main><!-- #main -->

<?php
get_footer();
