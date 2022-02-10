
const burgerBtn = document.querySelector('.burger-menu');
const burgerMenu = document.querySelector('.header__nav');

const toggleBurger = () => {
    burgerMenu.classList.toggle('active');
    burgerBtn.classList.toggle('active');
    document.body.classList.toggle('lock')
}


burgerBtn.addEventListener('click', toggleBurger);
