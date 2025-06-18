<div id="sideMenu"
    class="fixed top-0 left-0 h-full w-[600px] shadow-lg transform -translate-x-full transition-transform duration-300 z-50 p-12"
    style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg/textura.webp') lightgray 50% / cover no-repeat;">
    <div class="pl-8 flex flex-col h-full justify-between">
        <div class="w-full flex justify-end">
            <button id="closeMenu" class="text-3xl text-secondary">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="flex flex-col gap-2.5">
            <div class="pb-8 w-[320px]">
                <img src='<?php echo get_template_directory_uri(); ?>/assets/images/logos/logo_color.png'
                    alt="logo kuntur spirit">
            </div>
            <div id="primary-navigation">
                <nav>
                    <?php if (current_user_can('administrator') && !has_nav_menu('primary')): ?>
                        <a href="<?php echo esc_url(admin_url('nav-menus.php')); ?>"
                            class="text-sm text-zinc-600"><?php esc_html_e('Edit Menus', 'tailpress'); ?></a>
                    <?php else: ?>
                        <?php
                        wp_nav_menu([
                            'container_id' => 'primary-menu',
                            'container_class' => '',
                            'menu_class' => 'flex flex-col gap-2.5 px-2.5 text-3xl text-light',
                            'theme_location' => 'primary',
                            'li_class' => 'flex justify-between items-center',
                            'fallback_cb' => false,
                        ]);
                        ?>
                    <?php endif; ?>
                </nav>

            </div>
        </div>

    </div>
</div>