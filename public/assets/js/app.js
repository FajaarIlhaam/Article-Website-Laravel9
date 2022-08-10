//jquery Show password Login
$(function () {
    $("#toggleeyes").click(function () {
        $(this).toggleClass("fa-eye fa-eye-slash");
       var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
        $("#passshow").attr("type", type);
    });
});

//Jquery show password register
$(function () {
    $("#toggleregister").click(function () {
        $(this).toggleClass("fa-eye fa-eye-slash");
       var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
        $("#passregister").attr("type", type);
    });
});