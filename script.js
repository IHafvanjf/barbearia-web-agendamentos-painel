document.addEventListener("DOMContentLoaded", () => {
    let items = document.querySelectorAll(".carrousel-item");
    let totalItems = items.length;
    let currentIndex = 2; // Começa no centro

    function updateCarrousel() {
        items.forEach((item, index) => {
            let diff = index - currentIndex;

            // Ajusta o loop: quando passa do último, reinicia do primeiro
            if (diff < -totalItems / 2) {
                diff += totalItems;
            } else if (diff > totalItems / 2) {
                diff -= totalItems;
            }

            let scale = 1 - Math.abs(diff) * 0.1;
            let zIndex = 10 - Math.abs(diff);
            let opacity = 1 - Math.abs(diff) * 0.1;
            let translateX = diff * 220;
            let rotateY = diff * -10;

            gsap.to(item, {
                duration: 0.5,
                scale: scale,
                zIndex: zIndex,
                opacity: opacity,
                x: translateX,
                rotationY: rotateY,
                ease: "power2.out"
            });

            if (diff === 0) {
                item.classList.add("active");
            } else {
                item.classList.remove("active");
            }
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalItems;
        updateCarrousel();
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + totalItems) % totalItems;
        updateCarrousel();
    }

    // Navegação por setas do teclado
    document.addEventListener("keydown", (event) => {
        if (event.key === "ArrowRight") {
            nextSlide();
        } else if (event.key === "ArrowLeft") {
            prevSlide();
        }
    });

    // Navegação por clique nos itens
    items.forEach((item, index) => {
        item.addEventListener("click", () => {
            currentIndex = index;
            updateCarrousel();
        });
    });

    updateCarrousel();
});

function maps() {
    const streetIframe = document.getElementById('street');
    const mapsIframe = document.getElementById('maps'); 
    if (mapsIframe.style.display === 'none') {
        mapsIframe.style.display = 'block';  
        streetIframe.style.display = 'none';  
    } else {
        mapsIframe.style.display = 'none'; 
        streetIframe.style.display = 'block'; 
    }
}