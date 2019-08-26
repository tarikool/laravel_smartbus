$(document).ready(function () {


    $("#loginform").submit(function(event){
        $("#loginmessage").hide();
        event.preventDefault();
        var datatopost = $(this).serializeArray();
        // console.log(datatopost);
        $.ajax({
            url: "model/login.php",
            type: "POST",
            data: datatopost,
            success: function(data){
                if(data == "success"){
                    window.location = "main.php";
                }else{
                    $('#loginmessage').html(data);
                    $("#loginmessage").slideDown(200);
                    console.log(data);
                }
            },
            error: function(){
                $("#loginmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
                $("#loginmessage").slideDown(200);
                $('html, body').animate({
                    'scrollTop': $('#loginmessage').offset().top -20
                }, 2000);

            }

        });

    });

    $("#signupform").submit(function(event){
        $("#signupmessage").hide();
        event.preventDefault();
        var datatopost = $(this).serializeArray();
        // console.log(datatopost);
        $.ajax({
            url: "model/signup.php",
            type: "POST",
            data: datatopost,
            success: function(data){
                if(data == "success"){
                    window.location = "index.php";
                }else{
                    $('#signupmessage').html(data);
                    $("#signupmessage").slideDown(200);

                    $('#signupModal').animate({
                        'scrollTop': $('#signupModal').offset().top-450
                    }, 2000);
                    console.log(data);
                }
            },
            error: function(){
                $("#signupmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
                $("#signupmessage").slideDown(200);

            }

        });

    });
});