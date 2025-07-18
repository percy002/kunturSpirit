<article class="col-span-1 flex flex-col items-center bg-white max-w-[400px] flex-1">
    <div class="w-full">
        <img class="w-full h-full object-cover object-center" src="<?= esc_url($imagen) ?>" alt="">
    </div>
    <div class="flex flex-col gap-1.5 items-center p-2.5 self-stretch">
        <!-- etiquetas -->
        <div class="flex justify-between py-0 px-2.5 w-full">
            <div class="flex items-center gap-1.5 text-sm">
                <span class="text-tertiary"><i class="fa-solid fa-clock"></i></span>
                <span class="text-light"><?= esc_html($duracion) ?></span>
            </div>
            <div class="bg-tertiary flex items-center px-2.5 py-1 rounded-xl">
                <span class="text-sm text-white"><?= esc_html($modalidad) ?></span>
            </div>
        </div>

        <!-- contenido -->
        <div class="flex flex-col gap-1.5">
            <h1 class="text-2xl font-bold text-primary my-0"><?php the_title(); ?></h1>
            <p><?php the_excerpt(); ?></p>
        </div>

        <!-- actions -->
        <div class="w-full py-2.5 px-5 flex justify-between items-center">
            <div class="flex flex-col justify-center" style="flex: 1 0 0">
                <div class="flex gap-1.5 text-xs">
                    <span><?= pll__('Antes:') ?></span>
                    <span class="font-bold">US$ <?= esc_html($precio_regular) ?></span>
                </div>
                <span><?= pll__('Desde:') ?></span>
                <span class="font-bold text-primary text-base">US$
                    <?= esc_html($precio_oferta) ?></span>
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