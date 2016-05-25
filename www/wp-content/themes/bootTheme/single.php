
<?php get_header(); ?>

<div class="intro-header">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">


                <section>
                    <?php if (have_posts()): while (have_posts()): the_post(); ?>
                        <h1><?php the_title(); ?>
                        </h1>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </section>

            </div>
        </div>
    </div>

</div>


<?php get_footer(); ?>