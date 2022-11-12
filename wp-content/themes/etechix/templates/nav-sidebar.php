<div class="sidebar">
    <div class="sidebar_grid">
        <!-- WIDGETS -->
        <?php if (is_active_sidebar('primary-sidebar')) : ?>
            <?php dynamic_sidebar('primary-sidebar') ?>
        <?php else : ?>
            <!--Add sidebar-->
        <?php endif; ?>
    </div>
</div>