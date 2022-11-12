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
                <!-- BREADCRUMB -->
                <nav class="breadcrumb">
                    <a class="breadcrumb_link" href="/">Página Principal</a>
                    <em class="breadcrumb_delimiter"></em>
                    <a class="breadcrumb_link" href="#">Gaming</a>
                    <em class="breadcrumb_delimiter"></em>
                    <span class="breadcrumb_current">Armar PC Gaming Parte 4: Ensamblando la placa madre</span>
                </nav>


                <?php if (have_posts()) : while (have_posts()) : the_post() ?>

                        <!-- POST TITLE -->
                        <h1 class="post_title">
                            <?php the_title(); ?>
                        </h1>
                        <!-- POST META -->
                        <div class="post_meta">
                            <span class="post_meta-author">
                                <a href="#" target="_blank" title="Blog author">
                                    <?php the_author(); ?>
                                </a>
                            </span>
                        </div>
                        <!-- POST BODY -->
                        <div class="post_body">

                            <?php the_content(); ?>

                        </div>
                        <!-- POST BODY END -->
                        <!-- POST FOOTER -->
                        <div class="post-footer">
                            <div class="post-footer_labels">
                                <?php the_tags('Etiquetas', ''); ?>
                            </div>
                            <div class="post-footer_share">
                                <div class="post-footer_share-links">
                                    <a class="link facebook" href="https://www.facebook.com/sharer.php?u= + data:post.url" rel="nofollow"><span>Compartir en Facebook</span></a>
                                    <a class="link twitter" href="#" rel="nofollow"><span>Twitter</span></a>
                                    <a class="link pinterest" href="#" rel="nofollow">Pinterest</a>
                                    <a class="link linkedin" href="#" rel="nofollow">Linkedin</a>
                                    <a class="link whatsapp" href="#" rel="nofollow" target="_blank">whatsapp</a>
                                    <a class="link email" href="#" rel="nofollow">Email</a>
                                </div>
                            </div>
                        </div>
                        <!-- POST FOOTER END -->
                <?php endwhile;
                endif; ?>
            </div>

        </div>
    </div>

    <?php get_footer(); ?>