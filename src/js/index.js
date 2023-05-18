function navigateTo(navURL) {
    event.preventDefault();
    var currentURL = window.location.href;
    $.ajax({
        url: navURL,
        method: 'GET',
        dataType: 'json',
        success: function (response) {
            $('#contentMainHome').html(response.html);
            history.pushState({ page: navURL }, '', navURL);
            sessionStorage.setItem('previousURL', currentURL);
            sessionStorage.setItem('currentURL', navURL);
            main(); // Call function changecolor
            },
        error: function (xhr, status, error) {
            console.log('Error:', error);
        }
    });
}

window.addEventListener('popstate', function (event) {
    var navPage = sessionStorage.getItem('previousURL');
    if (navPage != null) {
        navigateTo(navPage);
    }
});

function prevPage() {
    var navPage = sessionStorage.getItem('previousURL');
    if (navPage != null) {
        navigateTo(navPage);
    }
}

function nextPage() {
    var navPage = sessionStorage.getItem('previousURL');
    if (navPage != null) {
        navigateTo(navPage);
    }
}