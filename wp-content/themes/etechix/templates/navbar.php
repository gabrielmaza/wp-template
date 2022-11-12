<?php

/**
 * Main navbar
 */
?>
<?php
wp_nav_menu(array(
    'menu' => 'main-menu',
    'link_before' => '<span class="header_link-span">',
    'link_after' => '</span>',
    'container_class' => 'header_menu',
    'menu_class' => 'header_link',
    'fallback_cb' => false
));
?>