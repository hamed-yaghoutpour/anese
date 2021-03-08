<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>anese - home</title>
<style>
html,body{
height:100%;
width:100%;
padding:0px;
margin:0px;
}
#solid_background_2{
background-color:black;
height:100%;
width:100%;
position:fixed;
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
#home .container{
    position: absolute;
    top: 18%;
    left: 50%;
    transform: translate(-50%,0%);
    width: 80%;
    min-height: 400px;
    

}

</style>
<script src="jquery-3.5.1.js"></script>
<?php
if(
    !isset($_COOKIE["username"])
){
    echo "
        <script>
        window.location.assign('login.php');
        </script>
    ";
};
include_once("notifications.php");
echo "
    <script>
    show_info_notification('سلام به شما');
    show_info_notification('سلام به شما');
    </script>
";
?>

<script>
$(document).ready(function(){
    //codes of:header
    $("#header .hamed_relative_container .login_icon").hover(function(){
        $(this).find(".icon").css("fill","darkblue");
        $(this).css({"background-color":"white"});
    },function(){
        $(this).find(".icon").css("fill","white");
        $(this).css({"background-color":"transparent"});
    });         
    
    $("#header .hamed_relative_container .login_icon").click(function(){
        window.location.assign("user_account.php");
    });
    
    //sublit comment:

});
</script>
<link rel="icon" type="image/png" href="IMG_20201231_090439_070.jpg">
</head>
<body>
    <div id="solid_background_2"></div>
    <div id="header">
        <div class="hamed_relative_container">
            <div class="icon_container">
                <img src="chats_icon.svg" class="chevron-down">
            </div>
            <h1 class="text">گروه جهادی آنسه الشهدا</h1>
            <div class="login_icon">
                <svg class="icon" viewBox="0 0 16 16" class="bi bi-person" fill="aqua" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                </svg>
            </div>
        </div>	
	</div>
    <div id="home">
		<div class="container">
        <?php
           include_once("app.php");
           include_once("show_chat_preview.php");
           $username = $_COOKIE["username"];
           $results = $db->query("
           select * from posts
           ");
           while($row = $results->fetchArray()){
               $id = $row["id"];
               $image_path = $row["image_path"];
               $sender_username = $row["sender_username"];
               add_new_preview($id,$sender_username,$image_path);
              
           };
         ?>
		
		</div>
		
	</div>
</body>
</html>