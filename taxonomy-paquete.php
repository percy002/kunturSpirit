<?php
/**
 * single-tour.php
 *
 * @package TailPress
 */


$term = get_queried_object();
$infoHeroTour = array(
    'imagen_url' => get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri() . "/assets/images/mapi.webp",
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
        <h1 class="text-center">Descripción General</h1>
        <p class="text-center">
            <?php echo $term->description ? $term->description : 'No disponible'; ?>

        </p>
    </div>
</section>
<!-- TOURS -->
<section>
    <div class="">
        <div class="pt-10 flex flex-col gap-10">
            <div class="container flex gap-7 justify-center">
                <!-- card de tours -->
                <article class="flex flex-col items-center bg-white " stryle="flex: 1 1 0;">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/camino.jpg" alt="">
                    </div>
                    <!-- contenido tour -->
                    <div class="flex flex-col gap-1.5 items-center p-2.5 self-stretch">
                        <!-- etiquetas -->
                        <div class="flex justify-between py-0 px-2.5 flex-start w-full">
                            <div class="flex items-center gap-1.5 text-sm">
                                <span class="text-tertiary"><i class="fa-solid fa-clock"></i></span>
                                <span class="text-light">13 días / 12 noches</span>
                            </div>
                            <div class="bg-tertiary flex items-center px-2.5 py-1 rounded-xl">
                                <span class="text-sm text-white">GRUPAL / PRIVADO</span>
                            </div>
                        </div>
                        <!-- contenido -->
                        <div class="flex flex-col gap-1.5">
                            <h1 class="text-2xl font-bold text-primary my-0">Perú Fantástico: Una experiencia completa
                            </h1>
                            <p>Este tour de 13 días lo llevará a través de los destinos más famosos de Perú, incluidos
                                Paracas, Cusco, Machu Picchu, la Montaña de Colores y el Lago Titicaca, combinando
                                aventura,
                                cultura y paisajes impresionantes.</p>

                        </div>
                        <!-- actions -->
                        <div class="w-full py-2.5 px-5 flex justify-between items-center">
                            <!-- precio -->
                            <div class="flex flex-col justify-center" style="flex: 1 0 0">
                                <!-- oferta -->
                                <div class="flex gap-1.5 text-xs">
                                    <span>Antes: </span>
                                    <span class="font-bold">US$ 1250</span>
                                </div>
                                <span>Desde:</span>
                                <span class="font-bold text-primary text-base">US$ 1200</span>
                            </div>
                            <!-- botones -->
                            <div class="flex gap-1.5 text-white ">
                                <a href="<?php echo get_permalink(get_page_by_path('explora-peru-un-viaje-a-traves-de-la-historia-la-naturaleza-y-la-cultura', OBJECT, 'tour')); ?>"
                                    class="py-2.5 px-2.5 bg-secondary"><span>Ver Itinerario</span></a>
                                <a href="" class="py-2.5 px-2.5 bg-primary"><span>Reserva</span></a>
                            </div>
                        </div>

                    </div>
                </article>
                <article class="flex flex-col items-center bg-white " stryle="flex: 1 1 0;">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/camino.jpg" alt="">
                    </div>
                    <!-- contenido tour -->
                    <div class="flex flex-col gap-1.5 items-center p-2.5 self-stretch">
                        <!-- etiquetas -->
                        <div class="flex justify-between py-0 px-2.5 flex-start w-full">
                            <div class="flex items-center gap-1.5 text-sm">
                                <span class="text-tertiary"><i class="fa-solid fa-clock"></i></span>
                                <span class="text-light">13 días / 12 noches</span>
                            </div>
                            <div class="bg-tertiary flex items-center px-2.5 py-1 rounded-xl">
                                <span class="text-sm text-white">GRUPAL / PRIVADO</span>
                            </div>
                        </div>
                        <!-- contenido -->
                        <div class="flex flex-col gap-1.5">
                            <h1 class="text-2xl font-bold text-primary my-0">Perú Fantástico: Una experiencia completa
                            </h1>
                            <p>Este tour de 13 días lo llevará a través de los destinos más famosos de Perú, incluidos
                                Paracas, Cusco, Machu Picchu, la Montaña de Colores y el Lago Titicaca, combinando
                                aventura,
                                cultura y paisajes impresionantes.</p>

                        </div>
                        <!-- actions -->
                        <div class="w-full py-2.5 px-5 flex justify-between items-center">
                            <!-- precio -->
                            <div class="flex flex-col justify-center" style="flex: 1 0 0">
                                <!-- oferta -->
                                <div class="flex gap-1.5 text-xs">
                                    <span>Antes: </span>
                                    <span class="font-bold">US$ 1250</span>
                                </div>
                                <span>Desde:</span>
                                <span class="font-bold text-primary text-base">US$ 1200</span>
                            </div>
                            <!-- botones -->
                            <div class="flex gap-1.5 text-white ">
                                <a href="<?php echo get_permalink(get_page_by_path('explora-peru-un-viaje-a-traves-de-la-historia-la-naturaleza-y-la-cultura', OBJECT, 'tour')); ?>"
                                    class="py-2.5 px-2.5 bg-secondary"><span>Ver Itinerario</span></a>
                                <a href="" class="py-2.5 px-2.5 bg-primary"><span>Reserva</span></a>
                            </div>
                        </div>

                    </div>
                </article>
                <article class="flex flex-col items-center bg-white " stryle="flex: 1 1 0;">
                    <div class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/camino.jpg" alt="">
                    </div>
                    <!-- contenido tour -->
                    <div class="flex flex-col gap-1.5 items-center p-2.5 self-stretch">
                        <!-- etiquetas -->
                        <div class="flex justify-between py-0 px-2.5 flex-start w-full">
                            <div class="flex items-center gap-1.5 text-sm">
                                <span class="text-tertiary"><i class="fa-solid fa-clock"></i></span>
                                <span class="text-light">13 días / 12 noches</span>
                            </div>
                            <div class="bg-tertiary flex items-center px-2.5 py-1 rounded-xl">
                                <span class="text-sm text-white">GRUPAL / PRIVADO</span>
                            </div>
                        </div>
                        <!-- contenido -->
                        <div class="flex flex-col gap-1.5">
                            <h1 class="text-2xl font-bold text-primary my-0">Perú Fantástico: Una experiencia completa
                            </h1>
                            <p>Este tour de 13 días lo llevará a través de los destinos más famosos de Perú, incluidos
                                Paracas, Cusco, Machu Picchu, la Montaña de Colores y el Lago Titicaca, combinando
                                aventura,
                                cultura y paisajes impresionantes.</p>

                        </div>
                        <!-- actions -->
                        <div class="w-full py-2.5 px-5 flex justify-between items-center">
                            <!-- precio -->
                            <div class="flex flex-col justify-center" style="flex: 1 0 0">
                                <!-- oferta -->
                                <div class="flex gap-1.5 text-xs">
                                    <span>Antes: </span>
                                    <span class="font-bold">US$ 1250</span>
                                </div>
                                <span>Desde:</span>
                                <span class="font-bold text-primary text-base">US$ 1200</span>
                            </div>
                            <!-- botones -->
                            <div class="flex gap-1.5 text-white ">
                                <a href="<?php echo get_permalink(get_page_by_path('explora-peru-un-viaje-a-traves-de-la-historia-la-naturaleza-y-la-cultura', OBJECT, 'tour')); ?>"
                                    class="py-2.5 px-2.5 bg-secondary"><span>Ver Itinerario</span></a>
                                <a href="" class="py-2.5 px-2.5 bg-primary"><span>Reserva</span></a>
                            </div>
                        </div>

                    </div>
                </article>



            </div>
        </div>
    </div>
</section>
<!-- MENSAJE -->
<section>
    <div class=""
        style="background: linear-gradient(0deg, rgba(65, 24, 13, 0.50) 0%, rgba(65, 24, 13, 0.50) 100%), url('<?php echo get_template_directory_uri(); ?>/assets/images/pallayponcho.webp') lightgray 0px -750.816px / 100% 790.241% no-repeat;">
        <div class="container py-12 flex gap-12 justify-center items-center">
            <div class="flex flex-col gap-2.5 text-white">
                <span class="text-5xl font-medium text-center">Aventuras hechas a tu medida </span>
                <span class="text-2xl font-normal text-center">Cada viaje con “Kuntur Spirit” es único.</span>
            </div>
            <div class="border-r border-white h-24"></div>
            <div class="">
                <a href="" class="bg-white text-primary py-4 px-12 font-semibold"><span>CONTACTANOS</span></a>
            </div>
        </div>
    </div>

</section>

<?php
get_footer();