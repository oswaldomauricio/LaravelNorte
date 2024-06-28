// $(document).ready(function() {
//     $('.estado').on('click', function(e) {
//         e.preventDefault();
//         $('#loading-spinner').show();
//         window.location.href = $(this).data('url');
//     });
// });

$(document).ready(function() {
    // Mostrar spinner ao clicar em links de navegação
    $('a').on('click', function(e) {
        e.preventDefault();
        $('#loading-spinner').show();
        window.location.href = $(this).attr('href');
    });

    // Ocultar spinner após carregar a página
    $(window).on('load', function() {
        $('#loading-spinner').hide();
    });

    // Mostrar spinner em formulários ao enviar
    $('form').on('submit', function() {
        $('#loading-spinner').show();
    });
});