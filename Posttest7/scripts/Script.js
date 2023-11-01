const modeToggleButton = document.getElementById('mode-toggle-button');
const body = document.body;

modeToggleButton.addEventListener('click', () => {
    if (body.classList.contains('dark-mode')) {
        // Menonaktifkan Dark Mode
        body.classList.remove('dark-mode');
    } else {
        // Mengaktifkan Dark Mode
        body.classList.add('dark-mode');
    }
});

const contactForm = document.getElementById('contactForm'); // Menggunakan ID yang sesuai
    
contactForm.addEventListener('submit', (event) => {
    event.preventDefault(); // Untuk mencegah pengiriman formulir default
    document.body.style.backgroundColor = 'Red';
});