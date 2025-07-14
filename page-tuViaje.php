<?php
/* 
Template Name: Viaje
*/
$form = get_field('formulario');

get_header();
$infoHeroTour = array(
    'imagen_url' => get_template_directory_uri() . "/assets/images/personas.avif",
    'title' => 'Diseña tu viaje',
    'heroType' => 'layout',
);
?>

<!-- Tu contenido para la página Nosotros aquí -->
<?php get_template_part('template-parts/hero', null, $infoHeroTour); ?>
<section>
    <div class="container flex flex-col gap-1.5 md:pr-[100px] md:pl-[100px]">
        <h1>Diseña tu viaje </h1>
        <p class="text-justify">
            Nos encantaría ayudarte a planificar el viaje perfecto. Completa el formulario a continuación con tus datos
            y preferencias. Cuanta más información nos proporciones, mejor podremos diseñar una experiencia a la medida
            de tus sueños y expectativas. ¡Comencemos a crear tu aventura ideal!
        </p>
        <div class="flex flex-col gap-2.5 items-center">
            <?php if ($form) {
                echo do_shortcode($form);
            } ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>