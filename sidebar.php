<aside id="sidebar" class="widget-area">
    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <?php dynamic_sidebar('sidebar-1'); ?>
    <?php else : ?>
        <p>No widgets found! Add some from the WordPress admin.</p>
    <?php endif; ?>
</aside>