<?php
/* 
Template Name: Reclamaciones
*/
get_header();
$form = get_field('formulario');

$infoHeroTour = array(
    'imagen_url' => get_template_directory_uri() . "/assets/images/personas.avif",
    'title' => 'Hoja de Reclamaciones',
    'heroType' => 'layout',
);
?>

<!-- Tu contenido para la página Nosotros aquí -->
<?php get_template_part('template-parts/hero', null, $infoHeroTour); ?>
<section>
    <div class="container flex flex-col gap-1.5">
        <p class="text-center">
            El libro de reclamaciones es un documento donde el consumidor informa sobre un reclamo: cuando tiene
            carácter de infracción o sobre una queja, cuando está relacionada a un malestar o descontento por el
            servicio.
        </p>
        <?php if ($form) {
            echo do_shortcode($form);
        } ?>
    </div>
</section>

<?php get_footer(); ?>