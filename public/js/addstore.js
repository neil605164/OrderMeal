$(document).ready(function(){
    $(".info").focusin(function() {
        $(".info").css("background-color", "#FFFFCC");
    });
    $(".info").focusout(function() {
        $(".info").css("background-color", "#FFCCCC");
    });
});
