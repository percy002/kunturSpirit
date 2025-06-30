<?php
/* 
Template Name: Nosotros
*/
get_header();

$descripcion = get_field('descripcion') ? get_field('descripcion') : 'No disponible';
$mision = get_field('mision') ? get_field('mision') : 'No disponible';
$vision = get_field('vision') ? get_field('vision') : 'No disponible';
$infoHeroTour = array(
    'imagen_url' => get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri() . "/assets/images/nosotros.webp",
    'title' => 'Acerca de Nosotros',
    'descripcion' => $descripcion,
    'mision' => $mision,
    'vision' => $vision,
    'heroType' => 'layout',
);
?>

<!-- Tu contenido para la página Nosotros aquí -->
<?php ?>
<?php get_template_part('template-parts/hero', null, $infoHeroTour); ?>
<section>
    <div class="container flex flex-col gap-1.5 items-center">
        <span class="text-center text-2xl">Acerca de</span>
        <h1 class="m-0">Nosotros</h1>
        <div class="text-center flex flex-col gap-2.5">
            <?= $descripcion ?>
        </div>
    </div>
</section>
<section>
    <div class="container flex justify-end h-[600px]" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/saludo.avif') lightgray 50% / cover no-repeat;">
        <div class="flex flex-col justify-center gap-2.5 px-10 w-[340px]" style="background: rgba(255, 255, 255, 0.80);">
            <div class="">
                <h2 class="text-center text-secondary text-2xl">Misión</h2>
                <?= $mision ?>
            </div>
            <div class="">
                <h2 class="text-center text-secondary text-2xl">Visión</h2>
                <?= $vision ?>
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/porquenosotros' ) ?>

<section>
    <div class="container flex flex-col gap-1.5">
        <h1>Todos Nuestros Colaboradores</h1>
        <p>Conoce a todos nuestros colaboradores que hacen de tu viaje, la mejor experiencia de tu vida.</p>
        <div class="flex justify-center flex-wrap gap-5">
            <div class="flex flex-col items-center pt-5">
                <img class="rounded-[100px] w-[180px] h-[180px] object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/retrato.webp" alt="">
                <span class="text-primary text-2xl">Juan Perez</span>
                <span class="text-base">web master</span>
            </div>
            <div class="flex flex-col items-center pt-5">
                <img class="rounded-[100px] w-[180px] h-[180px] object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/retrato.webp" alt="">
                <span class="text-primary text-2xl">Juan Perez</span>
                <span class="text-base">web master</span>
            </div>
            <div class="flex flex-col items-center pt-5">
                <img class="rounded-[100px] w-[180px] h-[180px] object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/retrato.webp" alt="">
                <span class="text-primary text-2xl">Juan Perez</span>
                <span class="text-base">web master</span>
            </div>
            <div class="flex flex-col items-center pt-5">
                <img class="rounded-[100px] w-[180px] h-[180px] object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/retrato.webp" alt="">
                <span class="text-primary text-2xl">Juan Perez</span>
                <span class="text-base">web master</span>
            </div>
            <div class="flex flex-col items-center pt-5">
                <img class="rounded-[100px] w-[180px] h-[180px] object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/retrato.webp" alt="">
                <span class="text-primary text-2xl">Juan Perez</span>
                <span class="text-base">web master</span>
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/mensaje' ) ?>
<?php get_footer(); ?>