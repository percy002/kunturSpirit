<style>
    .carousel-colab {
        position: relative;
        overflow: hidden;
        width: 100%;
    }

    .carousel-track {
        display: flex;
        gap: 2rem;
        animation: scroll-colab 30s linear infinite;
    }

    .carousel-colab:hover .carousel-track {
        animation-play-state: paused;
    }

    @keyframes scroll-colab {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }

    /* Escala de grises por defecto, color al hover */
    .carousel-colab img {
        filter: grayscale(1);
        transition: filter 0.3s;
    }
    .carousel-colab img:hover {
        filter: grayscale(0);
    }
</style>
<section>
    <div class="container flex flex-col gap-10">
        <div class="flex flex-col gap-5">
            <h1>Travel Associations & Certifications</h1>
        </div>
        <!-- logos enpresas -->
        <?php
        $logos = [
            ['mincultura.png', 'logo ministerio de cultura'],
            ['protegeme.png', 'logo protégeme'],
            ['perulogo.png', 'logo Perú'],
            ['gercetur.png', 'logo Gercetur'],
            ['promperu.png', 'logo Promperú'],
            ['tripadvisor.png', 'logo Tripadvisor'],
            ['safetravels.png', 'logo Safe Travels'],
        ];
        ?>
        <div class="carousel-colab">
            <div class="carousel-track">
                <?php for ($i = 0; $i < 2; $i++): // Duplicar para efecto infinito ?>
                    <?php foreach ($logos as [$img, $alt]): ?>
                        <div class="flex-[1_0_0] h-[70px] flex justify-center items-center w-[180px]">
                            <img class="h-full w-auto object-contain"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/instituciones/<?php echo $img; ?>"
                                alt="<?php echo esc_attr($alt); ?>">
                        </div>
                    <?php endforeach; ?>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>