document.addEventListener("DOMContentLoaded", function () {
    const themeCheckbox = document.getElementById("theme-checkbox");

    // Verifica se há um tema salvo no LocalStorage
    const isDarkMode = localStorage.getItem("darkMode") === "true";
    themeCheckbox.checked = isDarkMode;
    document.body.classList.toggle("dark-mode", isDarkMode);

    // Alterna o modo escuro/claro ao clicar no botão
    themeCheckbox.addEventListener("change", function () {
        const isDarkMode = themeCheckbox.checked;
        document.body.classList.toggle("dark-mode", isDarkMode);
        localStorage.setItem("darkMode", isDarkMode);
    });
});
