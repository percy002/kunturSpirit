<div class="submenu hidden lg:block absolute -z-50 top-0 right-0 transition-transform duration-300 "
    style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg/textura.webp') lightgray 50% / cover no-repeat;">
    <div class=" w-[450px] p-12 h-dvh">
        <div class="flex flex-col gap-2.5">
            <!-- IMAGEN -->
            <div class="flex justify-center">
                <img id="imgPaquete" class="h-[200px]"
                    src='<?php echo get_template_directory_uri(); ?>/assets/images/mapi.webp' alt="imagen de mapi"
                    class="w-full h-full object-cover">
            </div>
            <!-- DESCRIPCION -->
            <section class="p-0 flex flex-col gap-2.5">
                <h1 class="text-2xl m-0 text-secondary font-normal" id="tituloPaquete"></h1>
                <p class="text-center text-secondary" id="descripcionPaquete"></p>
            </section>
            <hr class="border-t-2 border-light w-full">

            <!-- TOURS -->
            <div class="">
                <ul class="flex flex-col gap-1.5 px-2.5 text-light " id="tourList">
                </ul>
            </div>
            <hr class="border-t-2 border-light w-full">
            <!-- MOSTRAR TODO -->
            <a href="" class="cursor-pointer" id="verTodosTours">
                <span class="text-xl">Ver todos</span>
            </a>
        </div>
    </div>
</div>