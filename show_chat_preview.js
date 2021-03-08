$(document).ready(function(){
    $(".post .comments_icon").click(function(){
        $(this).css({"transform":"rotate(90deg)"});
        $(this).parent().find(".comments_input").fadeIn().animate({"width":"465px"});
    });
    $(".post .like_button").click(function(){
        if($(this).attr("src")=="like_button.svg"){
            $(this).attr("src","heart-fill.svg");
            //add new like
        }else{
            $(this).attr("src","like_button.svg");
            //$.ajax({
            //    url:"app.php?action=5&post_id="+$(this).find(".post_id").html()+"&username="+"'"+<?php echo $_COOKIE["username"] ?>+"'";
            //});
            //remove like
        };
    });
});
