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
        });

        sideMenuBackdrop.addEventListener('click', () => {
            sideMenu.classList.add('-translate-x-full');
            sideMenuBackdrop.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        });
    }

    // Efecto para header background on scroll
    const header = document.querySelector('header');
    window.addEventListener('scroll', function () {
        if (window.scrollY > 10) {
            header.style.background = 'rgba(65, 24, 13, 0.5)';
        } else {
            header.style.background = 'transparent';
        }
    });
});
