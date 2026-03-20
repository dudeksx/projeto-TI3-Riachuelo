document.addEventListener('DOMContentLoaded', function () {

    const perfiltg = document.getElementById('perfil');
    const containerIframeUser = document.getElementById('containerIframeUser');
    const UserIframe = document.getElementById('iframeUser');
    const navLinks = document.querySelectorAll('.nav-link');

    // Quando clicar no toggle de perfil
    perfiltg.addEventListener('change', function () {
        // Sempre remove active dos links da sidebar
        navLinks.forEach(link => link.classList.remove('active'));

        if (this.checked) {
            // Mostra o container e carrega o perfil
            containerIframeUser.style.display = 'block';
            UserIframe.src = 'userpage/Usuario.html';
        } else {
            // Fecha o container e limpa o iframe
            containerIframeUser.style.display = 'none';
            UserIframe.src = '';
        }
    });

    // Quando clicar em qualquer link da sidebar
    navLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();

            // Desmarca o botão de perfil se estiver ativo
            perfiltg.checked = false;

            // Remove 'active' de todos os links
            navLinks.forEach(l => l.classList.remove('active'));

            // Adiciona 'active' apenas ao clicado
            this.classList.add('active');

            // Carrega a página correspondente no iframe
            const targetPage = this.getAttribute('data-page');
            if (targetPage) {
                containerIframeUser.style.display = 'block';
                UserIframe.src = targetPage;
            }
        });
    });
});
