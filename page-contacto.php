<?php
/* 
Template Name: Contacto
*/
get_header();

$descripcion = get_field('descripcion') ? get_field('descripcion') : 'No disponible';
$mision = get_field('mision') ? get_field('mision') : 'No disponible';
$vision = get_field('vision') ? get_field('vision') : 'No disponible';
$infoHeroTour = array(
    'imagen_url' => get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri() . "/assets/images/nosotros.webp",
    'title' => 'Contáctenos',
    'heroType' => 'layout',
);
?>

<!-- Tu contenido para la página Nosotros aquí -->
<?php ?>
<?php get_template_part('template-parts/hero', null, $infoHeroTour); ?>

<!-- MAPA Y FORMULARIO -->
<section>
    <div class="container flex flex-col gap-1.5 items-center">
        <h1>Contáctenos Fácil</h1>
        <p>Contáctenos y uno de nuestros especialistas en viajes le brindará todo lo necesario para que esta sea una
            experiencia inolvidable.</p>
        <div class="flex flex-col gap-10 xl:flex-row">
            <div class="xl:flex-1 flex flex-col p-2.5 pl-5 gap-5 items-center">
                <div class="flex flex-col gap-2.5 w-full">
                    <span class="text-primary text-2xl">Contáctenos</span>
                    <ul class="flex flex-col gap-5">
                        <li class="flex items-center gap-2.5">
                            <i class="fa-solid fa-mobile-screen-button text-primary text-2xl"></i>
                            <div class="flex flex-col">
                                <span class="text-base">(+51) 989 583 467</span>
                                <span class="text-base">(+51) 989 583 467</span>
                            </div>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <i class="fa-solid fa-envelope text-primary text-2xl"></i>
                            <div class="flex flex-col">
                                <span class="text-base">kunturspirit@gmail.com</span>
                                <span class="text-base">info@kunturspirit.com</span>
                            </div>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <i class="fa-solid fa-location-dot text-primary text-2xl"></i>
                            <span class="text-base">Urb. Ttio, Pasaje Javier Heraud Z-1-21 Wanchaq</span>
                        </li>
                    </ul>
                </div>
                <div class="w-full aspect-video rounded overflow-hidden">
                    <div class="w-full aspect-video rounded overflow-hidden bg-white shadow-lg border border-gray-200">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7765.45906396025!2d-72.11671625662233!3d-13.30482844199767!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916ddd1f2fcc7c83%3A0x800271aeaa0c6319!2sKuntur%20Spirit!5e0!3m2!1ses!2spe!4v1751382562095!5m2!1ses!2spe"
                            class="w-full h-full border-0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="xl:flex-1">
                <div class="py-5 xl:px-10 ">
                    <div class="py-8 lg:px-12 h-[600px] flex flex-col gap-2.5 text-primary items-center">
                        <span class="text-primary text-3xl text-center">¡Envíanos un correo electrónico!</span>
                        <p>¡Déjanos un mensaje y te responderemos lo antes posible! Complete este formulario con algunos
                            de los detalles de su viaje y lo ayudaremos a crear una experiencia de viaje inolvidable.
                        </p>
                        <hr class="border-t-2 border-primary">
                        <form action="" class="flex flex-col gap-4 w-full">
                            <input type="text" placeholder="Nombre" class="w-full p-4 border border-primary rounded">
                            <input type="text" placeholder="Correo Electrónico"
                                class="w-full p-4 border border-primary rounded">
                            <input type="text" placeholder="Numero de Teléfono"
                                class="w-full p-4 border border-primary rounded">
                            <textarea class="py-4 px-8 border border-primary rounded" name="" id=""></textarea>
                            <div class="flex gap-2.5">
                                <input class="w-6 text-primary" type="radio" name="contact-preference" id="email"
                                    value="email" class="mr-2">
                                <label for="">He leído y acepto los Términos y Políticas de Privacidad</label>
                            </div>
                            <div class="flex justify-center">
                                <button type="submit"
                                    class="bg-primary text-white px-4 py-2.5 hover:bg-secondary transition-colors w-full">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>