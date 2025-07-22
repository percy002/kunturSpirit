<?php
/**
 * CARRUSEL CON LIGHTBOX FUNCIONAL
 * 
 * @param array $args {
 *     @type array $imagenes  Array de imágenes (requerido)
 *     @type int   $visible   Número de imágenes visibles (default 3)
 *     @type bool  $flechas   Mostrar flechas (default true)
 * }
 */
$args = wp_parse_args($args, [
    'imagenes' => [],
    'visible' => 3,
    'flechas' => true
]);

if (empty($args['imagenes'])) return;

// Configuración responsive
$ancho_clase = 'w-[calc(33.333%-11px)]'; // Para 3 imágenes visibles
$carrusel_id = 'carrusel-' . uniqid();
?>

<!-- HTML del Carrusel -->
<div class="relative imagenSwiper" id="<?php echo $carrusel_id; ?>">
    <div class="flex overflow-x-auto snap-x snap-mandatory gap-4 pb-4 hide-scrollbar">
        <?php foreach ($args['imagenes'] as $index => $img): ?>
            <?php
            // Procesamiento universal de imágenes
            $img_data = [
                'url' => '',
                'width' => 1080,
                'height' => 720,
                'alt' => 'Imagen del día'
            ];
            
            if (is_numeric($img)) {
                $img_data['url'] = wp_get_attachment_url($img); // Cambiado a wp_get_attachment_url
                $img_data['alt'] = get_post_meta($img, '_wp_attachment_image_alt', true) ?: $img_data['alt'];
                $metadata = wp_get_attachment_metadata($img);
                if ($metadata) {
                    $img_data['width'] = $metadata['width'];
                    $img_data['height'] = $metadata['height'];
                }
            } elseif (is_array($img)) {
                $img_data = array_merge($img_data, $img);
            } else {
                $img_data['url'] = $img;
            }
            
            if (empty($img_data['url'])) continue;
            
            // Forzar URL absoluta si es relativa
            if (strpos($img_data['url'], 'http') !== 0) {
                $img_data['url'] = site_url($img_data['url']);
            }
            ?>
            
            <div class="flex-none snap-start <?php echo $ancho_clase; ?>">
                <div class="gallery-item cursor-zoom-in"
                     data-pswp-src="<?php echo esc_url($img_data['url']); ?>"
                     data-pswp-width="<?php echo $img_data['width']; ?>"
                     data-pswp-height="<?php echo $img_data['height']; ?>"
                     data-alt="<?php echo esc_attr($img_data['alt']); ?>">
                    <img src="<?php echo esc_url($img_data['url']); ?>" 
                         alt="<?php echo esc_attr($img_data['alt']); ?>"
                         class="w-full h-auto object-cover rounded-lg shadow-md"
                         loading="<?php echo $index < 2 ? 'eager' : 'lazy'; ?>">
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <?php if ($args['flechas']): ?>
        <button class="carousel-prev absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 rounded-full p-2 shadow-md z-10">
            ←
        </button>
        <button class="carousel-next absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 rounded-full p-2 shadow-md z-10">
            →
        </button>
    <?php endif; ?>
</div>

<!-- Scripts y estilos integrados -->
<style>
.hide-scrollbar::-webkit-scrollbar { display: none; }
.hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

/* Estilos PhotoSwipe */
.pswp__img { max-width: 100vw !important; max-height: 100vh !important; }
.pswp__caption { text-align: center; background: rgba(0,0,0,0.7); }
</style>

<script>
// Inicialización cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
    const carrusel = document.getElementById('<?php echo $carrusel_id; ?>');
    
    // 1. Navegación del carrusel
    if (carrusel) {
        const container = carrusel.querySelector('[class*="overflow-x-auto"]');
        carrusel.querySelector('.carousel-prev')?.addEventListener('click', () => {
            container.scrollBy({ left: -300, behavior: 'smooth' });
        });
        carrusel.querySelector('.carousel-next')?.addEventListener('click', () => {
            container.scrollBy({ left: 300, behavior: 'smooth' });
        });
    }

    // 2. PhotoSwipe Lightbox
    if (typeof PhotoSwipeLightbox !== 'undefined') {
        const lightbox = new PhotoSwipeLightbox({
            gallery: '#<?php echo $carrusel_id; ?>',
            children: '.gallery-item',
            pswpModule: PhotoSwipe,
            bgOpacity: 0.9,
            zoom: true,
            errorMsg: 'La imagen no pudo cargarse<br>Intente recargar la página'
        });

        // Manejo de errores
        lightbox.on('loadError', (e) => {
            console.error('Error cargando imagen:', e.originalEvent.target.src);
        });

        // Texto alternativo
        lightbox.on('uiRegister', function() {
            lightbox.pswp.ui.registerElement({
                name: 'caption',
                className: 'pswp__caption',
                appendTo: 'root',
                onInit: (el, pswp) => {
                    lightbox.pswp.on('change', () => {
                        const currSlide = pswp.currSlide;
                        el.innerHTML = currSlide.data.element.getAttribute('data-alt') || '';
                    });
                }
            });
        });

        lightbox.init();
    } else {
        console.error('PhotoSwipe no está cargado. Verifica que los scripts estén incluidos:');
    }
});
</script>