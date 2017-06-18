$(document).ready(function(){
    $("input").focusin(function(){
        $(this).css({border: "2px solid #0066cc"}).animate({ 
            width: "450px", 
            height: "50px",
        })
    });

    $("input").focusout(function(){
        $(this).css({border: "2px solid #000000"}).animate({
            width: "300px",
            height: "40px",
        })
    });

    $(".login-button").mouseenter(function(){
        $(this).css({"background-color": "#0066cc", "opacity": "0.50"})
    });

    $(".login-button").mouseleave(function(){
        $(this).css({"background-color": "#8585ad", "opacity": "0.75"})
    });

    $("a").mouseenter(function(){
        $(this).css({"text-decoration": "underline", "font-size": "25px"})
    });

    $("a").mouseleave(function(){
        $(this).css({"text-decoration": "none", "font-size": "20px"})
    });

    $(".login-button").click(function(){
        alert("Button Click");
        //AJAX after the button click here
    });

    $(".footer").mouseenter(function(){
        $(this).css({"color": "#ff0000"}),
        $(".footer .heart").css({"color": "#000000"})
    });

    $(".footer").mouseleave(function(){
        $(this).css({"color": "#000000"}),
        $(".footer .heart").css({"color": "#ff0000"})
    });
});