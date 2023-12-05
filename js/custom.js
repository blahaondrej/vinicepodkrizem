$(document).ready(function(){
    var path = location.pathname;
    console.log(path);
    if ($(window).width() < 768) {
        if (path != '/') {
            $('footer').addClass("hidden-mobile");
        }
    }
});