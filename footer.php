<?php

/**
 * Theme footer template.
 *
 * @package TailPress
 */
?>
<?php get_template_part('template-parts/colaboradores') ?>

</main>

<?php do_action('tailpress_content_end'); ?>
</div>

<?php do_action('tailpress_content_after'); ?>

<div class="h-[170px] 2xl:h-[280px]">
    <img class="object-bottom object-cover h-full w-full"
        src="<?php echo get_template_directory_uri(); ?>/assets/images/piedepagina.png" alt="imagen footer" />
</div>
<footer id="" class="" role="contentinfo">

    <div class="bg-primary text-white">
        <div
            class="container flex flex-col flex-wrap md:flex-row items-center md:items-start justify-center gap-5 md:gap-12  py-5">
            <!-- LOGO -->
            <section class="flex flex-col gap-2.5 items-center py-5 min-w-[200px]">
                <div class="flex justify-center items-center">
                    <?php if (has_custom_logo()): ?>
                        <div class="h-[50px]">
                            <?php the_custom_logo(); ?>

                        </div>
                    <?php endif; ?>
                </div>
                <div class="flex flex-col items-center lg:flex-row gap-2.5">
                    <span>Kuntur Spirit S.A.C</span>
                    <span class="hidden lg:block"> / </span>
                    <span>RUC: 20564070654</span>
                </div>
                <div class="flex flex-col gap-2.5">
                    <div class="text-white m-0 text-2xl md:text-start font-normal">Síguenos en:</div>
                    <div class="flex gap-2.5 text-white">
                        <a href=""><i class="fa-brands fa-facebook text-xl fa-inverse"></i></a>
                        <a href=""><i class="fa-brands fa-instagram text-xl "></i></a>
                        <a href=""><i class="fa-brands fa-tiktok text-xl"></i></a>
                        <a href=""><i class="fa-brands fa-youtube text-xl"></i></a>
                        <a href=""><i class="fa-solid fa-envelope text-xl"></i></a>

                    </div>
                </div>
            </section>

            <!-- DIVIDIR -->
            <div class="border-b-1 md:border-r-1 w-full md:w-0 md:h-36 border-white md:mt-10 md:hidden xl:block"></div>

            <!-- CONTÁCTENOS -->
            <section class="flex flex-col p-0 justify-start py-5 gap-2.5 min-w-[200px]">
                <h1 class="text-white m-0 text-2xl md:text-start font-normal">Contáctenos</h1>
                <ul class="flex flex-col gap-5 text-base">
                    <li class="flex items-center gap-2.5">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                        <div class="flex flex-col">
                            <span>(+51) 989 583 467</span>
                            <span>(+51) 989 583 467</span>
                        </div>
                    </li>
                    <li class="flex items-center gap-2.5">
                        <i class="fa-solid fa-envelope"></i>
                        <div class="flex flex-col">
                            <span>kunturspirit@gmail.com</span>
                            <span>info@kunturspirit.com</span>
                        </div>
                    </li>
                    <li class="flex items-center gap-2.5">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Urb. Ttio, Pasaje Javier Heraud Z-1-21 Wanchaq</span>
                    </li>
                </ul>
            </section>
            <!-- DIVIDIR -->
            <div class="border-b-1 md:border-r-1 w-full md:w-0 md:h-36 border-white md:mt-10 md:hidden xl:block"></div>

            <!-- GENERAL -->
            <section class="flex flex-col p-0 justify-start py-5 gap-2.5 min-w-[200px]">
                <h1 class="text-white m-0 text-2xl md:text-start font-normal">General</h1>
                <?php
                wp_nav_menu([
                    'container_id' => 'primary-menu-footer',
                    'container_class' => '',
                    'menu_class' => 'flex flex-col text-white text-sm gap-1.5',
                    'theme_location' => 'primary',
                    'li_class' => '',
                    'fallback_cb' => false,
                ]);
                ?>
            </section>

            <!-- DIVIDIR -->
            <div class="border-b-1 md:border-r-1 w-full md:w-0 md:h-36 border-white md:mt-10 md:hidden xl:block"></div>

            <!-- LIBRO DE RECLAMACIONES -->
            <section class="flex flex-col p-0 justify-start py-5 gap-2.5 items-center min-w-[200px]">
                <a class="" href="<?php echo site_url('/libro-de-reclamaciones'); ?>">
                    <img src='<?php echo get_template_directory_uri(); ?>/assets/images/libro.png'
                        alt="libro de reclamaciones">
                </a>
                <span>Libro de reclamaciones</span>
                <h1 class="text-white m-0 text-2xl md:text-start font-normal">Síguenos en:</h1>
                <div class="">
                    <img class="w-36 bg-white"
                        src='<?php echo get_template_directory_uri(); ?>/assets/images/cardskuntur.png'
                        alt="libro de reclamaciones">
                </div>
            </section>
        </div>
    </div>
    <div class="bg-[#41180D] text-white">
        <div class="container flex flex-col md:flex-row justify-center gap-2.5 items-center py-4 ">
            <?php do_action('tailpress_footer'); ?>
            <div class="text-sm ">
                copyright &copy; <?php echo esc_html(date_i18n('Y')); ?> - Kuntur Spirit S.A.C
            </div>
            <div class="hidden md:block">|</div>
            <div class="">

                Realizado por <a href="" class="font-bold">CodeTeam</a>
            </div>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>