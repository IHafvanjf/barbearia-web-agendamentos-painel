document.addEventListener('DOMContentLoaded', () => {
    const themeCheckbox = document.getElementById('theme-checkbox');
    const logo = document.querySelector('.navbar-brand img');

    if (!themeCheckbox || !logo) return;

    const isDarkMode = localStorage.getItem('darkMode') === 'true';
    themeCheckbox.checked = isDarkMode;
    document.body.classList.toggle('dark-mode', isDarkMode);
    logo.src = isDarkMode ? 'public/img/logoDark.png' : 'public/img/logoLight.png';

    themeCheckbox.addEventListener('change', () => {
        const isDarkMode = themeCheckbox.checked;
        document.body.classList.toggle('dark-mode', isDarkMode);
        logo.src = isDarkMode ? 'public/img/logoDark.png' : 'public/img/logoLight.png';
        localStorage.setItem('darkMode', isDarkMode);
    });
});
