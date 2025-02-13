document.addEventListener('DOMContentLoaded', function () {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    });

    const fadeInElements = document.querySelectorAll('.fade-in');
    fadeInElements.forEach(element => observer.observe(element));
});


document.addEventListener('DOMContentLoaded', function () {
    const featureBoxes1 = document.querySelectorAll('.featureBox1');
    const featureBoxes2 = document.querySelectorAll('.featureBox2');
    const featureBoxes3 = document.querySelectorAll('.featureBox3');

    const observerOptions = {
        root: null, // Observa la visibilidad dentro del viewport
        rootMargin: '0px',
        threshold: 0.1 // El umbral puede ser ajustado según se necesite
    };

    function animateBoxes(boxes, delay) {
        boxes.forEach((box, index) => {
            setTimeout(() => {
                box.classList.add('visible');
            }, index * delay);
        });
    }

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target.classList.contains('featureBox1')) {
                    animateBoxes([entry.target], 1500);
                } else if (entry.target.classList.contains('featureBox2')) {
                    animateBoxes([entry.target], 5000);
                } else if (entry.target.classList.contains('featureBox3')) {
                    animateBoxes([entry.target], 1000);
                }
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    featureBoxes1.forEach(box => observer.observe(box));
    featureBoxes2.forEach(box => observer.observe(box));
    featureBoxes3.forEach(box => observer.observe(box));
});


/*Move numbers*/
document.addEventListener('DOMContentLoaded', () => {
    // Función para animar los números
    const formatTime = (minutes) => {
        const hours = Math.floor(minutes / 60);
        const mins = minutes % 60;
        return `${hours}h ${mins.toString().padStart(2, '0')}m`;
    };

    const incrementCounter = (entry) => {
        const target = +entry.target.getAttribute('data-target');

        const updateCounter = () => {
            const current = entry.target.innerText.split('h ')[0].replace('h ', '') * 60 + +entry.target.innerText.split('h ')[1]?.replace('m', '') || 0;
            const increment = target / 200;

            if (current < target) {
                const newCurrent = Math.ceil(current + increment);
                entry.target.innerText = formatTime(newCurrent);
                setTimeout(updateCounter, 1);
            } else {
                entry.target.innerText = formatTime(target);
            }
        };

        updateCounter();
    };

    // Observador para animar los números
    const counters = document.querySelectorAll('.number');
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                incrementCounter(entry);
                counterObserver.unobserve(entry.target); // Deja de observar después de iniciar el conteo
            }
        });
    }, {root: null, rootMargin: '0px', threshold: 0.1});

    counters.forEach(counter => {
        counterObserver.observe(counter);
    });

    // Observador para hacer visible el elemento "Breakdown"
    const breakdownElement = document.getElementById('breakdown');
    if (breakdownElement) {
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    breakdownElement.classList.add('visible');
                    observer.unobserve(entry.target); // Deja de observar después de hacer visible
                }
            });
        }, observerOptions);

        observer.observe(breakdownElement);
    }
});


/*ONE BY ONE PROJECT*/

document.addEventListener("DOMContentLoaded", function() {
    const fadeInElements = document.querySelectorAll('.fade-in-text');

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Aquí aplicamos un retardo entre cada h2
                fadeInElements.forEach((element, index) => {
                    setTimeout(() => {
                        element.classList.add('visible');
                    }, index * 300); // 300ms de retardo entre cada uno
                });

                observer.unobserve(entry.target); // Dejar de observar después de la primera animación
            }
        });
    }, { threshold: 0.1 });

    // Observar cada elemento
    fadeInElements.forEach(element => {
        observer.observe(element);
    });
});


console.log("Script cargado correctamente");


