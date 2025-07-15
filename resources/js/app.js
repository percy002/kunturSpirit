document.addEventListener('DOMContentLoaded', function () {
    // Menú principal responsive
    let mainNavigation = document.getElementById('primary-navigation');
    let mainNavigationToggle = document.getElementById('primary-menu-toggle');

    if (mainNavigation && mainNavigationToggle) {
        mainNavigationToggle.addEventListener('click', function (e) {
            e.preventDefault();
            mainNavigation.classList.toggle('hidden');
        });
    }

    // Menú lateral responsive
    const submenu = document.querySelector('.submenu');

    const openMenu = document.getElementById('openMenu');
    const closeMenu = document.getElementById('closeMenu');
    const sideMenu = document.getElementById('sideMenu');
    const sideMenuBackdrop = document.getElementById('sideMenuBackdrop');

    if (openMenu && closeMenu && sideMenu && sideMenuBackdrop) {
        openMenu.addEventListener('click', () => {
            sideMenu.classList.remove('-translate-x-full');
            sideMenuBackdrop.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        });

        closeMenu.addEventListener('click', () => {
            sideMenu.classList.add('-translate-x-full');
            sideMenuBackdrop.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
            submenu.classList.remove('translate-x-full');

        });

        sideMenuBackdrop.addEventListener('click', () => {
            sideMenu.classList.add('-translate-x-full');
            sideMenuBackdrop.classList.add('hidden');
            submenu.classList.remove('translate-x-full');
            document.body.classList.remove('overflow-hidden');
        });
    }

    // submenumobile
    document.querySelectorAll('.toggle-tours').forEach(btn => {
        btn.addEventListener('click', function () {
            const id = this.getAttribute('data-paquete');
            const toursList = document.getElementById('tours-' + id);
            if (toursList) {
                // Alternar entre flex y hidden
                if (toursList.classList.contains('hidden')) {
                    toursList.classList.remove('hidden');
                    toursList.classList.add('flex');
                } else {
                    toursList.classList.add('hidden');
                    toursList.classList.remove('flex');
                }

                if (window.innerWidth < 1024) {
                    const icon = this.querySelector('.fa-chevron-down');
                    if (icon) {
                        icon.classList.toggle('rotate-180');
                    }
                }
            }
        });
    });



    // submenu derecha
    window.abrirSubmenu = function (paqueteObj) {
        if (window.innerWidth < 1024) {
            return;
        }
        let $titlePaquete = submenu.querySelector('#tituloPaquete');
        let $descripcionPaquete = submenu.querySelector('#descripcionPaquete');
        let $tourList = submenu.querySelector('#tourList');
        let $imgPaquete = submenu.querySelector('#imgPaquete');
        let $verTodosTours = submenu.querySelector('#verTodosTours');

        if ($imgPaquete && paqueteObj.img_url) {
            $imgPaquete.src = paqueteObj.img_url;
        }
        if ($titlePaquete) {
            $titlePaquete.textContent = paqueteObj.nombre;
        }
        if ($descripcionPaquete) {
            $descripcionPaquete.textContent = paqueteObj.descripcion;
        }
        if ($verTodosTours) {
            $verTodosTours.href = paqueteObj.link || '#'; // Asegúrate de que el enlace esté definido
        }
        // mostrar submenu
        if ($tourList && paqueteObj.tour) {
            // Limpia el contenido anterior
            $tourList.innerHTML = '';

            // Recorre los tours y crea los enlaces
            paqueteObj.tour.forEach(tour => {
                const a = document.createElement('a');
                a.href = tour.enlace;
                a.textContent = tour.nombre;
                a.className = 'block py-1 text-lg hover:text-secondary';
                $tourList.appendChild(a);
            });
        }
        // mostrar submenu
        if (!submenu.classList.contains('translate-x-full')) {
            submenu.classList.add('translate-x-full');
        }
    };


    // Efecto para header background on scroll
    const header = document.querySelector('header');
    window.addEventListener('scroll', function () {
        if (window.scrollY > 10) {
            header.style.background = 'rgba(65, 24, 13, 0.8)';
        } else {
            header.style.background = 'transparent';
        }
    });

    // swiper
    var swiper = new Swiper(".mySwiper", {
        loop: true, // Hace que el carrusel sea infinito
        speed: 800, // Velocidad de transición entre imágenes
        autoplay: {
            delay: 3000, // Cambia de imagen cada 3 segundos
            disableOnInteraction: false
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        }
    });

    new Swiper('.trekkingSwiper', {
        slidesPerView: 'auto',
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });

    const imagenSwiper = new Swiper('.imagenSwiper', {
        slidesPerView: 'auto', // cambia a 2 o 3 si quieres varias visibles
        spaceBetween: 16, // separación entre imágenes
        loop: false, // o true si deseas que repita en bucle
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    // Initialize PhotoSwipe Lightbox
    const lightbox = new PhotoSwipeLightbox({
        gallery: '.imagenSwiper',
        children: '.swiper-slide .gallery-link',
        pswpModule: PhotoSwipe
    });
    lightbox.init();

    // footer logo
    
    
});
