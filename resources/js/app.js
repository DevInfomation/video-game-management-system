import './bootstrap';

let accordions = document.querySelectorAll('.accordion-wrapper .accordion');

accordions.forEach((accordion) => {
    accordion.onclick = () => {
        accordions.forEach((subcontent) => {
            subcontent.classList.remove('active')
        });
        accordion.classList.add('active');
    }
});
    