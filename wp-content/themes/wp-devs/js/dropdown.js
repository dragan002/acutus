let dropdown =  document.querySelector('.menu');
let hamburger = document.querySelector('.menu-icon');


hamburger.addEventListener('click', () => {
    dropdown.classList.toggle('show-dropdown');
    hamburger.classList.toggle('animate-button');
})
