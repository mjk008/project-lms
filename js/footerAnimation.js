function animateFooter()
{
    $("i")
        .animate({"font-size": "25px"}, 500)
        .animate({"font-size": "20px"}, 500, animateFooter);
}

function revertChanges()
{
    $("i")
        .animate({
            "font-size": "20px"
        }, 100);
}

$(document).ready(function(){
     $(".footer").mouseenter(function(){
        animateFooter();
    });

    $(".footer").mouseleave(function(){
        $("i").stop(true, revertChanges());
    });
});