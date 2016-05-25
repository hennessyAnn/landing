<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 24.05.2016
 * Time: 19:42
 */
?>


<?php get_header(); ?>

<div class="intro-header">

                    <?php if (have_posts()): while (have_posts()): the_post(); ?>

                        <div class="container">
                            <div class="row">

                            <?php the_content(); ?>

                            </div>
                        </div>

                    <?php endwhile; endif; ?>

    
</div>


<?php get_footer(); ?>
