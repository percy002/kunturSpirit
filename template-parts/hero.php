<?php
$imagen_url = $args['imagen_url'] ?? '';
$title = $args['title'] ?? '';
$descripcion = $args['descripcion'] ?? '';
$duracion = $args['duracion'] ?? '';
$precio = $args['precio'] ?? '';
$heroType = $args['heroType'];
?>
<section class="py-0">
    <div class="carousel h-dvh bg-center bg-no-repeat"
        style="background: linear-gradient(180deg, rgba(65, 24, 13, 0.80) 0%, rgba(0, 0, 0, 0.00) 100%), url('<?= $imagen_url ?>')  0px -233.718px / 100% 132.74% no-repeat;">

        <div class="flex h-full pt-0 pr-[150px] pl-[150px] flex-col justify-center gap-8">
            <div class="flex text-white flex-col gap-2.5  w-[500px]">
                <h1 class="text-start text-[<?php $heroType == "tour" ? '40px' : '64px' ?>] text-white"><?= $title ?>
                </h1>
                <p class=""><?= $descripcion ?></p>
                <hr class="border-t-2 border-light w-full">
                <?php if ($heroType == "tour"): ?>
                    <div class="flex gap-5">
                        <span class="bg-[#D88027CC] px-2.5 rounded-xl flex items-center"><?= $duracion ?></span>
                        <span class="bg-[#D88027CC] px-2.5 rounded-xl flex items-center">GRUPAL / PRIVADO</span>
                        <div class="flex gap-2.5 items-center">
                            <span class="flex items-center">Desde: </span><span
                                class="text-xl font-extrabold flex items-center"> US$ <?= $precio ?> </span>

                        </div>
                    </div>
                <?php endif; ?>

            </div>
            <a href=""><span class="py-2 px-5 bg-primary text-white font-bold">RESERVAR AHORA</span></a>

        </div>
    </div>

</section>