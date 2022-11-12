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
                <div class="query-message">
                    <span class="query-message_info success">Mostrando entradas en la categoría
                    </span>
                    <?php the_category() ?>
                </div>
                <div class="main_wrapp">
                    <!-- Post list -->
                    <?php if (have_posts()) : while (have_posts()) : the_post();
                            get_template_part('templates/posts', 'posts');
                        endwhile;
                    endif; ?>
                </div>
                <!-- Pager -->
                <?php if (have_posts())
                    get_template_part('templates/pager', 'pager');
                ?>
            </div>

        </div>
    </div>

    <?php get_footer(); ?>