<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>anese - chats</title>
<script src="jquery-3.5.1.js"></script>
<script src="chats.js"></script>
<link rel="stylesheet" href="chats.css">
<link rel="icon" type="image/png" href="IMG_20201231_090439_070.jpg">
</head>
<body>
    <div id="solid_background_2"></div>
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
    <div id="chats">
        <h1 class="title">پیام ها</h1>
        <div class="container">
            <div class='chat'>
                <div class="chat_index">0</div>
                <div class="image"></div>
                <div class="name">حامد یاقوت پور</div>
                <div class="message">آخرین پیام : الهی شکرت</div>
                
            </div>
            <div class='chat'>
                <div class="chat_index">1</div>
                <div class="image"></div>
                <div class="name">حامد یاقوت پور</div>
                <div class="message">آخرین پیام : الهی شکرت</div>
                
            </div>
            
        </div>
	</div>
</body>
</html>
<script>
    $.ajax({
        url:"app.php",
        method:"GET",
        data:{
            hamed:"hamed"
        },
        success:function(data){
            console.log(data);
        }
    });
</script>
