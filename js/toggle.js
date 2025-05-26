document.addEventListener("DOMContentLoaded", (event) => {
    const themeToggle = document.getElementById('theme-toggle');
    const body = document.body;

    const savedTheme = localStorage.getItem('theme');
    if(savedTheme){
        body.setAttribute('data-theme', savedTheme);
        themeToggle.classList.replace(
            savedTheme === 'dark' ? 'fa-sun' : 'fa-moon',
            savedTheme === 'dark' ? 'fa-moon' : 'fa-sun'
        );
    }

    themeToggle.addEventListener('click', () => {
        const isDarkMode = body.getAttribute('data-theme') === 'dark';

        if(isDarkMode){
            body.setAttribute('data-theme', 'light');
            themeToggle.classList.replace('fa-moon', 'fa-sun');
            localStorage.setItem('theme', 'light');
        } else{
            body.setAttribute('data-theme', 'dark');
            themeToggle.classList.replace('fa-sun', 'fa-moon');
            localStorage.setItem('theme', 'dark');
        }
    });
});