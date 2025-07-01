<?php
/* 
Template Name: Viaje
*/
get_header();
?>
<section>
    <div class="container flex flex-col gap-1.5">
        <h1>Diseña tu viaje </h1>
        <p class="text-center">
            Nos encantaría ayudarte a planificar el viaje perfecto. Completa el formulario a continuación con tus datos y preferencias. Cuanta más información nos proporciones, mejor podremos diseñar una experiencia a la medida de tus sueños y expectativas. ¡Comencemos a crear tu aventura ideal!
        </p>
        <div class="flex flex-col gap-2.5 items-center">
            <?php echo do_shortcode('[contact-form-7 id="eeb1eb7" title="Tu viaje"]');  ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>