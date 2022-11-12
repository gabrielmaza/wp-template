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
        <div class="post-list_header">
          <h3 class="post-list_header-title">Entradas recientes</h3>
          <div class="post-list_header-link">
            <?php next_posts_link('Ver más'); ?>
          </div>
        </div>
        <div class="main_wrapp">
          <!-- Post list -->
          
          <?php
          //if (have_posts()) : while (have_posts()) : the_post();
          //get_template_part('templates/posts', 'posts');
          //endwhile;
          //endif; 
          ?>
        </div>
        <!-- Pager -->
        <?php
        //if (have_posts())
        //get_template_part('templates/pager', 'pager');
        ?>
      </div>      
    </div>
  </div>
  <?php get_footer(); ?>