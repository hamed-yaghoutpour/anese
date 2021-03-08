$(document).ready(function(){
//codes of:header
$("#header .hamed_relative_container .home_icon").hover(function(){
    $(this).find(".icon").css("fill","darkblue");
    $(this).css({"background-color":"white"});
},function(){
    $(this).find(".icon").css("fill","white");
    $(this).css({"background-color":"transparent"});
});         
$("#user_account .gear_icon").click(function(){

    var tmp = $("#user_account .settings_page");
    tmp.fadeIn();
    tmp.animate({"width":"100%","height":"100%","top":"0px","left":"0px"},function(){
        tmp.parent().find(".hamed_relative_container").fadeIn();
        $("#user_account .container").hide();
    });
});
$("#user_account .settings_page .back_icon").click(function(){
    var tmp = $("#user_account .settings_page");
    
    tmp.find(".hamed_relative_container").fadeOut();
    tmp.animate({"width":"70px","height":"70px"},function(){
            tmp.animate({"top":"567px","left":"231px"},function(){
                tmp.fadeOut();
                $("#user_account .container").show();
            });
            
    });
    // tmp.css({"top":"567px","left":"231px"});
    // tmp.animate({"width":"70px","height":"70px"},function(){
            
                // tmp.fadeOut();
            
    // });

});
$("#header .hamed_relative_container .home_icon").click(function(){
    window.location.assign("home.php");
});
});