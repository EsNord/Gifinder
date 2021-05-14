
$('#search-input').keypress(function (e) {
    var key = e.which;
    if(key == 13)  // the enter key code
    {
        var url = "/view-results/"+$(this).val()
        window.location.replace(url);

    }
});