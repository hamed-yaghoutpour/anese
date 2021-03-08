<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="media/IMG_20201231_090439_070.jpg">
<meta charset="utf-8">
<style>
html,body{
height:100%;
width:100%;
padding:0px;
margin:0px;
}
#solid_background_1{
background-color:aqua;
height:100%;
width:100%;
position:fixed;
}
#welcome .image{
width:60%;
position:absolute;
top:18%;
left:50%;
transform:translate(-50%,0%);
}
#welcome .button_1{
    /*
    height:8%; 
    width:60%;
    */
    height:0px;
    width:0px;
    padding:0px;
    margin:0px;
    background-color:green;
    position:absolute;
    bottom:20%;
    left:50%;
    transform:translate(-50%,0%);
    direction:rtl;
    border:2px solid darkblue;
    border-radius:80px;
    transition-duration:2s;
    font-family:"b baran";
    
    
}
#welcome .button_1 p{
    padding:0px;
    margin:0px;
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    color:white;
    font-size: 63px;
    transition-duration:2s;
}
#header{
position:fixed;
top:0px;
left:0px; 
height:10%;
width:100%;
background-color:blue;
z-index:1;
}
.hamed_relative_container{
    position:relative;
    height:100%; 
    width:100%;
}
#header .hamed_relative_container .icon_container .chevron-down{
    height:100%;
    margin:0px;
    padding:0px;
}
#header .hamed_relative_container .icon_container{
    position:absolute;
    height:50%;
    left:4%;
    top:50%;
    transform:translate(0%,-50%);
    border-radius: 20px;
    
}
#header .text{
    position: absolute;
    direction: rtl;
    color: darkblue;
    margin: 0px;
    padding-left: 12px;
    padding-right: 12px;
    top: 50%;
    background-color: white;
    font-size: 69px;
    transform: translate(0%,-50%);
    right: 16%;
    border-radius: 15px;
    font-family:"b baran";
    
}
#header .hamed_relative_container .login_icon .icon{
    height:100%;
    margin:0px;
    padding:0px;
}
#header .hamed_relative_container .login_icon{
    position:absolute;
    height:50%;
    right:4%;
    top:50%;
    transform:translate(0%,-50%);
    border-radius: 14px;
    
    
}
</style>
<title>anese - welcome</title>
<link rel="stylesheet" href="welcome.css">
<script src="jquery-3.5.1.js"></script>
<script>
$(document).ready(function(){
    if(Number($("body").css("width").split("px")[0])>Number($("body").css("height").split("px")[0])){
        alert("نسخه کامپیوتر هنوز فعال نیست");
        $("body").empty();
    };
        //codes of:header
	$("#header .hamed_relative_container .login_icon").hover(function(){
		$(this).find(".icon").css("fill","darkblue");
		$(this).css({"background-color":"white"});
	},function(){
		$(this).find(".icon").css("fill","white");
		$(this).css({"background-color":"transparent"});
	});
        $("#welcome .button_1").animate({"width":"60%","height":"8%"},500);
        $("#welcome .button_1").hover(function(){
            $(this).css({"background-color":"blue"});
            $(this).find("p").css({"color":"white"});
        },function(){
            $(this).css({"background-color":"green"});
            $(this).find("p").css({"color":"black"});
        });
        $("#welcome .button_1").click(function(){
            window.location.assign("login.php");
        });
});
</script>
</head>
<body>
    <div id="solid_background_1"></div>
    <div id="header">
        <div class="hamed_relative_container">
            <div class="icon_container">
                <svg class="chevron-down" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="white" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
            </div>
            <h1 class="text">گروه جهادی آنسه الشهدا</h1>
            <div class="login_icon">
                <svg class="icon" viewBox="0 0 16 16" class="bi bi-person" fill="white" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                </svg>
            </div>
        </div>	
	</div>
    <div id="welcome">
		<img class="image" src="IMG_20201231_090439_070.jpg">
		<button class="button_1"><p class="center">نسخه آزمایشی</p></button>
	</div>
</body>
</html>
