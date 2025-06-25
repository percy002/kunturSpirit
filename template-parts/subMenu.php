<li class="flex flex-col">
    <div class="flex justify-between items-center text-light hover:text-secondary transition">
        <a href="<?php echo esc_url($link); ?>">
            <?php echo esc_html($paquete->name); ?>
        </a>
        <button type="button" class="toggle-tours text-2xl" data-paquete="<?php echo esc_attr($paquete->term_id); ?>">›</button>
    </div>
    <div class="tours-list hidden mt-2 pl-6" id="tours-<?php echo esc_attr($paquete->term_id); ?>">
        <!-- Aquí se mostrarán los tours vía JS o puedes cargarlo directamente con PHP si prefieres -->
        <?php
        // Ejemplo: obtener tours de este paquete
        $tours = get_posts([
            'post_type' => 'tour',
            'tax_query' => [
                [
                    'taxonomy' => 'paquete',
                    'field'    => 'term_id',
                    'terms'    => $paquete->term_id,
                ],
            ],
        ]);
        if ($tours):
            foreach ($tours as $tour):
                ?>
                <a href="<?php echo get_permalink($tour->ID); ?>" class="block text-base text-zinc-200 hover:text-secondary py-1">
                    <?php echo esc_html($tour->post_title); ?>
                </a>
                <?php
            endforeach;
        else:
            echo '<span class="text-xs text-zinc-400">No hay tours en este paquete.</span>';
        endif;
        ?>
    </div>
</li>