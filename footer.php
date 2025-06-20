<?php

/**
 * Theme footer template.
 *
 * @package TailPress
 */
?>
</main>

<?php do_action('tailpress_content_end'); ?>
</div>

<?php do_action('tailpress_content_after'); ?>

<div class="h-[170px]">
    <img class="object-bottom object-cover h-full w-full" src="<?php echo get_template_directory_uri(); ?>/assets/images/piedepagina.png" alt="imagen footer" />
</div>
<footer id="" class="" role="contentinfo">

    <div class="bg-secondary">
        <div class="container flex justify-center gap-5 bg-secondary text-white py-5">

            <div class="flex flex-col gap-2.5 items-center">
                <div class="flex justify-center items-center">
                    <?php if (has_custom_logo()): ?>
                        <div class="h-[50px]">
                            <?php the_custom_logo(); ?>
    
                        </div>
                    <?php endif; ?>
                </div>
                <div class="">Kuntur Spirit S.A.C / RUC: 20564070654</div>
                <div class="flex flex-col gap-2.5">
                    <div class="">Siguenos en:</div>
                    <div class="flex gap-2.5 text-white">
                        <a href=""><i class="fa-brands fa-facebook text-xl fa-inverse"></i></a>
                        <a href=""><i class="fa-brands fa-instagram text-xl "></i></a>
                        <a href=""><i class="fa-brands fa-tiktok text-xl"></i></a>
    
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
    
            </div>
            <div class="flex flex-col">
    
            </div>
            <div class="flex flex-col">
    
            </div>
        </div>
    </div>
    <div class="bg-primary text-white">
        <div class="container flex justify-center gap-2.5 items-center py-4 ">
            <?php do_action('tailpress_footer'); ?>
            <div class="text-sm ">
                copyright &copy; <?php echo esc_html(date_i18n('Y')); ?> - Kuntur Spirit S.A.C
            </div>
            <div class="">|</div>
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