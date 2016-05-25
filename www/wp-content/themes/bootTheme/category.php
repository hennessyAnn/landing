<?php get_header(); ?>


    <div class="intro-header">

        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <?php

                    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                    $query_args = array(
                        'post_type' => 'post',
                        'category_name' => 'catalog',
                        'posts_per_page' => 2,
                        'paged' => $paged
                    );

                    $the_query = new WP_Query( $query_args );
                    ?>

                    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
                        <article>
                            <h1><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h1>
                            <div class="excerpt">
                                <?php the_content(); ?>
                            </div>
                        </article>
                    <?php endwhile; ?>

                    <?php endif; ?>


                    <?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
                        <nav class="prev-next-posts">

                            <?php
                            $GLOBALS['wp_query'] = $the_query;
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous', 'twentyfifteen' ),
                                'next_text'          => __( 'Next', 'twentyfifteen' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
                            ) );
                            ?>
                        </nav>
                    <?php } else {?>

                        <article>
                            <h1>Sorry...</h1>
                            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                        </article>
                    <?php } ?>


                </div>
            </div>
        </div>


    </div>


<?php get_footer(); ?>