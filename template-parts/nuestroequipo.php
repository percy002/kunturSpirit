<section>
    <div class="container flex flex-col gap-1.5 md:pr-[100px] md:pl-[100px]">
        <h1>Todos Nuestros Colaboradores</h1>
        <p class="text-center">Conoce a todos nuestros colaboradores que hacen de tu viaje, la mejor experiencia de tu
            vida.</p>

        <div class="flex justify-center flex-wrap gap-5">
            <?php
            $colaboradores = new WP_Query([
                'post_type' => 'colaborador',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'orderby' => 'title',
                'order' => 'ASC',
            ]);

            if ($colaboradores->have_posts()):
                while ($colaboradores->have_posts()):
                    $colaboradores->the_post();
                    $cargo = get_field('cargo'); // Cambia el nombre del campo si es diferente
                    $imagen = get_field('imagen') && get_field('imagen')['url'] ? get_field('imagen')['url'] : get_template_directory_uri() . '/assets/images/retrato.webp';
                    ?>
                    <div class="flex flex-col items-center pt-5 text-center max-w-[180px]">
                        <img class="rounded-[100px] w-[140px] h-[140px] md:w-[180px] md:h-[180px] object-cover"
                            src="<?= $imagen ?>"
                            alt="Nuestro colaborador">
                        <span class="text-primary text-2xl mt-2 capitalize"><?= esc_html(get_the_title()); ?></span>
                        <span class="text-base"><?= esc_html($cargo); ?></span>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else:
                echo '<p>No hay colaboradores disponibles.</p>';
            endif;
            ?>
        </div>
    </div>
</section>