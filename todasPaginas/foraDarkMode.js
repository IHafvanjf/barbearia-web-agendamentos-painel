document.addEventListener('DOMContentLoaded', () => {
    const themeCheckbox = document.getElementById('theme-checkbox');
    const logo = document.querySelector('.navbar-brand img'); // Pega a logo da navbar

    if (!themeCheckbox) {
        console.error("Elemento 'theme-checkbox' não encontrado!");
        return; // Caso não encontre o checkbox, o código não prossegue.
    }

    const isDarkMode = localStorage.getItem('darkMode') === 'true';
    themeCheckbox.checked = isDarkMode;
    document.body.classList.toggle('dark-mode', isDarkMode);
    document.body.classList.toggle('light-mode', !isDarkMode); // Garantir que o modo claro seja configurado

    // Definir imagem invertida ao estado do dark mode
    const logoPath = window.location.pathname.includes('QuemSomos', 'Agendamento') ? '../img/' : './img/';
    

    
    if (isDarkMode) {
        logo.src = '../img/logoDark.png'; // Se estiver em dark mode, mostra a logoDark
    } else {
        logo.src = '../img/logoLight.png'; // Se não, mostra a logoLight
    }
    
    console.log('Logo fonte:', logo.src);

    themeCheckbox.addEventListener('change', () => {
        const isDarkMode = themeCheckbox.checked;
        document.body.classList.toggle('dark-mode', isDarkMode);
        document.body.classList.toggle('light-mode', !isDarkMode); // Alterna o modo claro

        if (isDarkMode) {
            logo.src = '../img/logoDark.png'; // Se estiver em dark mode, mostra a logoDark
        } else {
            logo.src = '../img/logoLight.png'; // Se não, mostra a logoLight
        }
        console.log('Nova fonte da logo: ', logo.src);

        // Salvar no localStorage
        localStorage.setItem('darkMode', isDarkMode);
    });
});
