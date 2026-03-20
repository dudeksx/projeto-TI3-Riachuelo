document.addEventListener('DOMContentLoaded', function () {

    const perfiltg = document.getElementById('perfil');
    const containerIframeUser = document.getElementById('containerIframeUser');
    const UserIframe = document.getElementById('iframeUser');
    const page = document.getElementById('page');
    const locacao = document.getElementById('locacao');
    const fav = document.getElementById('fav');
    const cevent = document.getElementById('c-event');
    const convi = document.getElementById('convi');
    const navLinks = document.querySelectorAll('.nav-link');

    perfiltg.addEventListener('change', function () {
        navLinks.forEach(link => link.classList.remove('active'));
        if (this.checked) {
            containerIframeUser.style.display = 'block';
            UserIframe.src = '../../userpage/Usuario.html';
        } else {
            containerIframeUser.style.display = 'none';
            UserIframe.src = '';
        }
    });
    navLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Evita recarregar a página

            // Remove 'active' de todos os links
            navLinks.forEach(l => l.classList.remove('active'));

            // Adiciona 'active' apenas ao clicado
            this.classList.add('active');
        });
    });
});
