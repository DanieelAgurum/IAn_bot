let lastScrollTop = 0;
const nav = document.querySelector('.main-nav');
const searchWrapper = document.querySelector('.search-wrapper');
const searchIcon = document.querySelector('.search-icon');
const searchInput = document.querySelector('.search-input');
const navbarLinks = document.querySelector('.navbar-nav');

window.addEventListener('scroll', function () {
    const scrollTop = window.scrollY;

    if (scrollTop > 50) {
        nav.classList.add('scrolled');
    } else {
        nav.classList.remove('scrolled');
    }

    if (scrollTop > lastScrollTop && scrollTop > 100) {
        nav.classList.add('hide');
    } else {
        nav.classList.remove('hide');
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
});

searchIcon.addEventListener('click', function (e) {
    e.stopPropagation();
    if (!searchWrapper.classList.contains('active')) {
        searchWrapper.classList.add('active');
        navbarLinks.style.marginLeft = '-230px';
        searchInput.focus();
    } else {
        searchWrapper.classList.add('bounce-icon');
        searchWrapper.classList.remove('active');
        navbarLinks.style.marginLeft = '1rem';

        setTimeout(() => {
            searchWrapper.classList.remove('bounce-icon');
        }, 300);
    }
});

document.addEventListener('click', function (e) {
    if (!searchWrapper.contains(e.target)) {
        searchWrapper.classList.remove('active');
        navbarLinks.style.marginLeft = '1rem';
        searchWrapper.classList.add('bounce-icon');
        setTimeout(() => {
            searchWrapper.classList.remove('bounce-icon');
        }, 300);
    }
});

document.addEventListener('keydown', function (e) {
    if (e.key === "Escape") {
        searchWrapper.classList.remove('active');
        navbarLinks.style.marginLeft = '1rem';
        searchWrapper.classList.add('bounce-icon');
        setTimeout(() => {
            searchWrapper.classList.remove('bounce-icon');
        }, 300);
    }
});
