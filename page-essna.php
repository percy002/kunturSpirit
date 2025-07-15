<?php
/* 
Template Name: Pagina ESSNA
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
    <div class="">
        <?php get_the_content( ) ?>
    </div>
</section>

<?php get_footer(); ?>