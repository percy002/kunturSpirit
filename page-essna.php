<?php
/* 
Template Name: Pagina ESNNA
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
        <h1>Código de conducta ESNNA y Kuntur Spirit Travel</h1>
        <div class="flex flex-col lg:flex-row gap-12 lg:p-12">
            <div class="flex-[2_0_0]">
                <img src="<?= get_template_directory_uri() . "/assets/images/essna.avif" ?>" alt="">
            </div>
            <div class="flex-[3_0_0] esnaa-content flex flex-col gap-2.5">
                <?= get_the_content() ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>