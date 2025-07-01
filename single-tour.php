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

<div class="lg:flex lg:gap-8 container bg-white lg:bg-transparent">
    <!-- CONTENIDO -->
    <div class="lg:flex-2 bg-white lg:px-5">
        <section id="resumen-tour">
            <div class="flex flex-col gap-2.5">
                <h1 class="text-start">Descripción General</h1>
                <?php echo $descripcion_general ?>
            </div>
        </section>

        <!-- ITINERARIO -->
        <section id="itinerario-tour">
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
                            </section>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- QUE INCLUYE -->
        <section id="incluye-tour">
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
        <section id="mas-informacion" class="bg-primary text-white">
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
        <section id="precio-tour">
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
                        1250</span></span>
                <span class="text-xl flex items-center gap-2.5">Desde: <span class="text-3xl font-bold">US$
                        <?= $precio ?></span></span>

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
<div class="fixed bottom-0 w-full lg:hidden"
    style="background: linear-gradient(180deg, #865042 -70.62%, #41180D 70.62%);">
    <div class="container flex justify-between items-center ">
        <div class="text-white flex flex-col gap-2.5 p-5">
            <span class="text-[10px] flex items-center">Antes: <span class="text-xs line-through ml-1">US$
                    1250</span></span>
            <span class="text-xl flex items-center gap-2.5">Desde: <span class="text-3xl font-bold">US$
                    <?= $precio ?></span></span>

        </div>
        <button class="bg-white text-primary px-5 py-2.5 text-base font-bold">Consulte Ahora</button>
        <div class="bg-[#075E54] rounded-4xl p-2">
            <a href="flex bg-[#075E54] ">
                <img class="h-10 w-10" src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.webp"
                    alt="">
            </a>
        </div>
    </div>
</div>

<?php
get_footer();