<?php

/**
 * Header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Etechix</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="outer-wrapper">
    <!-- Top Navigation Menu -->

    <div class="header_wrapp">
      <div class="header_top-header">

        <?php if (is_active_sidebar('header-ads')) : ?>
          <?php dynamic_sidebar('header-ads') ?>
        <?php else : ?>
        <?php endif; ?>

        <?php
        get_template_part('templates/topbar', 'topbar');
        ?>

        <div class="header_menu-wrapp">
          <div class="header_main-nav">
            <button type="button" class="header_togg-menu-btn">
              <i class="fa-solid fa-bars"></i>
            </button>

            <?php
            if (!has_custom_logo()) {
              echo '<h1>';
              bloginfo('name');
              echo '</h1>';
            } else {
              if (function_exists('the_custom_logo')) {
                the_custom_logo();
              }
            }
            ?>
          </div>


          <div class="header_secondary-nav">

            <!-- <button type="button" class="header_togg-search-btn">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button> -->

            <div class="cart">
              <a class="cart_btn-cart" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e('View your shopping cart'); ?>">
                <i class="fa-solid fa-cart-shopping"></i>
              </a>
              <a class="cart_count-price" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e('View your shopping cart'); ?>">
                <?php echo sprintf(_n('%d item', '%d items', WC()->cart->get_cart_contents_count()), WC()->cart->get_cart_contents_count()); ?><?php echo WC()->cart->get_cart_total(); ?>
              </a>
            </div>

            <div class="my-account">
              <a class="cart_btn-cart" href="../my-account" title="Mi cuenta">
                <i class="fa-solid fa-user"></i>
              </a>
            </div>


          </div>
        </div>

      </div>
      <!-- Navigation Menu -->

      <?php
      get_template_part('templates/mobile-menu', 'mobile menu')
      ?>

      <div class="toggleable_search-wrapp">
        <div class="toggleable_menu">
          <div class="toggleable_search-close">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <?php if (is_active_sidebar('togg-search-input')) : ?>
            <?php dynamic_sidebar('togg-search-input') ?>
          <?php else : ?>
            <!--Add sidebar-->
          <?php endif; ?>
        </div>
        <div class="toggleable_search-backg-close"></div>
      </div>
    </div>
  </header>