$(document).on('click', 'a.nav-link', function(e) {
    e.preventDefault();
    
    var pageURL = $(this).attr('href')

    history.pushState(null, '', pageURL);
    $.ajax({
        type: "GET",
        url: "page_content.php",
        data: { page: pageURL },
        dataType: "html",
        success: function(data) {
            $("#contentMainHome").html(data);
        }
    })
})