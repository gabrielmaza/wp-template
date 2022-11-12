<!-- Header -->
<?php get_header(); ?>

<div class="outer-wrapper">
    <div class="content_wrapp">
        <div class="content_grid">
            <div class="main_wrapp">
                <div class="query-message">
                    <span class="query-message_info success">Mostrando entradas con la etiqueta
                    </span>
                    <?php printf(__('<span class="query-message_tag">%s</span>'), single_cat_title('', false)) ?>
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
            <!-- Sidebar -->
            <?php
            get_template_part('templates/nav-sidebar', 'nav-sidebar');
            ?>

        </div>
    </div>

    <?php get_footer(); ?>