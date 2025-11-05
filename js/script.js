// js/script.js

// Menu mobile responsive (si tu veux plus tard)
const nav = document.querySelector('nav ul');
const toggleMenu = document.createElement('button');
toggleMenu.textContent = '☰';
toggleMenu.classList.add('menu-toggle');
document.querySelector('header').prepend(toggleMenu);

toggleMenu.addEventListener('click', () => {
    nav.classList.toggle('show');
});

// Smooth scroll pour les liens internes
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e){
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Effet simple pour les sections au scroll
const sections = document.querySelectorAll('section');
window.addEventListener('scroll', () => {
    sections.forEach(section => {
        const top = section.getBoundingClientRect().top;
        const screenHeight = window.innerHeight;
        if(top < screenHeight - 100){
            section.classList.add('visible');
        }
    });
});
