<?php
$imagen_url = $args['imagen_url'] ?? '';
$title = $args['title'] ?? '';
$descripcion = $args['descripcion'] ?? '';
$duracion = $args['duracion'] ?? '';
$precio = $args['precio'] ?? '';
$heroType = $args['heroType'] ?? '';
?>
<section class="py-0">

    <div class="carousel h-dvh max-h-[700px]"
        style="background: linear-gradient(180deg, rgba(65, 24, 13, 0.80) 0%, rgba(0, 0, 0, 0.00) 100%), url('<?= esc_url($imagen_url) ?>') center bottom / cover no-repeat;">

        <div class="flex h-full pt-0 px-2.5 md:pr-[100px] md:pl-[100px] flex-col justify-center gap-8">
            <div class="flex text-white flex-col gap-2.5  w-[500px] max-w-11/12">
                <h1 class="text-start text-[<?php $heroType == "tour" ? '40px' : '64px' ?>] text-white"><?= $title ?>
                </h1>
                <?php if ($heroType != 'layout'): ?>
                    <p class=""><?= $descripcion ?></p>
                    <hr class="border-t-2 border-light w-full">
                    <?php if ($heroType == "tour"): ?>
                        <div class="flex gap-5 flex-col sm:flex-row">
                            <div class="flex gap-5">
                                <span class="bg-[#D88027CC] px-2.5 rounded-xl flex items-center"><?= $duracion ?></span>
                                <span class="bg-[#D88027CC] px-2.5 rounded-xl flex items-center">GRUPAL / PRIVADO</span>
                            </div>
                            <div class="flex gap-2.5 items-center">
                                <span class="flex items-center">Desde: </span><span
                                    class="text-xl font-extrabold flex items-center"> US$ <?= $precio ?> </span>

                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

            </div>
            <?php if ($heroType != 'layout'): ?>

                <a href="https://wa.me/51962736111?text=<?php echo rawurlencode(
                                                            "Estoy interesado en el tour {$title}.\nDetalles:\n\nDuración: {$duracion}\nPrecio: US$ {$precio}\n" . esc_url($_SERVER['REQUEST_URI']) . "\n\nQuisiera más información, por favor."
                                                        ); ?>" target="_blank">
                    <span class="py-2 px-5 bg-primary text-white font-bold">RESERVAR AHORA</span>
                </a> <?php endif; ?>

        </div>
    </div>

</section>