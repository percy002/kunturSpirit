<?php
/**
 * front-page
 *
 * @package TailPress
 */

get_header();
?>

<section class="py-0">
    <div class="carousel h-dvh bg-cover bg-no-repeat " style="background-image: linear-gradient(180deg, rgba(65,24,13,0.8) 0%, rgba(0,0,0,0) 100%), url('<?php echo get_template_directory_uri(); ?>/assets/images/mapi.webp');
background-position: center bottom;">

        <div
            class="flex flex-col h-full pt-0 px-2.5 md:pr-[150px] md:pl-[150px] md:pb-[150px] justify-center md:justify-end gap-5 self-stretch items-center">
            <div class="text-white flex-col gap-2.5 items-center">
                <h1 class="text-white">Discover the magic of Machu Picchu - your adventure awaits!</h1>
                <p class="font-medium text-center">Kuntur Spirit will craft your perfect Machu Picchu adventure,
                    connecting
                    you
                    to the wonders of the Andes and Inca history.</p>
            </div>
            <a href=""><span class="py-2 px-5 bg-primary text-white font-medium">mas información</span></a>

        </div>
    </div>

</section>
<section>
    <div class="container flex flex-col gap-5">
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
    <div class="container flex flex-col gap-5">
        <h1>Viaje por Perú: ¡Experiencias inolvidables!</h1>
        <p>
            Descubrir Perú es embarcarse en una aventura llena de contrastes, historia milenaria y paisajes que quitan
            el aliento. Desde la majestuosidad de Machu Picchu hasta la inmensidad del desierto de Paracas, cada rincón
            del país ofrece una experiencia única e inolvidable. En este viaje, te llevaremos por los sabores de su
            gastronomía, los misterios de sus antiguas civilizaciones y la calidez de su gente. Prepárate para explorar
            un Perú que va mucho más allá de los destinos turísticos tradicionales.
        </p>
    </div>
    <div class="pt-10 flex flex-col gap-10">
        <div class="container flex flex-col lg:flex-row gap-7 justify-center">
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
                        <h1 class="text-2xl font-bold text-primary my-0">Perú Fantástico: Una experiencia completa</h1>
                        <p>Este tour de 13 días lo llevará a través de los destinos más famosos de Perú, incluidos
                            Paracas, Cusco, Machu Picchu, la Montaña de Colores y el Lago Titicaca, combinando aventura,
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
                        <h1 class="text-2xl font-bold text-primary my-0">Perú Fantástico: Una experiencia completa</h1>
                        <p>Este tour de 13 días lo llevará a través de los destinos más famosos de Perú, incluidos
                            Paracas, Cusco, Machu Picchu, la Montaña de Colores y el Lago Titicaca, combinando aventura,
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
                        <h1 class="text-2xl font-bold text-primary my-0">Perú Fantástico: Una experiencia completa</h1>
                        <p>Este tour de 13 días lo llevará a través de los destinos más famosos de Perú, incluidos
                            Paracas, Cusco, Machu Picchu, la Montaña de Colores y el Lago Titicaca, combinando aventura,
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
            <img class="h-full object-cover 2xl:w-full" src="<?php echo get_template_directory_uri(); ?>/assets/images/laguna.png" alt=""
                style="filter: drop-shadow(-3px 11px 11px rgba(0,0,0,0.5))">
        </div>
        <div class="px-2.5 absolute top-1/2 -translate-y-1/2 sm:right-[150px] 2xl:left-1/2 2xl:-translate-1/2 w-[500px] max-w-11/12 2xl:w-[1000px] text-white">
            <h1 class="text-right text-white 2xl:text-center">"No nos dedicamos al negocio de los viajes. Nos dedicamos al negocio de
                los sueños."
            </h1>
            <div class="flex justify-end 2xl:justify-center">
                <a href="" class="py-2.5 lg:py-4 px-10 lg:px-12 text-white bg-primary"><span class="text-xl lg:text-2xl">Contáctenos</span></a>
            </div>
        </div>
    </div>
</section>
<!-- SECCION DE TOURS PERU -->
<section>
    <div class="container flex flex-col gap-5">
        <h1>Viaje por Perú: ¡Experiencias inolvidables!</h1>
        <p>
            Descubrir Perú es embarcarse en una aventura llena de contrastes, historia milenaria y paisajes que quitan
            el aliento. Desde la majestuosidad de Machu Picchu hasta la inmensidad del desierto de Paracas, cada rincón
            del país ofrece una experiencia única e inolvidable. En este viaje, te llevaremos por los sabores de su
            gastronomía, los misterios de sus antiguas civilizaciones y la calidez de su gente. Prepárate para explorar
            un Perú que va mucho más allá de los destinos turísticos tradicionales.
        </p>
    </div>
    <div class="pt-10 flex flex-col gap-10">
        <div class="container flex flex-col lg:flex-row gap-7 justify-center">
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
                        <h1 class="text-2xl font-bold text-primary my-0">Perú Fantástico: Una experiencia completa</h1>
                        <p>Este tour de 13 días lo llevará a través de los destinos más famosos de Perú, incluidos
                            Paracas, Cusco, Machu Picchu, la Montaña de Colores y el Lago Titicaca, combinando aventura,
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
                        <h1 class="text-2xl font-bold text-primary my-0">Perú Fantástico: Una experiencia completa</h1>
                        <p>Este tour de 13 días lo llevará a través de los destinos más famosos de Perú, incluidos
                            Paracas, Cusco, Machu Picchu, la Montaña de Colores y el Lago Titicaca, combinando aventura,
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
                        <h1 class="text-2xl font-bold text-primary my-0">Perú Fantástico: Una experiencia completa</h1>
                        <p>Este tour de 13 días lo llevará a través de los destinos más famosos de Perú, incluidos
                            Paracas, Cusco, Machu Picchu, la Montaña de Colores y el Lago Titicaca, combinando aventura,
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
        <div class="w-full flex justify-center">
            <a href="" class="py-4 px-16 bg-primary text-white font-medium !no-underline"><span>VER MÁS
                    EXPERIENCIAS</span></a>
        </div>
    </div>
</section>
<!-- MENSAJE -->
<section>
    <div class=""
        style="background: linear-gradient(0deg, rgba(65, 24, 13, 0.50) 0%, rgba(65, 24, 13, 0.50) 100%), url('<?php echo get_template_directory_uri(); ?>/assets/images/pallayponcho.webp') lightgray 0px -750.816px / 100% 790.241% no-repeat;">
        <div class="container py-12 flex gap-12 justify-center items-center flex-wrap">
            <div class="flex flex-col gap-2.5 text-white">
                <span class="text-5xl font-medium text-center">Aventuras hechas a tu medida </span>
                <span class="text-2xl font-normal text-center">Cada viaje con “Kuntur Spirit” es único.</span>
            </div>
            <div class="border-r border-white h-24 hidden lg:block"></div>
            <div class="">
                <a href="" class="bg-white text-primary py-2.5 lg:py-4 px-10 lg:px-12 font-semibold"><span>CONTACTANOS</span></a>
            </div>
        </div>
    </div>

</section>
<section>
    <div class="container flex flex-col gap-10">
        <div class="flex flex-col gap-5">
            <h1>Aventura - Trekking más populares</h1>
            <p class="text-center">Explora las mejores rutas de trekking en Perú con KUNTUR SPIRIT Travel. Descubre
                aventuras inolvidables entre montañas, valles y paisajes impresionantes. ¡Empieza tu travesía hoy!</p>
        </div>
        <div class="flex justify-center gap-5 items-center">
            <i class="fa-solid fa-chevron-left" style=""></i>
            <div class="flex gap-5 items-center" style="">
                <div class="" style="flex: 1 1 0;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour.png" alt="">
                </div>
                <div class="hidden md:block" style="flex: 1 1 0;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour.png" alt="">
                </div>
                <div class="hidden lg:block" style="flex: 1 1 0;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour.png" alt="">
                </div>
                <div class="hidden lg:block" style="flex: 1 1 0;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour.png" alt="">
                </div>

            </div>
            <i class="fa-solid fa-chevron-right" style=""></i>
        </div>


    </div>
</section>
<section>
    <div class="container flex flex-col gap-10">
        <div class="flex flex-col gap-5">
            <h1>Lo que dicen nuestros clientes</h1>
            <p class="text-center">
                Estamos orgullosos de cuidar cada detalle de nuestros servicios para nuestros clientes, la satisfacción
                plena de nuestros viajeros es nuestra mejor recompensa y son ellos nuestros mejores defensores y quienes
                con frecuencia, nos recomiendan a familiares o amigos cuando planifican un viaje a nuestra región.
            </p>
        </div>
        <div class="flex justify-center gap-5 items-center">
            <i class="fa-solid fa-chevron-left"></i>
            <div class="flex gap-5 items-center">
                <div class="" style="flex: 1 1 0;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/comentario.png" alt="">
                </div>
                <div class="hidden md:block" style="flex: 1 1 0;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/comentario.png" alt="">
                </div>
                <div class="hidden lg:block" style="flex: 1 1 0;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/comentario.png" alt="">
                </div>

            </div>
            <i class="fa-solid fa-chevron-right"></i>
        </div>

    </div>
</section>
<section>
    <div class="container flex flex-col gap-10">
        <div class="flex flex-col gap-5">
            <h1>¿Por que viajar con Kuntur Spirit?</h1>
            <p class="text-center">
                Reserva tu estancia y disfruta de una experiencia única con Tierras de los Andes, especialista en viajes
                personalizados en Perú.
            </p>
        </div>
        <div class="flex flex-wrap gap-5 justify-center">
            <div class="flex flex-col justify-between py-5 items-center bg-white min-w-[200px] max-w-[300px]"
                style="flex: 1 0 0; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.10);">
                <div class="flex flex-col py-2.5 px-5 items-center gap-1.5">
                    <p class="text-center text-primary font-semibold text-2xl">Calidad de servicios </p>
                    <p class="text-center text-sm">Medir la calidad real y detectar defectos en un programa es control de
                        calidad.</p>

                </div>
            </div>
            <div class="flex flex-col justify-between py-5 items-center bg-white min-w-[200px] max-w-[300px]"
                style="flex: 1 0 0; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.10);">
                <div class="flex flex-col py-2.5 px-5 items-center gap-1.5">
                    <p class="text-center text-primary font-semibold text-2xl">Viajes a medida</p>
                    <p class="text-center text-sm">Viaje sin preocupaciones con diseño personalizado y satisfacción garantizada.
                    </p>

                </div>
            </div>
            <div class="flex flex-col justify-between py-5 items-center bg-white min-w-[200px] max-w-[300px]"
                style="flex: 1 0 0; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.10);">
                <div class="flex flex-col py-2.5 px-5 items-center gap-1.5">
                    <p class="text-center text-primary font-semibold text-2xl">Sostenibilidad</p>
                    <p class="text-center text-sm">Nos preocupamos por preservar el entorno natural y cultural de Perú</p>

                </div>
            </div>
            <div class="flex flex-col justify-between py-5 items-center bg-white min-w-[200px] max-w-[300px]"
                style="flex: 1 0 0; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.10);">
                <div class="flex flex-col py-2.5 px-5 items-center gap-1.5">
                    <p class="text-center text-primary font-semibold text-2xl">Espíritu de aventura</p>
                    <p class="text-center text-sm">Viva y cultive en el día a día el espíritu de aventura en el Perú.</p>

                </div>
            </div>
            <div class="flex flex-col justify-between py-5 items-center bg-white min-w-[200px] max-w-[300px]"
                style="flex: 1 0 0; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.10);">
                <div class="flex flex-col py-2.5 px-5 items-center gap-1.5">
                    <p class="text-center text-primary font-semibold text-2xl">Respeto por la comunidad local</p>
                    <p class="text-center text-sm">Viva y cultive en el día a día el espíritu de aventura en el Perú.</p>

                </div>
            </div>
        </div>


    </div>
</section>
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
<section>
    <div class="container flex flex-col gap-10">
        <div class="flex flex-col gap-5">
            <h1>Travel Associations & Certifications</h1>

        </div>
        <!-- logos enpresas -->
        <div class="flex gap-8 w-full justify-center items-center flex-wrap">
            <div class="flex-[1_0_0] h-full flex items-center min-w-[100px]">
                <img class="max-h-[70px]"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/instituciones/mincultura.png"
                    alt="logo ministerio de cultura" class="w-32">
            </div>
            <div class="xl:flex-[1_0_0] h-full flex items-center min-w-[100px]">
                <img class="max-h-[70px]"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/instituciones/protegeme.png"
                    alt="logo ministerio de cultura" class="w-32">
            </div>
            <div class="xl:flex-[1_0_0] h-full flex items-center min-w-[100px]">
                <img class="max-h-[70px]"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/instituciones/perulogo.png"
                    alt="logo ministerio de cultura" class="w-32">
            </div>
            <div class="xl:flex-[1_0_0] h-full flex items-center min-w-[100px]">
                <img class="max-h-[70px]"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/instituciones/gercetur.png"
                    alt="logo ministerio de cultura" class="w-32">
            </div>
            <div class="xl:flex-[1_0_0] h-full flex items-center min-w-[100px]">
                <img class="max-h-[70px]"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/instituciones/promperu.png"
                    alt="logo ministerio de cultura" class="w-32">
            </div>
            <div class="xl:flex-[1_0_0] h-full flex items-center min-w-[100px]">
                <img class="max-h-[70px]"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/instituciones/tripadvisor.png"
                    alt="logo ministerio de cultura" class="w-32">
            </div>
            <div class="xl:flex-[1_0_0] h-full flex items-center min-w-[100px]">
                <img class="max-h-[70px]"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/instituciones/safetravels.png"
                    alt="logo ministerio de cultura" class="w-32">
            </div>

        </div>


    </div>
</section>
<?php
get_footer();
