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
                <div class="main_wrapp">
                    <!-- Title -->
                    <div class="post-list_header">
                        <h3 class="post-list_header-title">Featured</h3>
                        <div class="post-list_header-link">
                            <?php next_posts_link('See more'); ?>
                        </div>
                    </div>



                    <!-- Slider -->
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="http://localhost/wp-template/wp-content/uploads/2020/06/960x0-copia-1.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://1.bp.blogspot.com/-2krd0vFWnlE/YAbCMR8vg8I/AAAAAAAAK34/Y2FoaU7f5HQ5xfHoqsI2Z2tY8yd9N4ozwCLcBGAsYHQ/w640/among-us.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://1.bp.blogspot.com/-u_Qi3zyfI9U/X1jk3BH70gI/AAAAAAAAKt8/CZXnjBK-7KQCM0ZsQptEHDluhE0KTNWEQCLcBGAsYHQ/w640/los-6-mejores-juegos-friv5.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>




                </div>
                <div class="main_wrapp">
                    <!-- Title -->
                    <div class="post-list_header">
                        <h3 class="post-list_header-title">Categories</h3>
                        <div class="post-list_header-link">
                            <?php next_posts_link('See more'); ?>
                        </div>
                    </div>
                    <!-- Product categories -->
                    <?php
                    echo
                    do_shortcode('[product_categories]');
                    ?>
                </div>
                <div class="main_wrapp">
                    <!-- Title -->
                    <div class="post-list_header">
                        <h3 class="post-list_header-title">Lastest</h3>
                        <div class="post-list_header-link">
                            <?php next_posts_link('See more'); ?>
                        </div>
                    </div>
                    <!-- Products list -->
                    <?php
                    echo
                    do_shortcode('[products limit="4" columns="4" orderby="id" order="DESC" visibility="visible"]');
                    ?>
                </div>
                <div class="main_wrapp">
                    <!-- Title -->
                    <div class="post-list_header">
                        <h3 class="post-list_header-title">On sale</h3>
                        <div class="post-list_header-link">
                            <?php next_posts_link('See more'); ?>
                        </div>
                    </div>
                    <!-- Products list -->
                    <?php
                    echo
                    do_shortcode('[products limit="3" columns="3" orderby="popularity" class="quick-sale" on_sale="true" ]');
                    ?>
                </div>
                <?php
                //if (have_posts())
                //get_template_part('templates/pager', 'pager');
                ?>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>