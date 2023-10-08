<footer class="site-footer">
            <div class="container">
                <div class="copyright">
                    <div class="p">copyright X - all rights reserved</div>
                </div>
                <nav class="footer-menu">
                    <?php wp_nav_menu(array('theme_location' => 'wp_devs_footer_menu', 'depth' => '1')); ?>
                </nav>
            </div>
        </footer>
    </div>
<?php wp_footer(); ?>
</body>
</html>