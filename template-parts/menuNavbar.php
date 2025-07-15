<?php 

?>

<div id="sideMenu"
    class="fixed top-0 left-0 h-dvh max-w-dvw w-[600px] shadow-lg transform -translate-x-full transition-transform duration-300 z-50 ">
    <div class="relative">
        <div class="p-2.5 lg:p-12  flex flex-col h-dvh justify-start z-50"
            style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg/textura.webp') lightgray 50% / cover no-repeat;">
            <div class="w-full flex justify-end">
                <button id="closeMenu" class="text-3xl text-secondary">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="flex flex-col gap-2.5">
                <div class="w-[160px] lg:w-[240px]">
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
                                        $tours = get_posts([
                                            'post_type' => 'tour',
                                            'tax_query' => [
                                                [
                                                    'taxonomy' => 'paquete',
                                                    'field' => 'term_id',
                                                    'terms' => $paquete->term_id,
                                                ],
                                            ],
                                        ]);

                                        $toursSubMenu = [];
                                        foreach ($tours as $tour) {
                                            $toursSubMenu[] = [
                                                'nombre' => get_the_title($tour->ID),
                                                'enlace' => get_permalink($tour->ID),
                                            ];
                                        }

                                        // Obtener la imagen asociada a la taxonomía
                                        $img_paquete = get_field('imagen', 'paquete_' . $paquete->term_id);
                                        $img_url = '';
                                        if (is_array($img_paquete) && isset($img_paquete['url'])) {
                                            $img_url = $img_paquete['url'];
                                        } elseif (is_string($img_paquete)) {
                                            $img_url = $img_paquete;
                                        }

                                        $datosPaquete = [
                                            'link' => $link,
                                            'id' => $paquete->term_id,
                                            'nombre' => $paquete->name,
                                            'descripcion' => $paquete->description,
                                            'tour' => $toursSubMenu,
                                            'img_url' => $img_url,
                                        ];
                                        ?>
                                        <li class="flex flex-col">
                                            <button
                                                class="toggle-tours flex justify-between items-center text-light hover:text-secondary transition"
                                                onclick="abrirSubmenu(<?php echo esc_attr(json_encode($datosPaquete)); ?>)"
                                                data-paquete="<?php echo esc_attr($paquete->term_id); ?>">
                                                <span class="text-2xl">
                                                    <?php echo esc_html($paquete->name); ?>
                                                </span>
                                                <span class="text-2xl hidden md:block"><i
                                                        class="fa-solid fa-chevron-right"></i></span>
                                                <span class="text-2xl md:hidden"><i class="fa-solid fa-chevron-down"></i></span>

                                            </button>
                                            <div class="block lg:hidden">
                                                <div class="tours-list hidden mt-2 pl-6 flex-col gap-2.5"
                                                    id="tours-<?php echo esc_attr($paquete->term_id); ?>">
                                                    <?php if ($tours):
                                                        foreach ($tours as $tour):
                                                            ?>
                                                            <a href="<?php echo get_permalink($tour->ID); ?>"
                                                                class="block text-base text-light hover:text-secondary py-1">
                                                                <?php echo esc_html($tour->post_title); ?>
                                                            </a>
                                                            <?php
                                                        endforeach;
                                                    else:
                                                        echo '<span class="text-base text-light">No hay tours en este paquete.</span>';
                                                    endif;
                                                    ?>
                                                    <hr class="border-t-2 border-light w-1/2 py-1">
                                                    <!-- MOSTRAR TODO -->
                                                    <a href="" class="cursor-pointer" id="verTodosTours">
                                                        <span class="text-xl">Ver todos</span>
                                                    </a>
                                                </div>
                                            </div>
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
                            
                            <div class="">
                                <a href="<?= get_translated_url_by_slug('contacto') ?>" class="bg-primary py-2 px-5 text-white"><span
                                        class="text-2xl">Contáctenos</span></a>
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

        <?php get_template_part('template-parts/subMenu'); ?>
    </div>
</div>