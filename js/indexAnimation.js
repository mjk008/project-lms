/*Designed and Coded by Udam Liyanage for Mind Labs. 2017*/

/*Designed and Coded by Udam Liyanage for Mind Labs. 2017*/

$(document).ready(function(){
    function quoteFade(){
        $.each($quoteList, function(idx, elem) {
            var newEL = $("<span/>").text(elem).css({
                opacity: 0
            });
            newEL.appendTo($quote_msg);
            newEL.delay(idx * 70);
            newEL.animate({opacity: 1}, 1100);
        });

        setTimeout(function(){authorFade()}, 4300);
    }

    function authorFade(){
        $.each($authorList, function(idx, elem) {
            var newEL = $("<span/>").text(elem).css({
                opacity: 0
            });
            newEL.appendTo($author);
            newEL.delay(idx * 70);
            newEL.animate({opacity: 1}, 1100);
        });
    }

    var $quote_msg = $('#quote');
    var $author = $('#author');
    var $authorList = $("#author").text().split("");
    var $quoteList = $('#quote').text().split("");
    $('#quote').text("");
    $('#author').text("");

    $(".footer").animate({'opacity':'0'}, 0);
    $(".contribute").animate({'opacity':'0'}, 0);

    quoteFade();

    setTimeout(function(){
         $('.contribute').animate({'opacity':'1'}, 2000);
         $('.footer').animate({'opacity':'1'}, 2000);
    }, 5000);

    $('.contribute').mouseenter(function(){
        $('a').css({"text-decoration":"underline", "fontWeight":"bold"});
    });

    $('.contribute').mouseleave(function(){
        $('a').css({"text-decoration":"none", "fontWeight":"normal"});
    });

    //Form Animation

    $(".exitButton").click(function(){
        $(".overlay-container").css("display", "none");
        $(".body-container").foggy(false);
    });

    $(".next-button").click(function(){
        alert("Next Button Clicked");
    });

    $("#loginButton").click(function(){
        $(".footer").css("display", "none");
        $(".overlay-container").css("display", "block");
        $(".body-container").foggy({
            blurRadius: 8,          // In pixels.
            opacity: 0.8,           // Falls back to a filter for IE.
            cssFilterSupport: true
        });
    });

    $("input").focus(function(){
        $(this).css({
            "background-color" : "#4CAF50", 
            "color":"#ffffff"
        });
    });

    $("input").blur(function(){
        $(this).css({
            "background-color" : "#ffffff", 
            "color" : "#000000"
        });
    });
});

