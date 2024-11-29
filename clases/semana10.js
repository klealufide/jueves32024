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

    // Semana 11


    $("#mostrar").on("click", function () {
        $("#cuadrado").fadeIn();
    });


    $("#ocultar").on("click", function () {
        $("#cuadrado").fadeOut();
    });

    $("#color").on("click", function () {
        $("#cuadrado").toggleClass("blue");
    });


    $("#agrandar").on("click", function () {
        $("#cuadrado").animate({
            width: "500px",
            height: "500px",
            opacity: "0.7"
        }, 1000);
    });


    $("#achicar").on("click", function () {
        $("#cuadrado").animate({
            width: "50px",
            height: "50px",
            opacity: "0.2"
        }, 1000);
    });
  
    $("#normal").on("click", function () {
        $("#cuadrado").animate({
            width: "100px",
            height: "100px",
            opacity: "1"
        }, 1000);
    });

    $("#addTask").on("click", function () {
        let newTask = $("#task").val();
        if(newTask.trim() != ""){
            $("#listTasks").prepend("<li>"+newTask+"</li>");
            $("#task").val("");
        }
    });
})