<div class="sidebar">
    <div class="sidebar_grid">
        <?php if (is_active_sidebar('shop-sidebar-header')) : ?>
            <?php dynamic_sidebar('shop-sidebar-header') ?>
        <?php else : ?>
            <!--Add sidebar-->
        <?php endif; ?>
        <!-- WIDGETS -->
        <?php if (is_active_sidebar('shop-sidebar')) : ?>
            <?php dynamic_sidebar('shop-sidebar') ?>
        <?php else : ?>
            <!--Add sidebar-->
        <?php endif; ?>
    </div>
</div>