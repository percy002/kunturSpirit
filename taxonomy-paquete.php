<?php
/**
 * single-tour.php
 *
 * @package TailPress
 */

$term = get_queried_object();
$imagen_encabezado = get_field('imagen_encabezado', 'term_' . get_queried_object_id());
$imagen_encabezado_url = $imagen_encabezado['url'] ?? get_template_directory_uri() . "/assets/images/mapi.webp";
$infoHeroTour = array(
    'imagen_url' => $imagen_encabezado_url,
    'title' => $term->name ? $term->name : 'No disponible',
    'descripcion' => term_description() ? term_description() : 'No disponible',
    'heroType' => '',
);
get_header();
?>
<?php get_template_part('template-parts/hero', null, $infoHeroTour); ?>

<!-- DESCRIPCION GENERAL -->
<section>
    <div class="container flex flex-col gap-2.5">
        <h1 class="text-center"><?= pll__('Descripción General') ?></h1>
        <p class="text-center">
            <?php echo $term->description ? $term->description : 'No disponible'; ?>

        </p>
    </div>
</section>
<!-- TOURS -->
<section>
    <div class="">
        <div class="pt-10 flex flex-col gap-10">
            <div class="container grid grid-cols-1 lg:grid-cols-3 gap-7 justify-items-center">

                <?php
                $args = [
                    'post_type' => 'tour',
                    'posts_per_page' => -1, // o el número que desees
                    'tax_query' => [
                        [
                            'taxonomy' => $term->taxonomy, // la taxonomía actual
                            'field' => 'term_id',
                            'terms' => $term->term_id,
                        ],
                    ],
                ];
                $tours = new WP_Query($args);

                if ($tours->have_posts()):
                    while ($tours->have_posts()):
                        $tours->the_post();
                        $duracion = get_field('duracion'); // ej. "13 días / 12 noches"
                        $modalidad = get_field('modalidad'); // ej. "GRUPAL / PRIVADO"
                        $descripcion = get_field('resumen_descripcion');
                        $precio_regular = get_field('precio_regular'); // ej. 1250
                        $precio_oferta = get_field('precio_oferta'); // ej. 1200
                        $link_itinerario = get_permalink();
                        $imagen = get_the_post_thumbnail_url(null, 'large') ?: get_template_directory_uri() . '/assets/images/camino.jpg';
                        ?>

                        <article class="h-full col-span-1 flex flex-col items-center bg-white flex-1 lg:max-w-[30dvw]">
                            <div class="w-full">
                                <img class="w-full h-full object-cover object-center" src="<?= esc_url($imagen) ?>" alt="">
                            </div>
                            <div class="flex flex-col gap-1.5 justify-between items-center p-2.5 h-full self-stretch">
                                <div class="w-full">

                                    <!-- etiquetas -->
                                    <div class="flex justify-between py-0 px-2.5 w-full">
                                        <div class="flex items-center gap-1.5 text-sm">
                                            <span class="text-tertiary"><i class="fa-solid fa-clock"></i></span>
                                            <span class="text-light"><?= esc_html($duracion) ?></span>
                                        </div>
                                        <div class="bg-tertiary flex items-center px-2.5 py-1 rounded-xl">
                                            <span
                                                class="text-sm text-white"><?= esc_html($modalidad) ?: "GRUPAL / PRIVADO" ?></span>
                                        </div>
                                    </div>

                                    <!-- contenido -->
                                    <div class="flex flex-col gap-1.5">
                                        <h1 class="text-2xl font-medium text-primary my-0"><?php the_title(); ?></h1>
                                        <p class="text-center"><?= $descripcion ?></p>
                                    </div>
                                </div>

                                <!-- actions -->
                                <div class="w-full py-2.5 px-5 flex justify-between items-center">
                                    <div class="flex flex-col justify-center" style="flex: 1 0 0">
                                        <?php if ($precio_oferta): ?>
                                            <div class="flex gap-1.5 text-xs">
                                                <span><?= pll__('Antes:') ?></span>
                                                <span class="font-bold text-xs line-through text-light">US$ <?= esc_html($precio_regular) ?></span>
                                            </div>
                                            <span><?= pll__('Desde:') ?></span>
                                            <span class="font-bold text-primary text-base">US$
                                                <?= esc_html($precio_oferta) ?>
                                            </span>
                                        <?php else: ?>
                                            <span><?= pll__('Desde:') ?></span>
                                            <span class="font-bold text-primary text-base">US$
                                                <?= esc_html($precio_regular) ?>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="flex gap-1.5 text-white">
                                        <a href="<?= esc_url($link_itinerario) ?>" class="py-2.5 px-2.5 bg-secondary">
                                            <span><?= pll__('Ver Itinerario') ?></span>
                                        </a>
                                        <a href="#" class="py-2.5 px-2.5 bg-primary">
                                            <span><?= pll__('Reserva') ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>

            </div>
        </div>
    </div>
</section>

<!-- MENSAJE -->
<?php get_template_part('template-parts/mensaje'); ?>


<?php
get_footer();