<?php
$images = $args['images'] ?? [];
if (empty($images)) {
    return; // No images to display
}
?>
<div class="swiper imagenSwiper w-full max-w-3xl mx-auto">
    <div class="swiper-wrapper">
        <?php foreach ($images as $image): ?>

            <?php if (is_array($image) && isset($image['url'])): ?>
                
                <div class="swiper-slide">
                    <a href="<?= esc_url($image['url']) ?>" class="gallery-link"
                        data-pswp-width="<?= $image['width'] ?? 1200 ?>" data-pswp-height="<?= $image['height'] ?? 800 ?>"
                        target="_blank">
                        <img src="<?= esc_url($image['url']) ?>" alt="" class="w-full h-auto" />
                    </a>
                </div>
            <?php endif; ?>
        <?php endforeach ?>
    </div>

    <!-- Botones de navegación -->
    <div class="swiper-button-prev rounded-2xl !text-primary !left-1 !p-5 !bg-light/10 hover:!bg-light/50"></div>
    <div class="swiper-button-next rounded-2xl !text-primary !right-1 !p-5 !bg-light/10 hover:!bg-light/50"></div>
</div>