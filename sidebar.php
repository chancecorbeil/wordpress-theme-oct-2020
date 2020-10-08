<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CC_Theme_Sept_2020
 */

?>
<div class="column sidebar">
    
                <div class="pageparticle newssidebarparticle">
                    <?php the_field('news_page_sidebar', 'option'); ?>
                </div>
                
                <div class="pageparticle">
                    <?php
                    $args = array(
                    'posts_per_page' => 1,
                    'post_type' => array( 'news' ),
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'offset' => 0,
                    );
                    $loop = new WP_Query( $args ); 
                    ?>

                    <?php while ( $loop->have_posts() ) : $loop->the_post();?>

                        <p class="subtitle">Related Content</p>
                        <h3 class="title is-3"><?php echo get_the_title(); ?></h3>
                        <p><?php echo excerpt(30); ?></p>
                        <a class="button is-primary" href="<?php echo get_permalink(); ?>">Learn More</a>

                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>

                <div class="pageparticle">
                    <div class="quotefeature">
                        <h3 class="title is-3"><?php the_field('quote_feature', 'option'); ?></h3>
                        <p><?php the_field('quote_feature_signature', 'option'); ?></p>
                    </div>
                </div>

                <div class="pageparticle">
                    <?php
                    $args = array(
                    'posts_per_page' => 1,
                    'post_type' => array( 'post' ),
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'offset' => 1,
                    );
                    $loop = new WP_Query( $args ); 
                    ?>

                    <?php while ( $loop->have_posts() ) : $loop->the_post();?>

                        <p class="subtitle">Bridge Meadows Blog</p>
                        <h3 class="title is-3"><?php echo get_the_title(); ?></h3>
                        <p><?php echo excerpt(30); ?></p>
                        <a class="button is-primary" href="<?php echo get_permalink(); ?>">Learn More</a>

                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>

                <div class="pageparticle ">
                    <div class="socialmediafeature ">
                    <?php the_field('social_media_share', 'option'); ?>
                    </div>
                </div>
                
			</div>
</div>
