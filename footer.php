        </main>
        <footer class="pl-8 pr-4 mt-8">
            <div class="items-center justify-between gap-4 py-2 min-h-12 md:flex">
                <nav class="flex items-center">
                <?php
                wp_nav_menu([
                'theme_location' => 'footer',
                'container' => false,
                'menu_class' => 'md:flex gap-1',
                'fallback_cb' => false,
                ]);
                ?>
                </nav>
                <div class="items-center gap-1 leading-snug md:flex">
                    <a class="btn btn-ghost btn-xs" href="tel:+493012076659">Phone: <?php echo antispambot('+49(0)30-12076659'); ?></a>
                    <a class="btn btn-ghost btn-xs" href="mailto:<?php echo antispambot('mail@woerk.work'); ?>">Email: <?php echo antispambot('mail@woerk.work'); ?></a>
                </div>
            </div>
        </footer>
    </div>
<?php wp_footer(); ?>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        if (window.Alpine) Alpine.start();
    });
</script>
</body>

</html>