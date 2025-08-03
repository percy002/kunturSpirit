<?php

/**
 * front-page
 *
 * @package TailPress
 */
$toursPeru = get_field('experiencias_peru');
$toursCusco = get_field('experiencias_cusco');
$trekking = get_field('trekking');
$comentarios = get_field('comentarios') ?: '';
get_header();
?>
<section class="py-0">

    <div class="swiper mySwiper !h-screen">
        <div class="swiper-wrapper">

            <?php            
            $term_to_exclude = get_term_by('slug', 'trekking', 'paquete');
            $excluded_id = $term_to_exclude ? $term_to_exclude->term_id : 0;

            $paquetes = get_terms([
                'taxonomy' => 'paquete',
                'hide_empty' => false,
                'exclude' => [$excluded_id],
            ]);
            if (!empty($paquetes) && !is_wp_error($paquetes)):

                foreach ($paquetes as $paquete):
                    $img = get_field('imagen_encabezado', $paquete); // o el campo que uses
                    $desc = get_field('descripcion_corta', $paquete);
                    $link = get_term_link($paquete);
            ?>
                    <div class="swiper-slide">
                        <div class="h-full bg-no-repeat bg-cover"
                            style="background-image: linear-gradient(180deg, rgba(65,24,13,0.8) 0%, rgba(0,0,0,0) 100%), url('<?php echo $img['url'] ?? ''; ?>'); background-position: center bottom;">
                            <div class="flex flex-col h-full pt-0 px-2.5 md:pr-[150px] md:pl-[150px] md:pb-[150px] justify-center md:justify-end gap-5 self-stretch items-center">
                                <div class="text-white flex-col gap-2.5 items-center">
                                    <h1 class="text-white" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, .5)"><?php echo esc_html($paquete->name); ?></h1>
                                    <p class="text-center text-[20px]" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, .5)"><?php echo esc_html($paquete->description); ?></p>
                                </div>
                                <a href="<?php echo esc_url($link); ?>"><span class="py-2 px-5 bg-primary text-white font-medium">mas información</span></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
        <!-- Botones de navegación -->
        <div class="swiper-button-next !text-white !w-12 !h-12 rounded-3xl opacity-60 -translate-y-20 scale-75 md:scale-100 "></div>
        <div class="swiper-button-prev !text-white !w-12 !h-12 rounded-3xl opacity-60 -translate-y-20 scale-75 md:scale-100  "></div>
</section>

<section>
    <div class="container flex flex-col gap-5 md:pr-[100px] md:pl-[100px]">
        <h1>Kuntur Spirit</h1>
        <p class="text-center">Kuntur Spirit, que significa «El Espíritu del Cóndor», es una agencia de viajes local que
            ofrece una variedad
            de servicios turísticos en todo Perú. Nuestro equipo ha diseñado tres rutas únicas de Turismo Espiritual
            para brindarte una experiencia memorable que nutra tu bienestar interior y exterior. Somos una familia unida
            de profesionales dedicados a investigar, valorar y preservar el rico patrimonio cultural y la sabiduría
            transmitida por nuestros antepasados. Guiados por sus filosofías metafísicas holísticas, buscamos fomentar
            el crecimiento físico, emocional y espiritual, tanto para nosotros como para quienes nos acompañan en sus
            viajes. Como agencia de viajes 100% peruana con años de experiencia en el sector turístico, Kuntur Spirit se
            enorgullece de ofrecer experiencias auténticas que resaltan la belleza y la espiritualidad del Perú.</p>
    </div>
</section>
<!-- SECCION DE TOURS PERU -->
<section>
    <div class="container flex flex-col gap-5 md:pr-[100px] md:pl-[100px]">
        <h1>Experiencias Perú: ¡Explora el Perú de norte a sur!</h1>
        <p>
            Descubrir Perú es embarcarse en una aventura llena de contrastes, historia milenaria y paisajes que quitan
            el aliento. Desde la majestuosidad de Machu Picchu hasta la inmensidad del desierto de Paracas, cada rincón
            del país ofrece una experiencia única e inolvidable. En este viaje, te llevaremos por los sabores de su
            gastronomía, los misterios de sus antiguas civilizaciones y la calidez de su gente. Prepárate para explorar
            un Perú que va mucho más allá de los destinos turísticos tradicionales.
        </p>
    </div>
    <div class="pt-10 flex flex-col gap-10 md:pr-[100px] md:pl-[100px]">
        <div class="container flex flex-col lg:flex-row gap-7 items-center lg:items-stretch lg:justify-center ">
            <!-- card de tours -->
            <?php foreach ($toursPeru as $tour):
                // Variables para mostrar en la card
                $tour_id = $tour->ID;
                $titulo = get_the_title($tour_id);
                $link = get_permalink($tour_id);
                $img = has_post_thumbnail($tour_id) ? get_the_post_thumbnail_url($tour_id, 'large') : get_template_directory_uri() . '/assets/images/camino.jpg';
                $duracion = get_field('duracion', $tour_id) ?: 'Duración no disponible';
                $modalidad = get_field('modalidad', $tour_id) ?: 'GRUPAL / PRIVADO';
                $descripcion = get_field('resumen_descripcion', $tour_id) ?: '';
                $precio_regular = get_field('precio_regular', $tour_id) ?: '';
                $precio_oferta = get_field('precio_oferta', $tour_id) ?: '';

            ?>
                <article class="flex flex-col items-center bg-white max-w-[400px] flex-1" style="flex: 1 1 0;">
                    <div class="w-full">
                        <img class="w-full h-full object-cover object-center" src="<?php echo esc_url($img); ?>"
                            alt="<?php echo esc_attr($titulo); ?>">
                    </div>
                    <div class="h-full flex flex-col justify-between gap-1.5 items-center p-2.5 self-stretch">
                        <div class="w-full">

                            <div class="flex justify-between py-0 px-2.5 flex-start w-full">
                                <div class="flex items-center gap-1.5 text-sm">
                                    <span class="text-tertiary"><i class="fa-solid fa-clock"></i></span>
                                    <span class="text-light"><?php echo esc_html($duracion); ?></span>
                                </div>
                                <div class="bg-tertiary flex items-center px-2.5 py-1 rounded-xl">
                                    <span class="text-sm text-white"><?php echo esc_html($modalidad); ?></span>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <h1 class="text-2xl font-bold text-primary my-0"><?php echo esc_html($titulo); ?></h1>
                                <p class="text-center"><?= esc_html($descripcion); ?></p>
                            </div>
                        </div>
                        <div class="w-full py-2.5 px-5 flex justify-between items-center">
                            <div class="flex flex-col justify-center" style="flex: 1 0 0">
                                <?php if ($precio_oferta): ?>
                                    <div class="flex gap-1.5 text-xs items-center">
                                        <span>Antes: </span>
                                        <span class="font-bold text-xs line-through text-light ">US$
                                            <?php echo esc_html($precio_regular); ?></span>
                                    </div>
                                    <span>Desde:</span>
                                    <span class="font-bold text-primary text-base">US$
                                        <?php echo esc_html($precio_oferta); ?></span>
                                <?php else: ?>
                                    <span>Desde:</span>
                                    <span class="font-bold text-primary text-base">US$
                                        <?php echo esc_html($precio_regular); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="flex gap-1.5 text-white">
                                <a href="<?php echo esc_url($link); ?>" class="py-2.5 px-2.5 bg-secondary"><span>Ver
                                        Itinerario</span></a>
                                <a href="#" class="py-2.5 px-2.5 bg-primary"><span>Reserva</span></a>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
        <div class="w-full flex justify-center">
            <a href="" class="py-4 px-16 bg-primary text-white font-medium !no-underline"><span>VER MÁS
                    EXPERIENCIAS</span></a>
        </div>
    </div>
</section>
<!-- SECCION SLOGAN -->
<section>
    <div class="relative w-full">

        <div class="bg-transparent relative h-[550px] 2xl:h-[700px] ">
            <img class="h-full object-cover 2xl:w-full"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/laguna.png" alt=""
                style="filter: drop-shadow(-3px 11px 11px rgba(0,0,0,0.5))">
        </div>
        <div
            class="px-2.5 absolute top-1/2 -translate-y-1/2 sm:right-[150px] 2xl:left-1/2 2xl:-translate-1/2 w-[500px] max-w-11/12 2xl:w-[1000px] text-white">
            <h1 class="text-right text-white 2xl:text-center">"No nos dedicamos al negocio de los viajes. Nos dedicamos
                al negocio de
                los sueños."
            </h1>
            <div class="flex justify-end 2xl:justify-center">
                <a href="" class="py-2.5 lg:py-4 px-10 lg:px-12 text-white bg-primary"><span
                        class="text-xl lg:text-2xl">Contáctenos</span></a>
            </div>
        </div>
    </div>
</section>
<!-- SECCION DE TOURS CUSCO -->
<section>
    <div class="container flex flex-col gap-5 md:pr-[100px] md:pl-[100px]">
        <h1>Experiencias Cusco: ¡Vive la historia en cada paso!</h1>
        <p>
            Descubre la magia del corazón de los Andes. Cusco, antigua capital del Imperio Inca, es un lugar donde la
            historia milenaria, la cultura viva y los paisajes impresionantes se entrelazan para ofrecerte una
            experiencia única. En esta sección encontrarás nuestros mejores tours por la ciudad de Cusco y sus
            alrededores: desde el clásico City Tour hasta los enigmáticos centros arqueológicos como Sacsayhuamán, el
            Valle Sagrado de los Incas y el inigualable Machu Picchu. Cada experiencia ha sido diseñada para conectarte
            con la esencia de este lugar sagrado, guiado por expertos locales y con total respeto por su legado.
        </p>
    </div>
    <div class="pt-10 flex flex-col gap-10 md:pr-[100px] md:pl-[100px]">
        <div class="container flex flex-col lg:flex-row gap-7 items-center lg:items-stretch lg:justify-center ">
            <!-- card de tours -->
            <?php foreach ($toursCusco as $tour):
                // Variables para mostrar en la card
                $tour_id = $tour->ID;
                $titulo = get_the_title($tour_id);
                $link = get_permalink($tour_id);
                $img = has_post_thumbnail($tour_id) ? get_the_post_thumbnail_url($tour_id, 'large') : get_template_directory_uri() . '/assets/images/camino.jpg';
                $duracion = get_field('duracion', $tour_id) ?: 'Duración no disponible';
                $modalidad = get_field('modalidad', $tour_id) ?: 'GRUPAL / PRIVADO';
                $descripcion = get_field('resumen_descripcion', $tour_id) ?: '';
                $precio_regular = get_field('precio_regular', $tour_id) ?: '';
                $precio_oferta = get_field('precio_oferta', $tour_id) ?: '';

            ?>
                <article class="flex flex-col items-center bg-white max-w-[400px] flex-1" style="flex: 1 1 0;">
                    <div class="w-full">
                        <img class="w-full h-full object-cover object-center" src="<?php echo esc_url($img); ?>"
                            alt="<?php echo esc_attr($titulo); ?>">
                    </div>
                    <div class="h-full flex flex-col justify-between gap-1.5 items-center p-2.5 self-stretch">
                        <div class="w-full">

                            <div class="flex justify-between py-0 px-2.5 flex-start w-full">
                                <div class="flex items-center gap-1.5 text-sm">
                                    <span class="text-tertiary"><i class="fa-solid fa-clock"></i></span>
                                    <span class="text-light"><?php echo esc_html($duracion); ?></span>
                                </div>
                                <div class="bg-tertiary flex items-center px-2.5 py-1 rounded-xl">
                                    <span class="text-sm text-white"><?php echo esc_html($modalidad); ?></span>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <h1 class="text-2xl font-bold text-primary my-0"><?php echo esc_html($titulo); ?></h1>
                                <p class="text-center"><?= esc_html($descripcion); ?></p>
                            </div>
                        </div>
                        <div class="w-full py-2.5 px-5 flex justify-between items-center">
                            <div class="flex flex-col justify-center" style="flex: 1 0 0">
                                <?php if ($precio_oferta): ?>
                                    <div class="flex gap-1.5 text-xs items-center">
                                        <span>Antes: </span>
                                        <span class="font-bold text-xs line-through text-light ">US$
                                            <?php echo esc_html($precio_regular); ?></span>
                                    </div>
                                    <span>Desde:</span>
                                    <span class="font-bold text-primary text-base">US$
                                        <?php echo esc_html($precio_oferta); ?></span>
                                <?php else: ?>
                                    <span>Desde:</span>
                                    <span class="font-bold text-primary text-base">US$
                                        <?php echo esc_html($precio_regular); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="flex gap-1.5 text-white">
                                <a href="<?php echo esc_url($link); ?>" class="py-2.5 px-2.5 bg-secondary"><span>Ver
                                        Itinerario</span></a>
                                <a href="#" class="py-2.5 px-2.5 bg-primary"><span>Reserva</span></a>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
        <div class="w-full flex justify-center">
            <a href="" class="py-4 px-16 bg-primary text-white font-medium !no-underline"><span>VER MÁS
                    EXPERIENCIAS</span></a>
        </div>
    </div>
    <?php get_template_part('template-parts/mensaje') ?>
    <!-- TOURS DE UN DIA -->
    <section>

        <!-- Carrusel de trekking con Swiper -->
        <div class="container">
            <div class="flex flex-col gap-5">
                <h1>Aventura - Trekking más populares</h1>
                <p class="text-center">Explora las mejores rutas de trekking en Perú con KUNTUR SPIRIT Travel. Descubre
                    aventuras inolvidables entre montañas, valles y paisajes impresionantes. ¡Empieza tu travesía hoy!
                </p>
            </div>
            <div class="swiper !h-fit trekkingSwiper mt-8">
                <div class="swiper-wrapper flex sm:justify-center gap-8 items-stretch ">
                    <?php foreach ($trekking as $tour):
                        $tour_id = $tour->ID;
                        $titulo = get_the_title($tour_id);
                        $link = get_permalink($tour_id);
                        $img = has_post_thumbnail($tour_id) ? get_the_post_thumbnail_url($tour_id, 'large') : get_template_directory_uri() . '/assets/images/vinicunca.webp';
                        $duracion = get_field('duracion', $tour_id) ?: '1 Día';
                        $tipo_tour = get_field('tipo_tour', $tour_id) ?: 'GRUPAL / PRIVADO';
                        $descripcion = get_field('descripcion_corta', $tour_id);
                        $precio = get_field('precio_oferta', $tour_id) ?: get_field('precio_regular', $tour_id);
                    ?>
                        <article class="flex flex-col items-center bg-white swiper-slide h-full w-full max-w-[280px] !mr-0">
                            <div class="h-[220px] w-full">
                                <img class="w-full h-full object-center object-cover" src="<?php echo esc_url($img); ?>"
                                    alt="<?php echo esc_attr($titulo); ?>">
                            </div>
                            <div class="flex flex-col gap-1.5 items-center p-2.5 self-stretch">
                                <div class="flex justify-between py-0 px-2.5 flex-start w-full">
                                    <div class="flex items-center gap-1.5 text-sm">
                                        <span class="text-tertiary"><i class="fa-solid fa-clock"></i></span>
                                        <span class="text-light"><?php echo esc_html($duracion); ?></span>
                                    </div>
                                    <div class="bg-tertiary flex items-center px-2.5 py-1 rounded-xl">
                                        <span class="text-sm text-white"><?php echo esc_html($tipo_tour); ?></span>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1.5">
                                    <h1 class="text-2xl font-bold text-primary my-0"><?php echo esc_html($titulo); ?></h1>
                                    <p class="text-center"><?php echo esc_html($descripcion); ?></p>
                                </div>
                                <div class="w-full py-2.5 px-5 items-center">
                                    <div class="flex gap-1.5 justify-between justify-center" style="flex: 1 1 0">
                                        <span>Desde:</span>
                                        <span class="font-bold text-primary text-base">US$
                                            <?php echo esc_html($precio); ?></span>
                                    </div>
                                    <div class="flex gap-1.5 text-white justify-center">
                                        <a href="<?php echo esc_url($link); ?>" class="py-2.5 px-5 bg-secondary"><span>Ver
                                                Itinerario</span></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
                <!-- Botones de navegación -->
                <div class="swiper-button-prev rounded-2xl !text-primary !left-1 !p-5 !bg-light/10 hover:!bg-light/50">
                </div>
                <div class="swiper-button-next rounded-2xl !text-primary !right-1 !p-5 !bg-light/10 hover:!bg-light/50">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container flex flex-col gap-10">
            <div class="flex flex-col gap-5">
                <h1>Lo que dicen nuestros clientes</h1>
                <p class="text-center">
                    Estamos orgullosos de cuidar cada detalle de nuestros servicios para nuestros clientes, la
                    satisfacción
                    plena de nuestros viajeros es nuestra mejor recompensa y son ellos nuestros mejores defensores y
                    quienes
                    con frecuencia, nos recomiendan a familiares o amigos cuando planifican un viaje a nuestra región.
                </p>
            </div>
            <?php echo do_shortcode($comentarios) ?>


        </div>
    </section>

    <?php get_template_part('template-parts/porquenosotros') ?>
    <section>
        <div class="container flex flex-col gap-10">
            <div class="flex flex-col gap-5">
                <h1>Información útil para el viajero</h1>
                <p class="text-center">
                    Encuentre información esencial para su viaje: consejos, recomendaciones y datos prácticos para una
                    experiencia de viaje sin contratiempos.
                </p>
            </div>
        </div>
    </section>
    <?php
    get_footer();
