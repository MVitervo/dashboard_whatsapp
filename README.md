fecha de inicio 17 de noviembre

enrutamiento:

// Navegación
function navigateTo(route) {

    history.pushState({}, '', route);

    renderPage(route);
}


// Renderizado
function renderPage(route) {

    const routes = {
        '/': '/views/information.php',
        '/login': '/views/login.php',
        '/dashboard': '/views/dashboard.php'
    };

    const view = routes[route] ?? '/views/404.php';

    $.ajax({
        url: view,
        method: 'GET',
        dataType: 'html',

        success: function(response) {
            $('#renderPage').html(response);
        },

        error: function(xhr) {
            console.error(xhr.responseText);
        }
    });
}


// Atrás y adelante del navegador
window.addEventListener('popstate', function() {

    renderPage(window.location.pathname);

});


// Carga inicial
$(function() {

    renderPage(window.location.pathname);

});