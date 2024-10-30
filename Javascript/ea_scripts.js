console.log("JavaScript cargado correctamente.");
console.log("JavaScript cargado correctamente.");
document.addEventListener('DOMContentLoaded', function() {
    console.log("JavaScript cargado correctamente."); // Mensaje de prueba porque no me funcionaba

   
    const links = document.querySelectorAll('nav a');

    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault(); 

            const targetId = this.getAttribute('href').substring(1); 
            const targetSection = document.getElementById(targetId);

            if (targetSection) {
                // Si la sección existe, se dirige a ella
                targetSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            } else {
                console.error(`Sección con id "${targetId}" no encontrada.`);
            }
        });
    });
});
