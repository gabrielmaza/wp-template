<!-- Header -->
<?php get_header(); ?>

<div class="outer-wrapper">
    <div class="content_wrapp">
        <div class="content_grid">
            <!-- Sidebar -->
            <?php
            get_template_part('templates/shop-sidebar', 'shop-sidebar');
            ?>
            <div class="main_wrapp">
                <?php if (have_posts()) : while (have_posts()) : the_post() ?>

                        <!-- POST TITLE -->
                        <h1 class="post_title">
                            <?php the_title(); ?>
                        </h1>
                        <!-- POST BODY -->
                        <div class="post_body">

                            <?php the_content(); ?>

                        </div>
                        <!-- POST BODY END -->
                <?php endwhile;
                endif; ?>
            </div>

        </div>
    </div>

    <?php get_footer(); ?>