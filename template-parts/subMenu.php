<div class="submenu hidden lg:block absolute -z-50 top-0 right-0 transition-transform duration-300 "
    style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg/textura.webp') lightgray 50% / cover no-repeat;">
    <div class=" w-[450px] p-12 h-dvh">
        <div class="flex flex-col gap-2.5">
            <!-- IMAGEN -->
            <div class="max-h-[200px]">
                <img src='<?php echo get_template_directory_uri(); ?>/assets/images/mapi.webp' alt="imagen de mapi"
                    class="w-full h-full object-cover">
            </div>
            <!-- DESCRIPCION -->
            <section class="p-0">
                <h1 class="text-2xl">Experiencias Cusco</h1>
                <p class="text-center">Descubre la magia de Machu Picchu con nuestros tours diseñados para brindarte una
                    experiencia inolvidable. Historia, naturaleza y aventura te esperan en la ciudad inca más
                    impresionante del mundo. ¡Viaja con nosotros y vive esta experiencia única!</p>
            </section>
            <!-- TOURS -->
            <div class="">
                <ul class="flex flex-col gap-1.5 px-2.5 text-light">
                    <li class="">
                        <a href="<?php echo get_permalink(get_page_by_path('explora-peru-un-viaje-a-traves-de-la-historia-la-naturaleza-y-la-cultura', OBJECT, 'tour')); ?>"
                            class="cursor-pointer"><span class="text-xl">Explora Perú: Un viaje a través de la historia,
                                la naturaleza y la cultura</span></a>
                    </li>
                    <li class="">
                        <a href="<?php echo get_permalink(get_page_by_path('explora-peru-un-viaje-a-traves-de-la-historia-la-naturaleza-y-la-cultura', OBJECT, 'tour')); ?>"
                            class="cursor-pointer"><span class="text-xl">Explora Perú: Un viaje a través de la historia,
                                la naturaleza y la cultura</span></a>
                    </li>
                </ul>
            </div>
            <hr class="border-t-2 border-light w-full">
            <!-- MOSTRAR TODO -->
            <a href="<?php echo get_term_link('experiencias-cusco', 'paquete'); ?>" class="cursor-pointer">
                <span class="text-xl">Ver todos</span>
            </a>
        </div>
    </div>
</div>