<?php

if (is_file(__DIR__ . '/vendor/autoload_packages.php')) {
    require_once __DIR__ . '/vendor/autoload_packages.php';
}
require get_template_directory() . '/inc/helpers.php';
function tailpress(): TailPress\Framework\Theme
{
    return TailPress\Framework\Theme::instance()
        ->assets(
            fn($manager) => $manager
                ->withCompiler(
                    new TailPress\Framework\Assets\ViteCompiler,
                    fn($compiler) => $compiler
                        ->registerAsset('resources/css/app.css')
                        ->registerAsset('resources/js/app.js')
                        ->editorStyleFile('resources/css/editor-style.css')
                )
                ->enqueueAssets()
        )
        ->features(fn($manager) => $manager->add(TailPress\Framework\Features\MenuOptions::class))
        ->menus(fn($manager) => $manager->add('primary', __('Primary Menu', 'tailpress')))
        ->themeSupport(fn($manager) => $manager->add([
            'title-tag',
            'custom-logo',
            'post-thumbnails',
            'align-wide',
            'wp-block-styles',
            'responsive-embeds',
            'html5' => [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            ]
        ]));
}

tailpress();
add_action('after_setup_theme', function() {
    register_nav_menus([
        'primary' => __('Menú Principal', 'text-domain'),
        'footer' => __('Menú de Footer', 'text-domain')
    ]);
}, 5);

function registrar_cadenas_polylang()
{
    pll_register_string('titulo_bienvenida', 'Bienvenidos a nuestra página', 'Diccionario');
    pll_register_string('boton_contacto', 'Contáctanos', 'Diccionario');
    pll_register_string('boton_mas_info', 'Mas información', 'Diccionario');
    pll_register_string('boton_experiencias', 'Ver mas experiencias', 'Diccionario');

    pll_register_string('ver_itinerario', 'Ver Itinerario', 'Tours');
    pll_register_string('reserva', 'Reserva', 'Tours');
    pll_register_string('antes', 'Antes:', 'Tours');
    pll_register_string('desde', 'Desde:', 'Tours');
    pll_register_string('Descripcion_general', 'Descripción General', 'Tours');
}
add_action('init', 'registrar_cadenas_polylang');