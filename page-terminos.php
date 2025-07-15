<?php
/* 
Template Name: Pagina Terminos y Condiciones y Politicas
*/
get_header();

$infoHeroTour = array(
    'imagen_url' => get_template_directory_uri() . "/assets/images/portadas/nevado.avif",
    'title' => ' ',
    'heroType' => 'layout',
);
?>

<!-- Tu contenido para la página Nosotros aquí -->
<?php get_template_part('template-parts/hero', null, $infoHeroTour); ?>
<section>
    <div class="container">
        <h1><?= get_the_title() ?></h1>
        <div class="lg:px-12">
            <div class="flex flex-col gap-2.5">
                <?= get_the_content() ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>