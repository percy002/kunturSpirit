<?php
/**
 * single-tour.php
 *
 * @package TailPress
 */

$resumen_descripcion = get_field('resumen_descripcion') ? get_field('resumen_descripcion') : 'No disponible';
$precio_oferta = get_field('precio_oferta') ? get_field('precio_oferta') : 'No disponible';
$precio_regular = get_field('precio_regular') ? get_field('precio_regular') : 'No disponible';
$duracion = get_field('duracion') ? get_field('duracion') : 'No disponible';
$imagen_portada = get_field('imagen_portada') ? get_field('imagen_portada') : [
    'url' => get_template_directory_uri() . '/assets/images/mapi.webp',
    'alt' => 'Imagen de portada del tour'
];
$descripcion_general = get_field('descripcion_general') ? get_field('descripcion_general') : 'No disponible';

$dias = [];
for ($i = 1; $i <= 15; $i++) {
    $dia = get_field('dia_' . $i);

    if ($dia && is_array($dia) && !empty($dia['titulo'])) {
        $dias[$i] = $dia;
    }
}


$incluye = get_field('incluye') ? get_field('incluye') : 'No disponible';
$no_incluye = get_field('no_incluye') ? get_field('no_incluye') : 'No disponible';

$info_precio_tour = get_field('info_precio_tour') ? get_field('info_precio_tour') : 'No disponible';

$infoHeroTour = array(
    'imagen_url' => $imagen_portada['url'],
    'title' => get_the_title() ? get_the_title() : 'No disponible',
    'descripcion' => $resumen_descripcion,
    'precio' => $precio_oferta,
    'duracion' => $duracion,
    'heroType' => 'tour',
);
get_header();
?>
<?php get_template_part('template-parts/hero', null, $infoHeroTour); ?>
<div class="container lg:hidden">
    <p class="text-center text-base my-2.5"><?= $resumen_descripcion ?></p>
</div>
<div class="lg:flex lg:gap-8 container bg-white lg:bg-transparent lg:pr-[100px] lg:pl-[100px]">
    <!-- CONTENIDO -->

    <div class="lg:flex-2 bg-white lg:px-5">
        <!-- RESUMEN -->
        <!-- RESUMEN -->
        <details class="lg:hidden bg-white px-2.5 md:px-12 py-3">
            <summary
                class="cursor-pointer text-xl text-secondary select-none flex gap-2.5 justify-between items-center border-b-2 border-gray-300">
                <div class="font-bold flex gap-2.5 items-center"><span class="text-lg"><i
                            class="fa-solid fa-clipboard"></i></span>Resumen</div>
                <i class="fa-solid fa-chevron-down icon-chevron transition-transform duration-600"></i>
            </summary>
            <div class="">
                <h1 class="text-start">Descripción General</h1>
                <?php echo $descripcion_general ?>
            </div>
        </details>
        <section id="resumen-tour" class="hidden lg:block">
            <div class="flex flex-col gap-2.5">
                <h1 class="text-start">Descripción General</h1>
                <?php echo $descripcion_general ?>
            </div>
        </section>

        <!-- ITINERARIO -->
        <details class="lg:hidden bg-white px-2.5 md:px-12 py-3">
            <summary
                class="cursor-pointer text-xl text-secondary select-none flex gap-2.5 justify-between items-center border-b-2 border-gray-300">
                <div class="font-bold flex gap-2.5 items-center"><span class="text-lg"><i
                            class="fa-solid fa-map-location-dot"></i></span>Itinerario</div>
                <i class="fa-solid fa-chevron-down icon-chevron transition-transform duration-600"></i>
            </summary>
            <div class="">
                <h1 class="text-start">Itinerario Detallado</h1>
                <!-- CONTENIDO DE ITINERARIO -->
                <div class="flex flex-col">
                    <!-- dia 1 -->
                    <?php foreach ($dias as $numero => $dia): ?>
                        <div class="flex gap-5 mb-4">
                            <div class="flex flex-col">
                                <div
                                    class="flex flex-col rounded-4xl bg-primary text-white w-14 h-14 items-center justify-center p-3">
                                    <span class="font-medium">Día</span>
                                    <span class="text-2xl font-bold"><?= str_pad($numero, 2, '0', STR_PAD_LEFT); ?></span>
                                </div>
                                <div class="relative h-full">
                                    <div class="absolute left-1/2 top-0 h-full border-l-4 border-dashed border-primary">
                                    </div>
                                </div>
                            </div>
                            <section class="p-0 flex-1">
                                <div class="flex justify-center">
                                    <h1 class="text-2xl font-bold text-start m-0"><?= esc_html($dia['titulo']) ?></h1>
                                </div>
                                <div>
                                    <?= wp_kses_post($dia['descripcion']) ?>
                                </div>
                                <!-- imágenes de itinerario -->
                                <div class="">
                                    <?php if (!empty($dia['imagenes'])): ?>
                                        <!-- Swiper Container -->
                                        <div class="swiper imagenSwiper max-w-[60dvw]">
                                            <div class="swiper-wrapper">
                                                <?php for ($j = 1; $j <= 3; $j++): ?>
                                                    <?php if ($img = $dia['imagenes']['imagen_' . $j] ?? null): ?>
                                                        <?php
                                                        // Obtener URL y dimensiones (originales)
                                                        if (is_numeric($img)) {
                                                            $img_url = wp_get_attachment_image_url($img, 'large'); // Usa 'large' en lugar de 'full' para evitar imágenes gigantes
                                                            $img_alt = get_post_meta($img, '_wp_attachment_image_alt', true) ?: 'Imagen del día';
                                                        } else {
                                                            $img_url = is_array($img) ? ($img['url'] ?? '') : $img;
                                                            $img_alt = is_array($img) ? ($img['alt'] ?? 'Imagen del día') : 'Imagen del día';
                                                        }

                                                        if ($img_url): ?>
                                                            <!-- Slide con tamaño forzado -->
                                                            <div class="swiper-slide !h-[220px] !w-[250px] aspect-auto self-stretch">
                                                                <!-- Ancho fijo para 3 columnas -->
                                                                <a href="<?= esc_url($img_url) ?>" data-pswp-width="1080"
                                                                    data-pswp-height="720" class="gallery-link block h-full group">
                                                                    <div class="">
                                                                        <img src="<?= esc_url($img_url) ?>" alt="<?= esc_attr($img_alt) ?>"
                                                                            class="swiper-image w-full h-full object-cover object-center"
                                                                            loading="lazy" /> <!-- Lazy loading para mejor performance -->
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                            </div>
                                            <!-- Navigation Buttons -->
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </section>

                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </details>
        <section id="itinerario-tour" class="hidden lg:block">
            <div class="flex flex-col gap-5">
                <h1 class="text-start">Itinerario Detallado</h1>

                <!-- CONTENIDO DE ITINERARIO -->
                <div class="flex flex-col">
                    <!-- dia 1 -->
                    <?php foreach ($dias as $numero => $dia): ?>
                        <div class="flex gap-5 mb-4">
                            <div class="flex flex-col">
                                <div
                                    class="flex flex-col rounded-4xl bg-primary text-white w-14 h-14 items-center justify-center p-3">
                                    <span class="font-medium">Día</span>
                                    <span class="text-2xl font-bold"><?= str_pad($numero, 2, '0', STR_PAD_LEFT); ?></span>
                                </div>
                                <div class="relative h-full">
                                    <div class="absolute left-1/2 top-0 h-full border-l-4 border-dashed border-primary">
                                    </div>
                                </div>
                            </div>
                            <section class="p-0 flex-1">
                                <div class="h-14 flex flex-col justify-center">
                                    <h1 class="text-2xl font-bold text-start m-0"><?= esc_html($dia['titulo']) ?></h1>
                                </div>
                                <div>
                                    <?= wp_kses_post($dia['descripcion']) ?>
                                </div>
                                <div class="">

                                    <?php if (!empty($dia['imagenes'])): ?>
                                        <!-- Swiper Container -->
                                        <div class="swiper imagenSwiper ">
                                            <div class="swiper-wrapper">
                                                <?php for ($j = 1; $j <= 3; $j++): ?>
                                                    <?php if ($img = $dia['imagenes']['imagen_' . $j] ?? null): ?>
                                                        <?php
                                                        // Obtener URL y dimensiones (originales)
                                                        if (is_numeric($img)) {
                                                            $img_url = wp_get_attachment_image_url($img, 'large'); // Usa 'large' en lugar de 'full' para evitar imágenes gigantes
                                                            $img_alt = get_post_meta($img, '_wp_attachment_image_alt', true) ?: 'Imagen del día';
                                                        } else {
                                                            $img_url = is_array($img) ? ($img['url'] ?? '') : $img;
                                                            $img_alt = is_array($img) ? ($img['alt'] ?? 'Imagen del día') : 'Imagen del día';
                                                        }

                                                        if ($img_url): ?>
                                                            <!-- Slide con tamaño forzado -->
                                                            <div class="swiper-slide !h-[220px] !w-[250px] aspect-auto self-stretch">
                                                                <!-- Ancho fijo para 3 columnas -->
                                                                <a href="<?= esc_url($img_url) ?>" data-pswp-width="1080"
                                                                    data-pswp-height="720" class="gallery-link block h-full group">
                                                                    <div
                                                                        class="h-64 w-full overflow-hidden rounded-lg bg-gray-100 shadow-md md:h-72 lg:h-80">
                                                                        <img src="<?= esc_url($img_url) ?>" alt="<?= esc_attr($img_alt) ?>"
                                                                            class="swiper-image w-full h-full object-cover object-center"
                                                                            loading="lazy" /> <!-- Lazy loading para mejor performance -->
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                            </div>
                                            <!-- Navigation Buttons -->
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </section>

                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- QUE INCLUYE -->
        <details class="lg:hidden bg-white px-2.5 md:px-12 py-3">
            <summary
                class="cursor-pointer text-xl text-secondary select-none flex gap-2.5 justify-between items-center border-b-2 border-gray-300">
                <div class="font-bold flex gap-2.5 items-center"><span class="text-lg"><i
                            class="fa-solid fa-clipboard"></i></span>¿Qué Incluye el paquete?
                </div>
                <i class="fa-solid fa-chevron-down icon-chevron transition-transform duration-600"></i>
            </summary>
            <div class="">
                <div class="flex flex-col gap-2.5">
                    <h1 class="text-start">¿Qué Incluye?</h1>
                    <p>Este paquete ha sido cuidadosamente diseñado para brindarte una experiencia completa, cómoda y
                        sin
                        preocupaciones. </p>
                    <div class="flex flex-col gap-2.5">
                        <!-- ¿QUE INCLUYE? -->
                        <h2 class="text-primary">Incluye</h2>
                        <div class="flex flex-col ">
                            <ul class="list-disc pl-5">
                                <?php foreach ($incluye as $item): ?>
                                    <li><?= esc_html($item) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <!-- NO INCLUYE -->
                        <h2 class="text-primary">No Incluye</h2>
                        <p>Este paquete no contempla algunos gastos personales ni servicios adicionales que pueden ser
                            útiles para
                            tu viaje:</p>
                        <div class="flex flex-col ">
                            <ul class="list-disc pl-5">
                                <?php foreach ($incluye as $item): ?>
                                    <li><?= esc_html($item) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <section id="incluye-tour" class="hidden lg:block">
            <div class="flex flex-col gap-2.5">
                <h1 class="text-start">¿Qué Incluye?</h1>
                <p>Este paquete ha sido cuidadosamente diseñado para brindarte una experiencia completa, cómoda y sin
                    preocupaciones. </p>
                <div class="flex flex-col gap-2.5">
                    <!-- ¿QUE INCLUYE? -->
                    <h2 class="text-primary">Incluye</h2>
                    <div class="flex flex-col ">
                        <ul class="list-disc pl-5">
                            <?php foreach ($incluye as $item): ?>
                                <li><?= esc_html($item) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <!-- NO INCLUYE -->
                    <h2 class="text-primary">No Incluye</h2>
                    <p>Este paquete no contempla algunos gastos personales ni servicios adicionales que pueden ser
                        útiles para
                        tu viaje:</p>
                    <div class="flex flex-col ">
                        <ul class="list-disc pl-5">
                            <?php foreach ($incluye as $item): ?>
                                <li><?= esc_html($item) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- MAS INFORMACION -->
        <details class="lg:hidden bg-white px-2.5 md:px-12 py-3">
            <summary
                class="cursor-pointer text-xl text-secondary select-none flex gap-2.5 justify-between items-center border-b-2 border-gray-300">
                <div class="font-bold flex gap-2.5 items-center"><span class="text-lg"><i
                            class="fa-solid fa-circle-question"></i></span>Antes de viajar</div>
                <i class="fa-solid fa-chevron-down icon-chevron transition-transform duration-600"></i>
            </summary>
            <section id="mas-informacion" class="bg-primary text-white">
                <div class="container flex flex-col gap-2.5">
                    <h1 class="text-start text-white">Más Información</h1>
                    <div class="">
                        <h2>Consideraciones importantes:</h2>
                        <ul class="list-disc pl-5">
                            <li>Los horarios de vuelos y traslados están sujetos a disponibilidad y confirmación previa.
                            </li>
                            <li>El orden del itinerario puede variar por condiciones climáticas o factores logísticos
                                sin
                                alterar el
                                contenido del tour.</li>
                            <li>Para la visita a Machu Picchu, el ingreso es en horario programado, se recomienda llegar
                                con
                                anticipación.</li>
                            <li>Las excursiones requieren un nivel físico moderado (especialmente Montaña de 7 Colores y
                                Laguna
                                Humantay).</li>
                            <li>En temporada alta (junio-agosto), es recomendable reservar con al menos 30 días de
                                anticipación.
                            </li>
                            <li>Todos los servicios están sujetos a condiciones y políticas de la agencia y operadores
                                locales.</li>
                        </ul>
                        <h2>Recomendaciones para tu viaje:</h2>
                        <ul class="list-disc pl-5">
                            <li>Llevar pasaporte o documento de identidad vigente (requisito obligatorio para ingresos a
                                sitios
                                arqueológicos).</li>
                            <li>Usar calzado cómodo para caminatas y ropa en capas (el clima puede variar durante el
                                día).
                            </li>
                            <li>Protegerse del sol: sombrero, lentes de sol y bloqueador solar.</li>
                            <li>En altura (Cusco, Puno), se recomienda aclimatarse el primer día y mantenerse bien
                                hidratado.</li>
                            <li>Para rutas de montaña: llevar una pequeña mochila con agua, snacks, poncho de lluvia y
                                abrigo
                                ligero.</li>
                            <li>Consultar con su médico sobre el mal de altura si tiene condiciones preexistentes.</li>
                        </ul>
                        <h2>Formas de pago:</h2>
                        <ul class="list-disc pl-5">
                            <li>Aceptamos transferencias bancarias nacionales e internacionales, pagos con tarjeta de
                                crédito o
                                débito, y
                                PayPal.</li>
                            <li>Se puede realizar el pago en cuotas previas a la fecha del viaje (consultar plan de
                                pagos
                                con
                                nuestros
                                agentes).</li>
                            <li> Para confirmar la reserva se requiere un adelanto mínimo del 50% del total del paquete.
                            </li>
                            <li> El saldo restante debe ser cancelado hasta 7 días antes del inicio del viaje.</li>
                            <li>Todos los pagos son gestionados con seguridad y respaldo.</li>
                        </ul>
                    </div>
                </div>
            </section>
        </details>
        <section id="mas-informacion" class="bg-primary text-white hidden lg:block">
            <div class="container flex flex-col gap-2.5">
                <h1 class="text-start text-white">Más Información</h1>
                <div class="">
                    <h2>Consideraciones importantes:</h2>
                    <ul class="list-disc pl-5">
                        <li>Los horarios de vuelos y traslados están sujetos a disponibilidad y confirmación previa.
                        </li>
                        <li>El orden del itinerario puede variar por condiciones climáticas o factores logísticos sin
                            alterar el
                            contenido del tour.</li>
                        <li>Para la visita a Machu Picchu, el ingreso es en horario programado, se recomienda llegar con
                            anticipación.</li>
                        <li>Las excursiones requieren un nivel físico moderado (especialmente Montaña de 7 Colores y
                            Laguna
                            Humantay).</li>
                        <li>En temporada alta (junio-agosto), es recomendable reservar con al menos 30 días de
                            anticipación.
                        </li>
                        <li>Todos los servicios están sujetos a condiciones y políticas de la agencia y operadores
                            locales.</li>
                    </ul>
                    <h2>Recomendaciones para tu viaje:</h2>
                    <ul class="list-disc pl-5">
                        <li>Llevar pasaporte o documento de identidad vigente (requisito obligatorio para ingresos a
                            sitios
                            arqueológicos).</li>
                        <li>Usar calzado cómodo para caminatas y ropa en capas (el clima puede variar durante el día).
                        </li>
                        <li>Protegerse del sol: sombrero, lentes de sol y bloqueador solar.</li>
                        <li>En altura (Cusco, Puno), se recomienda aclimatarse el primer día y mantenerse bien
                            hidratado.</li>
                        <li>Para rutas de montaña: llevar una pequeña mochila con agua, snacks, poncho de lluvia y
                            abrigo
                            ligero.</li>
                        <li>Consultar con su médico sobre el mal de altura si tiene condiciones preexistentes.</li>
                    </ul>
                    <h2>Formas de pago:</h2>
                    <ul class="list-disc pl-5">
                        <li>Aceptamos transferencias bancarias nacionales e internacionales, pagos con tarjeta de
                            crédito o
                            débito, y
                            PayPal.</li>
                        <li>Se puede realizar el pago en cuotas previas a la fecha del viaje (consultar plan de pagos
                            con
                            nuestros
                            agentes).</li>
                        <li> Para confirmar la reserva se requiere un adelanto mínimo del 50% del total del paquete.
                        </li>
                        <li> El saldo restante debe ser cancelado hasta 7 días antes del inicio del viaje.</li>
                        <li>Todos los pagos son gestionados con seguridad y respaldo.</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- PRECIO DEL TOUR -->
        <details class="lg:hidden bg-white px-2.5 md:px-12 py-3">
            <summary
                class="cursor-pointer text-xl text-secondary select-none flex gap-2.5 justify-between items-center border-b-2 border-gray-300">
                <div class="font-bold flex gap-2.5 items-center"><span class="text-lg"><i
                            class="fa-solid fa-hand-holding-dollar"></i></span>Precio</div>
                <i class="fa-solid fa-chevron-down icon-chevron transition-transform duration-600"></i>
            </summary>
            <section id="precio-tour">
                <div class="">
                    <h1 class="text-primary text-start">Precio del Tour</h1>
                    <?php echo $info_precio_tour; ?>
                </div>
            </section>
        </details>
        <section id="precio-tour" class="hidden lg:block">
            <div class="">
                <h1 class="text-primary text-start">Precio del Tour</h1>
                <?php echo $info_precio_tour; ?>
            </div>
        </section>
    </div>
    <!-- SIDEBAR -->
    <aside class="hidden lg:flex flex-1 flex-col justify-start h-full sticky top-16">
        <section class="">
            <div class="p-3 bg-secondary text-white flex flex-col gap-2.5">
                <span class="bg-[#D88027CC] px-2.5 rounded-xl flex items-center w-fit text-base"><?= $duracion ?></span>
                <span class="bg-[#D88027CC] px-2.5 rounded-xl flex items-center w-fit text-base">GRUPAL / PRIVADO</span>
                <span class="text-[10px] flex items-center">Antes: <span class="text-xs line-through ml-1">US$
                        <?= $precio_regular ?></span></span>
                <span class="text-xl flex items-center gap-2.5">Desde: <span class="text-3xl font-bold">US$
                        <?= $precio_oferta ?></span></span>

                <span>¿Necesitas Ayuda?</span>
                <button class="py-1.5 px-5 bg-white w-fit"><span class="text-2xl text-primary font-semibold">Consulte
                        Ahora</span></button>

            </div>
            <div class="p-10 flex flex-col gap-1.5" style="background: rgba(0, 0, 0, 0.10);">
                <div class="p-5 flex flex-col gap-1.5">
                    <a href="#resumen-tour" class="flex gap-2.5 items-center text-secondary"><span class="text-lg"><i
                                class="fa-solid fa-clipboard"></i></span><span
                            class="text-lg font-bold">Resumen</span></a>
                    <hr class="border-b-2 border-primary w-full">
                    <a href="#itinerario-tour" class="flex gap-2.5 items-center text-secondary"><span class="text-lg"><i
                                class="fa-solid fa-map-location-dot"></i></span><span
                            class="text-lg font-bold">Itinerario</span></a>
                    <hr class="border-b-2 border-primary w-full">
                    <a href="#incluye-tour" class="flex gap-2.5 items-center text-secondary"><span class="text-lg"><i
                                class="fa-solid fa-clipboard"></i></span><span
                            class="text-lg font-bold">Incluye</span></a>
                    <hr class="border-b-2 border-primary w-full">
                    <a href="#mas-informacion" class="flex gap-2.5 items-center text-secondary"><span class="text-lg"><i
                                class="fa-solid fa-circle-question"></i></span><span class="text-lg font-bold">Antes de
                            Viajar</span></a>
                    <hr class="border-b-2 border-primary w-full">
                    <a href="#precio-tour" class="flex gap-2.5 items-center text-secondary"><span class="text-lg"><i
                                class="fa-solid fa-hand-holding-dollar"></i></span><span
                            class="text-lg font-bold">Precio</span></a>
                    <hr class="border-b-2 border-primary w-full">
                </div>

                <div class="mt-2">
                    <button class="py-4 px-10 bg-primary w-fit"><span class="text-xl text-white font-semibold">Reserva
                            Ahora</span></button>

                </div>

            </div>
        </section>
    </aside>
</div>

<!-- PREGUNTAS FRECUENTES -->
<?php get_template_part('template-parts/preguntasFrecuentes') ?>

<!-- FOOTER DE TOURS -->
<div id="floating-banner"
    class="fixed bottom-0 w-full lg:hidden transform translate-y-full transition-transform duration-300"
    style="background: linear-gradient(180deg, #865042 -70.62%, #41180D 70.62%);">
    <div class="p-2.5 flex justify-between items-center">
        <div class="text-white flex flex-col gap-2.5 p-5">
            <span class="text-[10px] flex items-center">Antes: <span class="text-xs line-through ml-1">US$
                    <?= $precio_regular ?></span></span>
            <span class="text-sm flex items-center gap-2.5">Desde: <span class="text-sm font-bold">US$
                    <?= $precio_oferta ?></span></span>
        </div>
        <button class="bg-white text-primary px-2 py-1 text-base font-bold rounded-sm">Consulte Ahora</button>
        <div class="bg-[#075E54] rounded-4xl p-2">
            <a href="#" class="flex bg-[#075E54]">
                <img class="h-10 w-10" src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.webp"
                    alt="">
            </a>
        </div>
    </div>
</div>
<script>
    window.addEventListener('scroll', function () {
        const floatingBanner = document.getElementById('floating-banner');
        const currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop;

        if (currentScrollPosition > 50 && currentScrollPosition > 0) {
            // Scroll hacia abajo y pasó el threshold - mostrar banner
            floatingBanner.classList.remove('translate-y-full');
            floatingBanner.classList.add('translate-y-0');
        } else if (currentScrollPosition < 50) {
            // Scroll arriba del threshold - ocultar banner
            floatingBanner.classList.remove('translate-y-0');
            floatingBanner.classList.add('translate-y-full');
        }

        lastScrollPosition = currentScrollPosition;
    });
</script>
<?php
get_footer();