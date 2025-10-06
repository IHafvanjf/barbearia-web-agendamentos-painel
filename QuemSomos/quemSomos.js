document.querySelectorAll('.profissional').forEach(profissional => {
    profissional.addEventListener('mouseover', () => {
        let info = profissional.querySelector(".info");
        info.style.width = "250px";
        info.style.padding = "20px";
        info.style.opacity = "1";
    });

    profissional.addEventListener('mouseleave', () => {
        let info = profissional.querySelector(".info");
        info.style.width = "0";
        info.style.padding = "0";
        info.style.opacity = "0";
    });
});
