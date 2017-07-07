/*Designed and coded by Udam Liyanage for Mind Labs. 2017*/

$(document).ready(function(){
    $('.footer').mouseenter(function(){
        $('i').animate({'fontSize':'25px'}, 300, function(){
            $('i').animate({'fontSize':'20px'}, 300, function(){
                $('i').animate({'fontSize':'25px'}, 300, function(){
                    $('i').animate({'fontSize':'20px'}, 300);
                });
            });
        });
    });
});