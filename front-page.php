<?php
/**
 * The home page template file
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


    <?php add_revslider('slider-1'); ?>

    
<div class="homepagesections">

<!-- Top Home Feature -->
<section class="section topfeaturesection">
    <div class="columns level">
        <div class="column is-4 is-offset-2 has-text-centered">
            <h3 class="title is-3"><?php the_field('top_feature_text'); ?></h3>
            <a class="button is-salmon" href="<?php the_field('top_feature_button_link'); ?>"><?php the_field('top_feature_button_text'); ?></a>
        </div>
        <div class="column is-4 level-item">
            <?php 
            $image = get_field('top_feature_image');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="aligncenter" />
            <?php endif; ?>
        </div>
    </div>
</section>

<?php

// Check rows exists.
if( have_rows('home_page_section') ):

    // Loop through rows.
    while( have_rows('home_page_section') ) : the_row();

        // Load sub field value.
        $sub_value = get_sub_field('image_on_left_or_right');
        $sub_value = get_sub_field('text_and_button_color');
        $sub_value = get_sub_field('imageforsection');
        $sub_value = get_sub_field('titleforsection');
        $sub_value = get_sub_field('textforsection');
        $sub_value = get_sub_field('linkforsection');

        // Do something...
        ?>

        <section class="section homealtsection">
            <div class="columns">

            <?php // Template for Image on the left
            if( get_sub_field('image_on_left_or_right') == 'left' ) { ?> 
            
                <div class="column is-8">
                        <?php 
                        $image = get_sub_field('imageforsection');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="alignleft" />
                        <?php endif; ?>
                </div>

                <div class="column is-3 has-text-centered">                        
                        <h3 class="title is-3 <?php the_sub_field('text_and_button_color'); ?>"><a href="<?php the_sub_field('linkforsection'); ?>"><?php the_sub_field('titleforsection'); ?></a></h3>
                        <p><?php the_sub_field('textforsection'); ?></p>
                        <a class="button <?php the_sub_field('text_and_button_color'); ?>" href="<?php the_sub_field('linkforsection'); ?>">Learn More</a>
                </div>
                    
            <?php } ?>

            <?php // Template for Image on the right
            if( get_sub_field('image_on_left_or_right') == 'right' ) { ?>

                <div class="column is-3 is-offset-1 has-text-centered">                        
                        <h3 class="title is-3 <?php the_sub_field('text_and_button_color'); ?>"><a href="<?php the_sub_field('linkforsection'); ?>"><?php the_sub_field('titleforsection'); ?></a></h3>
                        <p><?php the_sub_field('textforsection'); ?></p>
                        <a class="button <?php the_sub_field('text_and_button_color'); ?>" href="<?php the_sub_field('linkforsection'); ?>">Learn More</a>
                </div>

                <div class="column is-8">
                        <?php 
                        $image = get_sub_field('imageforsection');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="alignright" />
                        <?php endif; ?>
                </div>
                
            <?php } ?>

            </div>
        </section>

        <?php

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;

?>

</div>

















<!-- Begin: News Section -->
<section class="section newssection">
    <div class="container">

        <div class="level">
                <h2 class="title is-2 newsspotlights level-left">News Spotlights</h2>
            
            <div class="is-4 seeallnews level-left">
                <a href="<?php echo get_home_url(); ?>/news/">See all news</a>
            </div>
        </div>          

        <div class="columns">

            <div class="column is-8">

                <?php
                $args = array(
                'posts_per_page' => 1,
                'post_type' => array( 'news' ),
                'orderby' => 'date',
                'order' => 'DESC',
                'offset' => 1,
                );
                $loop = new WP_Query( $args ); 
                ?>

                <?php while ( $loop->have_posts() ) : $loop->the_post();?>

                    <div class="columns">
                        <div class="column">
                            <div class="pageparticle">
                                <?php if ( has_post_thumbnail()) : ?><?php the_post_thumbnail(); ?><?php endif; ?>
                            </div>
                        </div>
                        <div class="column">
                            <div class="pageparticle">
                                <h3 class="title is-3"><a href="<?php the_field('article-url'); ?>"><?php echo get_the_title(); ?></a></h3>
                                <p class="sourceanddate"><?php the_field('source_and_date'); ?></p>
                                <p><?php echo excerpt(20); ?></p>
                                <a class="button is-primary" href="<?php the_field('article-url'); ?>">Learn More</a>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
                <?php wp_reset_query(); ?>

            </div>

            <div class="column newssecondcolumn">

                <?php
                $args = array(
                'posts_per_page' => 1,
                'post_type' => array( 'news' ),
                'orderby' => 'date',
                'order' => 'DESC',
                'offset' => 2,
                );
                $loop = new WP_Query( $args ); 
                ?>

                <?php while ( $loop->have_posts() ) : $loop->the_post();?>

                <div class="pageparticle">
                                <h3 class="title is-3"><a href="<?php the_field('article-url'); ?>"><?php echo get_the_title(); ?></a></h3>
                                <p class="sourceanddate"><?php the_field('source_and_date'); ?></p>
                                <p><?php echo excerpt(20); ?></p>
                                <a class="button is-primary" href="<?php the_field('article-url'); ?>">Learn More</a>
                </div>

                <?php endwhile; ?>
                <?php wp_reset_query(); ?>

            </div>

        </div>

    </div>
</section>
<!-- End: News Section -->

























</main><!-- #main -->

<?php
get_footer();
