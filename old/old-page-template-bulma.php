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
    <nav class="tabs is-boxed is-fullwidth">
      <div class="container">
        <ul>
          <li><a>Overview</a></li>
          <li><a>Modifiers</a></li>
          <li><a>Grid</a></li>
          <li><a>Elements</a></li>
          <li><a>Components</a></li>
          <li><a>Layout</a></li>
        </ul>
      </div>
    </nav>
  </div>
</section>
        <!-- Begin: Bulma Hero -->



















<!-- Begin: Main Content Area and Sidebar Section -->
<section class="section">
    <div class="container">

        <div class="columns">

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

                        <div class="pageparticle">
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

            <div class="column sidebar">
                <div class="pageparticle">
                    <p class="subtitle">Related Content</p>
                    <h3 class="title is-3">Headline for another article or page</h3>
                    <p>Egestas erat imperdiet sed euismod nisi porta lorem mollis. Pulvinar mattis nunc sed blandit libero volutpat sed cras ornare.</p>
                    <button class="button is-primary">Learn More</button>
                </div>

                <div class="pageparticle">
                    <div class="quotefeature">
                        <h3 class="title is-3"><?php the_field('quote_feature', 'option'); ?></h3>
                        <p><?php the_field('quote_feature_signature', 'option'); ?></p>
                    </div>
                </div>

                <div class="pageparticle">
                    <p class="subtitle">Related Content</p>
                    <h3 class="title is-3">Headline for another article or page</h3>
                    <p>Lore magna aliqua. Turpis tincidunt id aliquet risus. Eget duis at tellus at. At erat pellentesque adipiscing commodo elit at.</p>
                    <button class="button is-primary">Learn More</button>
                </div>

                <div class="pageparticle ">
                    <div class="socialmediafeature ">
                    <?php the_field('social_media_share', 'option'); ?>
                    </div>
                </div>
                
            </div>

        </div>

    </div>
</section>
<!-- End: Main Content Area and Sidebar Section -->





















<!-- Begin: Main Content Area and Sidebar Section -->
<section class="section">
    <div class="container">

        <div class="columns">

            <div class="column is-9 maincontentarea">

                <div class="pageparticle">
                    <p class="subtitle">Our Locations</p>
                    <h2 class="title is-2">Bridge Meadows is coming to a neighborhood near you</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Turpis tincidunt id aliquet risus. Pellentesque eu tincidunt tortor aliquam nulla facilisi cras. Placerat vestibulum lectus mauris ultrices eros in cursus. Eget duis at tellus at. At erat pellentesque adipiscing commodo elit at. Mi eget mauris pharetra et ultrices neque ornare. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Egestas erat imperdiet sed euismod nisi porta lorem mollis. Pulvinar mattis nunc sed blandit libero volutpat sed cras ornare.</p>
                    <p>Cursus metus aliquam eleifend mi in. Rutrum tellus pellentesque eu tincidunt tortor aliquam. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in. Cum sociis natoque penatibus et. Nisi vitae suscipit tellus mauris a diam maecenas. Tellus at urna condimentum mattis pellentesque id nibh tortor.</p>
                    <hr>
                </div>

                <div class="pageparticle">
                    <p class="subtitle">Equity</p>
                    <h2 class="title is-2">We know that Equality and Equity aren't the same thing, right?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Turpis tincidunt id aliquet risus. Pellentesque eu tincidunt tortor aliquam nulla facilisi cras. Placerat vestibulum lectus mauris ultrices eros in cursus. Eget duis at tellus at. At erat pellentesque adipiscing commodo elit at. Mi eget mauris pharetra et ultrices neque ornare. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Egestas erat imperdiet sed euismod nisi porta lorem mollis. Pulvinar mattis nunc sed blandit libero volutpat sed cras ornare.</p>
                    <p>Cursus metus aliquam eleifend mi in. Rutrum tellus pellentesque eu tincidunt tortor aliquam. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in. Cum sociis natoque penatibus et. Nisi vitae suscipit tellus mauris a diam maecenas. Tellus at urna condimentum mattis pellentesque id nibh tortor.</p>
                    <hr>
                </div>

                <div class="pageparticle">
                    <p class="subtitle">Our Locations</p>
                    <h2 class="title is-2">Bridge Meadows is coming to a neighborhood near you</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Turpis tincidunt id aliquet risus. Pellentesque eu tincidunt tortor aliquam nulla facilisi cras. Placerat vestibulum lectus mauris ultrices eros in cursus. Eget duis at tellus at. At erat pellentesque adipiscing commodo elit at. Mi eget mauris pharetra et ultrices neque ornare. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Egestas erat imperdiet sed euismod nisi porta lorem mollis. Pulvinar mattis nunc sed blandit libero volutpat sed cras ornare.</p>
                    <p>Cursus metus aliquam eleifend mi in. Rutrum tellus pellentesque eu tincidunt tortor aliquam. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in. Cum sociis natoque penatibus et. Nisi vitae suscipit tellus mauris a diam maecenas. Tellus at urna condimentum mattis pellentesque id nibh tortor.</p>
                    <hr>
                </div>

            </div>

            <div class="column sidebar">
                <div class="pageparticle">
                    <p class="subtitle">Related Content</p>
                    <h3 class="title is-3">Headline for another article or page</h3>
                    <p>Egestas erat imperdiet sed euismod nisi porta lorem mollis. Pulvinar mattis nunc sed blandit libero volutpat sed cras ornare.</p>
                    <button class="button is-primary">Learn More</button>
                </div>

                <div class="pageparticle">
                    <div class="quotefeature">
                        <h3 class="title is-3">There's always a purpose in life. When the courts asked if these girels could come live with me, I knew they were my purpose."</h3>
                        <p>-Reba, Bridge Meadows Adoptive parent</p>
                    </div>
                </div>

                <div class="pageparticle">
                    <p class="subtitle">Related Content</p>
                    <h3 class="title is-3">Headline for another article or page</h3>
                    <p>Lore magna aliqua. Turpis tincidunt id aliquet risus. Eget duis at tellus at. At erat pellentesque adipiscing commodo elit at.</p>
                    <button class="button is-primary">Learn More</button>
                </div>

                <div class="pageparticle ">
                    <div class="socialmediafeature ">
                        <h3 class="title is-3">Follow Bridge Meadows on social media!</h3>
                        <nav class="level">
                            <div class="level-item has-text-centered">
                                <div>
                                <a href="http://http://bridgemeadowsdev.org/"><img class="aligncenter size-full socialicon" src="http://bridgemeadowsdev.org/wp-content/uploads/2020/09/instagram.png" alt="" width="29" height="28" /></a>
                                </div>
                            </div>
                            <div class="level-item has-text-centered">
                                <div>
                                <a href="http://http://bridgemeadowsdev.org/"><img class="aligncenter size-full socialicon" src="http://bridgemeadowsdev.org/wp-content/uploads/2020/09/facebook.png" alt="" width="15" height="30" /></a>
                                </div>
                            </div>
                            <div class="level-item has-text-centered">
                                <div>
                                <a href="http://http://bridgemeadowsdev.org/"><img class="aligncenter size-full socialicon" src="http://bridgemeadowsdev.org/wp-content/uploads/2020/09/twitter.png" alt="" width="29" height="24" /></a>
                                </div>
                            </div>
                            <div class="level-item has-text-centered">
                                <div>
                                <a href="http://http://bridgemeadowsdev.org/"><img class="aligncenter size-full socialicon" src="http://bridgemeadowsdev.org/wp-content/uploads/2020/09/linkedin.png" alt="" width="29" height="28" /></a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                
            </div>

        </div>

    </div>
</section>
<!-- End: Main Content Area and Sidebar Section -->


















		<!-- Begin: Example Bulma Section -->
        <section class="section">
    <div class="container">
      <h1 class="title"><?php echo get_the_title(); ?></h1>
      <h2 class="subtitle">
        A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading
      </h2>
    </div>

    <div class="container">
        <?php echo the_content(); ?>
    </div>
    
</section>
        <!-- End: Example Bulma Section -->


		<!-- Begin: Example Bulma Section -->
<section class="section">
    <div class="container">
      <h1 class="title">Section and Container</h1>
      <h2 class="subtitle">
        A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading
      </h2>
    </div>
</section>
        <!-- End: Example Bulma Section -->


        <!-- Begin: Example Bulma Section -->
<section class="section">
    <div class="container">
      <h1 class="title">Section and 3 Container</h1>
      <h2 class="subtitle">A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading</h2>
      <p>A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading</p>
    </div>
    <div class="container">
      <p>A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading</p>
    </div>
    <div class="container">
      <p>A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading</p>
      <blockquote>This is a Blockquote.</blockquote>
    </div>
</section>
        <!-- End: Example Bulma Section -->


        <!-- Begin: Example Text Elements -->
        <section class="section">
    <div class="container">
        <h1 class="title">Title</h1>
        <h2 class="subtitle">Subtitle</h2>

        <h1 class="title is-1">Title 1</h1>
        <h2 class="title is-2">Title 2</h2>
        <h3 class="title is-3">Title 3</h3>
        <h4 class="title is-4">Title 4</h4>
        <h5 class="title is-5">Title 5</h5>
        <h6 class="title is-6">Title 6</h6>

        <div class="buttons">
            <button class="button is-primary">Primary</button>
            <button class="button is-link">Link</button>
        </div>
    </div>
</section>
        <!-- End: Example Text Elements -->


        <!-- Begin: Bulma Hero -->
<section class="hero is-primary is-medium">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        About Us
      </h1>
    </div>
  </div>
</section>
        <!-- Begin: Bulma Hero -->








<!-- Begin: columns example -->
<section class="section">
    <div class="container">

        <div class="columns">
        <div class="column">
                <p class="subtitle">Related Content</p>
                <h2 class="title is-2">Play Another Knee Slapper</h2>
                <p>Lore magna aliqua. Turpis tincidunt id aliquet risus. Pellentesque eu tincidunt tortor aliquam nulla facilisi cras. Placerat vestibulum lectuset.</p>
                <button class="button is-primary">Learn More</button>
            </div>
            <div class="column">
                <p class="subtitle">Related Content</p>
                <h2 class="title is-2">Play Another Knee Slapper</h2>
                <p>Lore magna aliqua. Turpis tincidunt id aliquet risus. Pellentesque eu tincidunt tortor aliquam nulla facilisi cras. Placerat vestibulum lectuset.</p>
                <button class="button is-primary">Learn More</button>
            </div>
        </div>

        <div class="columns">
            <div class="column">
                <p class="subtitle">Related Content</p>
                <h4 class="title is-4">Headline for article</h3>
                <p>Lore magna aliqua. Turpis tincidunt id aliquet risus. Pellentesque eu tincidunt.</p>
                <button class="button is-primary">Learn More</button>
            </div>
            <div class="column">
                <p class="subtitle">Related Content</p>
                <h4 class="title is-4">Headline for article</h3>
                <p>Lore magna aliqua. Turpis tincidunt id aliquet risus. Pellentesque eu tincidunt.</p>
                <button class="button is-primary">Learn More</button>
            </div>
            <div class="column">
                <p class="subtitle">Related Content</p>
                <h4 class="title is-4">Headline for article</h3>
                <p>Lore magna aliqua. Turpis tincidunt id aliquet risus. Pellentesque eu tincidunt.</p>
                <button class="button is-primary">Learn More</button>
            </div>
            <div class="column">
                <p class="subtitle">Related Content</p>
                <h4 class="title is-4">Headline for article</h3>
                <p>Lore magna aliqua. Turpis tincidunt id aliquet risus. Pellentesque eu tincidunt.</p>
                <button class="button is-primary">Learn More</button>
            </div>
        </div>

        <div class="columns">
            <div class="column">
                <p class="subtitle">Animal Shoes</p>
                <h4 class="title is-4">Weasel exchange</h3>
                <p>Lore magna aliqua. Turpis tincidunt id aliquet risus. Pellentesque eu tincidunt tortor aliquam nulla faclum lectus mauris ultrices eros in cursus.</p>
                <button class="button is-primary">Learn More</button>
            </div>
            <div class="column">
                <p class="subtitle">Animal Shoes</p>
                <h4 class="title is-4">Weasel exchange</h3>
                <p>Lore magna aliqua. Turpis tincidunt id aliquet risus. Pellentesque eu tincidunt tortor aliquam nulla faclum lectus mauris ultrices eros in cursus.</p>
                <button class="button is-primary">Learn More</button>
            </div>
            <div class="column">
                <p class="subtitle">Animal Shoes</p>
                <h4 class="title is-4">Weasel exchange</h3>
                <p>Lore magna aliqua. Turpis tincidunt id aliquet risus. Pellentesque eu tincidunt tortor aliquam nulla faclum lectus mauris ultrices eros in cursus.</p>
                <button class="button is-primary">Learn More</button>
            </div>
        </div>

        <div class="columns">
            <div class="box">
                <div class="column">
                    <p class="subtitle">Animal Shoes</p>
                    <h4 class="title is-4">Weasel exchange</h3>
                    <p>Lore magna aliqua. Turpis tincidunt id aliquet risus. Pellentesque eu tincidunt tortor aliquam nulla faclum lectus mauris ultrices eros in cursus.</p>
                    <button class="button is-primary">Learn More</button>
                </div>
            </div>
            <div class="box">
                <div class="column">
                    <p class="subtitle">Animal Shoes</p>
                    <h4 class="title is-4">Weasel exchange</h3>
                    <p>Lore magna aliqua. Turpis tincidunt id aliquet risus. Pellentesque eu tincidunt tortor aliquam nulla faclum lectus mauris ultrices eros in cursus.</p>
                    <button class="button is-primary">Learn More</button>
                </div>
            </div>
            <div class="box">
                <div class="column">
                    <p class="subtitle">Animal Shoes</p>
                    <h4 class="title is-4">Weasel exchange</h3>
                    <p>Lore magna aliqua. Turpis tincidunt id aliquet risus. Pellentesque eu tincidunt tortor aliquam nulla faclum lectus mauris ultrices eros in cursus.</p>
                    <button class="button is-primary">Learn More</button>
                </div>
            </div>
        </div>


    </div>
</section>
<!-- End: columns example -->







<!-- Begin: 9 and 3 grid Bulma Section -->
<section class="section">
    <div class="container">

        <div class="columns">
            <div class="column is-9">
                <p class="subtitle">Our Locations</p>
                <h2 class="title is-2">Bridge Meadows is coming to a neighborhood near you</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Turpis tincidunt id aliquet risus. Pellentesque eu tincidunt tortor aliquam nulla facilisi cras. Placerat vestibulum lectus mauris ultrices eros in cursus. Eget duis at tellus at. At erat pellentesque adipiscing commodo elit at. Mi eget mauris pharetra et ultrices neque ornare. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Egestas erat imperdiet sed euismod nisi porta lorem mollis. Pulvinar mattis nunc sed blandit libero volutpat sed cras ornare.</p>
                <p>Cursus metus aliquam eleifend mi in. Rutrum tellus pellentesque eu tincidunt tortor aliquam. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in. Cum sociis natoque penatibus et. Nisi vitae suscipit tellus mauris a diam maecenas. Tellus at urna condimentum mattis pellentesque id nibh tortor.</p>
                <hr>
            </div>
            <div class="column">
                <p class="subtitle">Related Content</p>
                <h2 class="title is-2">Headline for another article or page</h2>
                <p>Lore magna aliqua. Turpis tincidunt id aliquet risus. Pellentesque eu tincidunt tortor aliquam nulla facilisi cras. Placerat vestibulum lectus mauris ultrices eros in cursus. Eget duis at tellus at. At erat pellentesque adipiscing commodo elit at. Mi eget mauris pharetra et ultrices neque ornare. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Egestas erat imperdiet sed euismod nisi porta lorem mollis. Pulvinar mattis nunc sed blandit libero volutpat sed cras ornare.</p>
                <button class="button is-primary">Learn More</button>
            </div>
        </div>

    </div>
</section>
<!-- End: 9 and 3 grid Example Bulma Section -->









</main><!-- #main -->

<?php
get_footer();
