// hamburger menu
let hamburgerIcon = document.querySelector('.nav-hamburger');
hamburgerIcon.addEventListener("click", function() {
    document.body.classList.toggle('menu_open');
});

// onscroll della navbar

let myNavbar = document.querySelector('#myNavbar');
let hamburger = document.querySelector('#hamburger');

// effetto onscroll, cambia la navbar e i vari link
window.addEventListener('scroll', () => {
    let scrolled = window.scrollY;
    if (scrolled > 0) {
        myNavbar.classList.add('nav-scroll');

    } else {
        myNavbar.classList.remove('nav-scroll')
        hamburger.style.color = 'var(--black)';
    }
});


// fine onscroll della navbar