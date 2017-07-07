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

    $(".header").animate({'opacity':'0'}, 0);
    $(".footer").animate({'opacity':'0'}, 0);
    $(".contribute").animate({'opacity':'0'}, 0);
    $(".header").animate({'opacity':'1', 'marginTop':'-=150px'}, 5000);
    $(".header").animate({'marginTop':'+=20px'}, 2500, function(){quoteFade()});

    setTimeout(function(){
         $('.contribute').animate({'opacity':'1'}, 2000);
         $('.footer').animate({'opacity':'1'}, 2000);
    }, 12000);

    $('.contribute').mouseenter(function(){
        $('a').css({"text-decoration":"underline", "fontWeight":"bold"});
    });

    $('.contribute').mouseleave(function(){
        $('a').css({"text-decoration":"none", "fontWeight":"normal"});
    });
       
});
