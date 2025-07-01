<?php
/* 
Template Name: Reclamaciones
*/
get_header();
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
        <?php echo do_shortcode('[contact-form-7 id="e433a53" title="formReclamaciones"]'); ?>

    </div>
</section>

<?php get_footer(); ?>