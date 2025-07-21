<ul id="primary-menu" class="flex flex-col gap-2.5 px-2.5 text-xl text-light">
    <li class="flex justify-between items-center">
        <a href="<?php echo esc_url(home_url()); ?>"><?php esc_html_e('Inicio'); ?></a>
    </li>
    <li class="flex justify-between items-center">
        <a href="<?php echo esc_url(get_translated_page_url('nosotros')); ?>">
            <?php esc_html_e('Sobre Nosotros'); ?>
        </a>
    </li>
    <li class="flex justify-between items-center">
        <a href="<?php echo esc_url(get_translated_page_url(slug: 'disena-tu-viaje')); ?>">
            <?php esc_html_e('Diseña tu viaje'); ?>
        </a>
    </li>
    <li class="flex justify-between items-center">
        <a href="<?php echo esc_url(get_translated_page_url('contacto')); ?>">
            <?php esc_html_e('Contacto'); ?>
        </a>
    </li>
</ul>
