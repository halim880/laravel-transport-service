





const navbar = document.querySelector('.navbar-nav');
const toggler = document.querySelector('.navbar-toggler');

toggler.addEventListener('click', ()=>{
    navbar.classList.toggle('open');
})