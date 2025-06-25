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
                <nav class="flex flex-col gap-2.5">
                    <!-- MENU DE PAQUETES -->
                    <div class="">
                        <ul class="flex flex-col gap-2.5 px-2.5 text-3xl text-light">
                            <?php
                            $paquetes = get_terms([
                                'taxonomy' => 'paquete',
                                'hide_empty' => false,
                            ]);
                            if (!empty($paquetes) && !is_wp_error($paquetes)):
                                foreach ($paquetes as $paquete):
                                    $link = get_term_link($paquete);
                                    ?>
                                    <li class="flex justify-between items-center text-light hover:text-secondary transition">
                                        <a href="<?php echo esc_url($link); ?>" class="">
                                            <?php echo esc_html($paquete->name); ?>
                                        </a>
                                        <button>›</button>
                                    </li>
                                    <?php
                                endforeach;
                            else:
                                ?>
                                <li class="text-zinc-400 text-sm">No hay paquetes disponibles.</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <hr class="border-t border-zinc-300">
                    <!-- menu de navegación -->
                    <div class="">

                        <?php if (current_user_can('administrator') && !has_nav_menu('primary')): ?>
                            <a href="<?php echo esc_url(admin_url('nav-menus.php')); ?>"
                                class="text-sm text-zinc-600"><?php esc_html_e('Edit Menus', 'tailpress'); ?></a>
                        <?php else: ?>
                            <?php
                            wp_nav_menu([
                                'container_id' => 'primary-menu',
                                'container_class' => '',
                                'menu_class' => 'flex flex-col gap-2.5 px-2.5 text-xl text-light',
                                'theme_location' => 'primary',
                                'li_class' => 'flex justify-between items-center',
                                'fallback_cb' => false,
                            ]);
                            ?>
                        <?php endif; ?>
                    </div>
                    <hr class="border-t border-zinc-300">
                    <!-- INICIO DE SESION -->
                    <div class="flex flex-col gap-2.5 px-2.5">
                        <div class="flex gap-2.5">
                            <a href=""><i class="fa-solid fa-user text-xl text-light"></i></a>
                            <span class="text-2xl">Inicio de sesión</span>
                        </div>
                        <div class="">
                            <a href="" class="bg-primary py-2 px-5 text-white"><span class="text-2xl">Contáctenos</span></a>
                        </div>
                    </div>
                    <!-- REDES SOCIALES -->
                    <div class="flex gap-2.5 text-primary pt-8 px-2.5">
                        <a href=""><i class="fa-brands fa-facebook text-2xl"></i></a>
                        <a href=""><i class="fa-brands fa-instagram text-2xl "></i></a>
                        <a href=""><i class="fa-brands fa-tiktok text-2xl"></i></a>
                    </div>
                </nav>

            </div>
        </div>

    </div>
</div>