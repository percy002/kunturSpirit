<?php

/**
 * Theme header template.
 *
 * @package TailPress
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-cover bg-center'); ?>
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg/textura.webp');">
    <?php do_action('tailpress_site_before'); ?>

    <div id="page" class="min-h-screen flex flex-col">
        <?php do_action('tailpress_header'); ?>

        <header class="container mx-auto py-6 fixed top-0 left-0 right-0 z-50 bg-transparente shadow-md">
            <div class="md:flex md:justify-between md:items-center">
                <div class="">
                    <a href="">
                        <i class="fa-solid fa-bars fa-inverse text-2xl"></i>
                    </a>
                </div>
                <div class="flex justify-between items-center">
                    <div>
                        <?php if (has_custom_logo()): ?>
                            <div class="h-[50px]">
                                <?php the_custom_logo(); ?>

                            </div>
                        <?php endif; ?>
                    </div>

                    <?php if (has_nav_menu('primary')): ?>
                        <div class="md:hidden">
                            <button type="button" aria-label="Toggle navigation" id="primary-menu-toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </button>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- <div id="primary-navigation" class="hidden md:flex md:bg-transparent gap-6 items-center border border-light md:border-none rounded-xl p-4 md:p-0">
                    <nav>
                        <?php if (current_user_can('administrator') && !has_nav_menu('primary')): ?>
                            <a href="<?php echo esc_url(admin_url('nav-menus.php')); ?>" class="text-sm text-zinc-600"><?php esc_html_e('Edit Menus', 'tailpress'); ?></a>
                        <?php else: ?>
                            <?php
                            wp_nav_menu([
                                'container_id' => 'primary-menu',
                                'container_class' => '',
                                'menu_class' => 'md:flex md:-mx-4 [&_a]:!no-underline',
                                'theme_location' => 'primary',
                                'li_class' => 'md:mx-4',
                                'fallback_cb' => false,
                            ]);
                            ?>
                        <?php endif; ?>
                    </nav>

                </div> -->
                <div class="flex gap-5">
                    <div class="flex gap-2.5 text-white">
                        <a href=""><i class="fa-brands fa-facebook text-xl fa-inverse"></i></a>
                        <a href=""><i class="fa-brands fa-instagram text-xl "></i></a>
                        <a href=""><i class="fa-brands fa-tiktok text-xl"></i></a>

                    </div>
                    <div class="">
                        |
                    </div>
                    <div class="flex gap-2.5 items-center">
                        <?php
                        if (function_exists('pll_the_languages')) {
                            pll_the_languages(array(
                                'show_flags' => 1,      // Muestra banderas
                                'show_names' => 0,      // Muestra nombres de idiomas
                                'hide_current' => 0,    // Muestra el idioma actual
                                'dropdown' => 0,         // Muestra como lista, no como dropdown
                                'raw' => 0  // Mostrar HTML listo para usar
                        
                            ));
                        }
                        ?>
                    </div>
                    <div class="">
                        |
                    </div>
                    <div class="">
                        <a href="">
                            <i class="fa-solid fa-user text-xl text-white"></i>
                        </a>
                    </div>

                </div>

            </div>
        </header>

        <div id="content" class="site-content grow">


            <?php do_action('tailpress_content_start'); ?>
            <main>