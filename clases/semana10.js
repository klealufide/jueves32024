$(function () {
    $("#first").on("mouseleave", function () {
        $(this).slideUp();
        $("img").css("display","block");
        $("p").addClass("green");
    });

    $("#first").on("mouseenter", function () {
        $("p").text("Nuevo texto");
        $("p").css("font-size","50px");
        $("img").css("display","none");
        $("p").addClass("red");
        $(this).html("<h1>Cambio texto</h1>");
    });

    $("img").on("mouseenter", function () {
        $(this).attr("src","patio.jpg");
    });

    $("img").on("mouseleave", function () {
        $(this).attr("src","salon.jpg");
    });
})