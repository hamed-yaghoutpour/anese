<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>anese - home</title>
<link rel="stylesheet" href="user_account.css">
<script src="jquery-3.5.1.js"></script>
<script src="user_account.js"></script>
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
            <div class="home_icon">
            <svg viewBox="0 0 16 16" class="bi bi-house icon" fill="white" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
            </svg>
            </div>
        </div>	
	</div>
    <div id="user_account">
		<div class="user_image"></div>
		<h1 class="username"><?php echo $_COOKIE["username"] ?></h1>
		<h1 class="bio">توضیحی برای این شخص ثبت نشده است</h1>
		<div class="account_level">نامشخص</div>
		<button class="edit_button">ویرایش اطلاعات</button>
		<svg class="gear_icon" viewBox="0 0 16 16" class="bi bi-gear-fill" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z"/>
		</svg>
		<div class="settings_page">
            <div class="hamed_relative_container" style="display:none;">
                <div class="title_3">تنظیمات</div>
                <svg class="back_icon" viewBox="0 0 16 16" class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
                <div class="buttons_container">
                    <div class="option">
                        <img src="sliders.svg" class="image">
                        <div class="name">تعویض فونت مثلا</div>
                        <div class="info">با وارد کردن فونت جدید فونت بهتری داشته باشید</div>
                    
                    </div>
                    <div class="option">
                        <img src="sliders.svg" class="image">
                        <div class="name">تعویض فونت مثلا</div>
                        <div class="info">با وارد کردن فونت جدید فونت بهتری داشته باشید</div>
                    
                    </div>
                    
                </div>
		</div>

		</div>
		<div class="title">پست ها</div>
		<div class="title_2">#1</div>
		<div class="container">
        <?php
        include_once("app.php");
        new_post("title","caption","hamed","image path","video path");
        include_once("show_chat_preview.php");
        $username = $_COOKIE["username"];
        $results = $db->query("
        select * from posts where sender_username = '$username'
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

