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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- photoswié -->
    <!-- CSS de PhotoSwipe -->
    <link rel="stylesheet" href="https://unpkg.com/photoswipe@5/dist/photoswipe.css">

    <!-- JS de PhotoSwipe y su lightbox wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.4.4/umd/photoswipe-lightbox.umd.min.js"
        integrity="sha512-D16CBrIrVF48W0Ou0ca3D65JFo/HaEAjTugBXeWS/JH+1KNu54ZOtHPccxJ7PQ44rTItUT6DSI6xNL+U34SuuQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.4.4/umd/photoswipe.umd.min.js"
        integrity="sha512-BXwwGU7zCXVgpT2jpXnTbioT9q1Byf7NEXVxovTZPlNvelL2I/4LjOaoiB2a19L+g5za8RbkoJFH4fMPQcjFFw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-cover bg-center'); ?>
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg/textura.webp');">
    <?php do_action('tailpress_site_before'); ?>

    <div id="page" class="min-h-screen flex flex-col">
        <?php do_action('tailpress_header'); ?>

        <header class="py-6 fixed top-0 left-0 right-0 z-50 bg-transparente md:pr-[100px] md:pl-[100px] ">
            <div class="container flex flex-row-reverse sm:flex-row justify-between items-center">
                <div class="flex gap-2.5 items-center">
                    <div class="sm:hidden">
                        <div class="flex gap-2.5 items-center">
                            <?php
                            if (function_exists('pll_the_languages')):
                                $langs = pll_the_languages([
                                    'show_flags' => 1,
                                    'show_names' => 0,
                                    'hide_current' => 0,
                                    'dropdown' => 1,
                                    'raw' => 1
                                ]);

                                if ($langs): ?>
                                    <div class="relative inline-block">
                                        <details class="group">
                                            <summary class="cursor-pointer flex items-center gap-1">
                                                <?php
                                                foreach ($langs as $lang) {
                                                    if ($lang['current_lang']) {
                                                        echo $lang['flag'];
                                                        break;
                                                    }
                                                }
                                                ?>
                                                <i
                                                    class="fa-solid fa-chevron-down text-sm ml-1 text-white group-open:rotate-180 transition-transform"></i>
                                            </summary>
                                            <ul class="absolute left-0 mt-2 bg-transparent shadow-lg z-50 w-fit">
                                                <?php foreach ($langs as $lang): ?>
                                                    <?php if (!$lang['current_lang']): ?>
                                                        <li>
                                                            <a href="<?php echo esc_url($lang['url']); ?>"
                                                                class="flex items-center gap-2 pr-2 py-1 ">
                                                                <?php echo $lang['flag']; ?>
                                                            </a>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </ul>
                                        </details>
                                    </div>

                            <?php endif;
                            endif;
                            ?>

                        </div>
                    </div>
                    <button id="openMenu">
                        <i class="fa-solid fa-bars fa-inverse text-2xl"></i>
                    </button>
                </div>
                <div class="flex justify-between items-center">
                    <div>
                        <?php if (has_custom_logo()): ?>
                            <div class="h-6 md:h-[50px]">
                                <?php the_custom_logo(); ?>

                            </div>
                        <?php endif; ?>
                    </div>

                </div>


                <div class="gap-5 hidden sm:flex">
                    <div class="flex gap-2.5 text-white">
                        <a href="https://www.facebook.com/KunturSpiritTravel"><i class="fa-brands fa-facebook text-xl fa-inverse"></i></a>
                        <a href="https://www.instagram.com/kuntur_spirit/"><i class="fa-brands fa-instagram text-xl "></i></a>
                        <a href="https://www.tiktok.com/@kunturspirit"><i class="fa-brands fa-tiktok text-xl"></i></a>
                    </div>
                    <div class="text-light">
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


                </div>

            </div>
            <?php get_template_part('template-parts/menuNavbar'); ?>
            <div id="sideMenuBackdrop" class="fixed inset-0 bg-black opacity-40 z-40 hidden"></div>
        </header>

        <div id="content" class="site-content grow">


            <?php do_action('tailpress_content_start'); ?>
            <main>