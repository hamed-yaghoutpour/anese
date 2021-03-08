$(document).ready(function(){
    //codes of:header
    $("#header .hamed_relative_container .login_icon").hover(function(){
        $(this).find(".icon").css("fill","darkblue");
        $(this).css({"background-color":"white"});
    },function(){
        $(this).find(".icon").css("fill","white");
        $(this).css({"background-color":"transparent"});
    });         
    //#login_page codes:
    $("#login_page .password_input").on("focus",function(){
        $("#login_page .submit_icon").fadeIn();
    });
    $(document).keydown(function(e){
        if(e.keyCode==13 && $("#login_page .username_input").is(":focus")){
            $("#login_page .password_input").focus();
        }else if(e.keyCode==13 && $("#login_page .password_input").is(":focus")){
            $("#login_page .submit_icon").trigger("click");
        };
    });
    $("#login_page .submit_icon").click(function(){
        window.location.assign("login.php?username="+$("#login_page .username_input").val()+"&password="+$("#login_page .password_input").val());
    });
    $("#login_page .password_input").on("blur",function(){
        $("#login_page .submit_icon").fadeOut();
    });
});