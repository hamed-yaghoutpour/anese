$(document).ready(function(){
    //codes of:header
    $("#header .hamed_relative_container .login_icon").hover(function(){
        $(this).find(".icon").css("fill","darkblue");
        $(this).css({"background-color":"white"});
    },function(){
        $(this).find(".icon").css("fill","white");
        $(this).css({"background-color":"transparent"});
    });         
    $("#chats .chat").click(function(){
        var chat_index=Number($(this).find(".chat_index").html().trim());
        //open chat page with this index with php and jquery ajax
        console.log(chat_index);
        console.log(typeof chat_index);
    });
    
});