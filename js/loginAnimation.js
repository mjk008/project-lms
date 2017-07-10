$(document).ready(function(){
   $('.button').click(function(){
        $(document).ajaxStart(function(){
            $(".error").text("Please wait..");
        });

        $.post("php/loginUser.php", $("#passwordForm").serialize(), function(data){
            if(data == "VALID")
                window.location.replace("HomePage.html");
            else
                $(".error").text(data);
        });
   });
});