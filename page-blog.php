<?php
/* 
Template Name: Pagina Blog
*/
get_header();

$infoHeroTour = array(
    'imagen_url' => get_template_directory_uri() . "/assets/images/portadas/vicunia.webp",
    'title' => 'Tu blog de viajes por Perú',
    'heroType' => '',
    'descripcion' => 'Compartimos destinos, experiencias y novedades que te ayudarán a planificar tu próxima aventura en el Perú.

'
);
?>

<!-- Tu contenido para la página Nosotros aquí -->
<?php get_template_part('template-parts/hero', null, $infoHeroTour); ?>

<section>
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-7 justify-items-center">
            <?php
            $args = [
                'post_type' => 'post', // Solo entradas de WordPress
                'posts_per_page' => -1,
            ];
            $posts = new WP_Query($args);

            if ($posts->have_posts()):
                while ($posts->have_posts()):
                    $posts->the_post();
                    $imagen = get_the_post_thumbnail_url(null, 'large') ?: get_template_directory_uri() . '/assets/images/camino.jpg';
                    ?>
                    <article class="h-full col-span-1 flex flex-col items-center bg-white flex-1 lg:max-w-[30dvw]">
                        <div class="w-full">
                            <img class="w-full h-full object-cover object-center" src="<?= esc_url($imagen) ?>" alt="">
                        </div>
                        <div class="flex flex-col gap-1.5 justify-between items-center p-2.5 h-full self-stretch">
                            <div class="w-full">
                                <h1 class="text-2xl font-medium text-primary my-0"><?php the_title(); ?></h1>
                                <p class="text-center"><?php the_excerpt(); ?></p>
                            </div>
                            <div class="w-full py-2.5 px-5 flex justify-between items-center">
                                <a href="<?php the_permalink(); ?>" class="py-2.5 px-2.5 bg-secondary text-white">
                                    <span>Leer más</span>
                                </a>
                            </div>
                        </div>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>