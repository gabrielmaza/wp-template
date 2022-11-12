<?php

/**
 * Blog footer
 */
?>
<footer class="footer_wrapp">

  <?php if (is_active_sidebar('top-social')) : ?>
    <?php dynamic_sidebar('top-social'); ?>
  <?php endif; ?>

  <?php
  wp_nav_menu(array(
    'menu' => 'footer-menu',
    'container_class' => 'footer_menu',
    'menu_class' => 'footer_menu-link',
    'fallback_cb' => false
  ));
  ?>

  <?php if (is_active_sidebar('footer-copyright')) : ?>
    <?php dynamic_sidebar('footer-copyright') ?>
  <?php else : ?>
  <?php endif; ?>
  <!-- <div class="footer_menu">
    <a class="footer_menu-link" href="/">Inicio</a>
    <a class="footer_menu-link" href="/">
      Política De Privacidad
    </a>
    <a class="footer_menu-link" href="/contact">
      Contacto
    </a>
  </div> -->
</footer>
</div>
<?php wp_footer(); ?>
<!--Emailling-->
<script type="text/javascript">
  (function($) {
    window.fnames = new Array();
    window.ftypes = new Array();
    fnames[0] = 'EMAIL';
    ftypes[0] = 'email';
  }(jQuery));
  var $mcj = jQuery.noConflict(true);
</script>
<!--Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!--Bootstrap tooltips init-->
<!-- <script>
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script> -->
</body>

</html>