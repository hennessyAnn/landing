<?php

/*

Template Name: Landing2

*/

global $themename;

global $shortname;

get_header();

?>
    <link type="text/css" rel="stylesheet" href="http://softsprint.net/landing/landing.css" />

    <div>

        <!-- Content -->

        <div class="land">

            Трооооллллоолллоооо

            <?php if(have_posts()) : ?>

                <?php while(have_posts()) : the_post(); ?>

                    <div class="post" id="post-<?php the_ID(); ?>">



                        <div class="entry">

                            <?php the_content(); ?>

                            <?php wp_link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

                            <?php edit_post_link('Edit', '<p>', '</p>'); ?>

                        </div>

                    </div>

                <?php endwhile; ?>

            <?php else :  ?>

                <div class="post">

                </div>

            <?php endif; ?>

            <div class="clear"></div>

        </div>

        <div class="clear"></div>

    </div>

    <!-- content -->

<?php get_footer(); ?>