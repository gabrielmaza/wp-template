<?php

/**
 * Top navbar
 */
?>
<div class="top-bar">
  <div class="top-bar_wrapp">
    <?php
    wp_nav_menu(array(
      'menu' => 'top-menu',
      'container_class' => 'top-bar_nav',
      'menu_class' => 'top-bar_link-wrapp',
      'fallback_cb' => false
    ));
    ?>

    <div class="top-bar_secundary-nav">
      <div class="top-bar_info-group">
        <i class="fa-solid fa-life-ring"></i>
        <a href="mailto:support@etechix.com" title="Etechix email">support@etechix.com</a>
      </div>
    </div>
  </div>
</div>