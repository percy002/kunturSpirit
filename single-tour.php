<?php
/**
 * single-tour.php
 *
 * @package TailPress
 */

$resumen_descripcion = get_field('resumen_descripcion') ? get_field('resumen_descripcion') : 'No disponible';
$precio = get_field('precio') ? get_field('precio') : 'No disponible';
$duracion = get_field('duracion') ? get_field('duracion') : 'No disponible';

$descripcion_general = get_field('descripcion_general') ? get_field('descripcion_general') : 'No disponible';
$dia_1 = get_field('dia_1') ? get_field('dia_1') : 'No disponible';

$incluye = get_field('incluye') ? get_field('incluye') : 'No disponible';
$no_incluye = get_field('no_incluye') ? get_field('no_incluye') : 'No disponible';

$infoHeroTour = array(
    'imagen_url' => get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri() . "/assets/images/mapi.webp",
    'title' => get_the_title() ? get_the_title() : 'No disponible',
    'descripcion' => $resumen_descripcion,
    'precio' => $precio,
    'duracion' => $duracion,
    'heroType' => 'tour',
);
get_header();
?>
<?php get_template_part('template-parts/hero', null, $infoHeroTour); ?>

<!-- DESCRIPCION GENERAL -->
<section>
    <div class="container flex flex-col gap-2.5">
        <h1 class="text-start">Descripción General</h1>
        <?php echo $descripcion_general ?>
    </div>
</section>

<!-- ITINERARIO -->
<section>
    <div class="container flex flex-col gap-5">
        <h1 class="text-start">Itinerario Detallado</h1>

        <!-- CONTENIDO DE ITINERARIO -->
        <div class="flex flex-col">
            <!-- dia 1 -->
            <div class="flex gap-5">
                <div class="flex flex-col">
                    <div class="flex flex-col rounded-4xl bg-primary text-white w-14 h-14 items-center justify-center p-3">
                        <span class="font-medium">Día</span>
                        <span class="text-2xl font-bold">01</span>
                    </div>
                    <div class="relative h-full ">
                        <div class="absolute left-1/2 top-0 h-full border-l-4 border-dashed border-primary"></div>
                        <!-- Otros contenidos aquí -->
                    </div>
                </div>
                <section class="p-0">
                    <div class="h-14 flex flex-col justify-center">
                        <h1 class="text-2xl font-bold text-start m-0"><?= $dia_1['titulo'] ?></h1>                        
                    </div>
                    <div class="">
                        <?= $dia_1['descripcion'] ?>
                    </div>
                </section>
            </div>
            <!-- dia 1 -->
            <div class="flex gap-5">
                <div class="flex flex-col">
                    <div class="flex flex-col rounded-4xl bg-primary text-white w-14 h-14 items-center justify-center p-3">
                        <span class="font-medium">Día</span>
                        <span class="text-2xl font-bold">02</span>
                    </div>
                    <div class="relative h-full ">
                        <div class="absolute left-1/2 top-0 h-full border-l-4 border-dashed border-primary"></div>
                        <!-- Otros contenidos aquí -->
                    </div>
                </div>
                <section class="p-0">
                    <div class="h-14 flex flex-col justify-center">
                        <h1 class="text-2xl font-bold text-start m-0"><?= $dia_1['titulo'] ?></h1>                        
                    </div>
                    <div class="">
                        <?= $dia_1['descripcion'] ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>

<!-- QUE INCLUYE -->

<?php
get_footer();