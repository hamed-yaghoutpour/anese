<script src="jquery-3.5.1.js"></script>
<?php
if(isset($_COOKIE["username"])){
    echo "
        <script>
        window.location.assign('home.php');
        </script>
    ";
    die("شما قبلا به اکانت خود وارد شده اید");
};

include_once("app.php");
if(
    isset($_GET["username"])
    &&
    isset($_GET["password"])
){
    if(check_user_exists($_GET["username"])){
        if(login_check($_GET["username"],$_GET["password"])){

            $username = $_GET["username"];
            setcookie("username",$_GET["username"]);
            echo "
            <script>
            window.location.assign('home.php');
            </script>
            ";
            
        }else{
            echo "
                <script>
                alert('نام کاربری وارد شده قبلا ثبت شده است ولی رمز عبور ورودی اشتباه است');
                </script>
            ";
        };
    }else{
        //check if user want to create new account
        $username = $_GET["username"];
        $password = $_GET["password"];
    ?>
                <script>
                if(confirm('نام کاربری وارد شده در سیستم وجود ندارد،در صورت تمایل به ایجاد خودکار حسابی با نام کاربری و رمز عبور وارد شده تایید کنید و در غیر این صورت، دوباره تلاش کنید')){
                    console.log('hello world 1 ');
                    $.ajax({
                    url:'app.php',
                    method:'GET',
                    async:'false',
                    data:{
                        action:'10',
                        c_n:'username',
                        c_v:'<?php echo "$username" ?>'
                    },
                    success:function(){
                        console.log('hello world 2');
                        $.ajax({
                            url:'app.php',
                            method:'GET',
                            async:'false',
                            data:{
                                action:'1',
                                username:'<?php echo "$username" ?>',
                                password:'<?php echo "$password" ?>'
                            }
                        });
                    }
                });
                };
                window.location.assign('home.php');
                </script>
   <?php };

};
?>

<script src="login.js"></script>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="IMG_20201231_090439_070.jpg">
<meta charset="utf-8">
<title>anese - login</title>
<link rel="stylesheet" href="login.css">


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
    <div id="login_page">
		<h1 class="label_1">نام کاربری :</h1>
		<h1 class="label_2">رمز عبور :</h1>
		<div class="profile_image">
		</div>
		<input class="username_input" id="login_page_username_input">
		<input type="password" class="password_input">
		<svg class="submit_icon" viewBox="0 0 16 16" class="bi bi-arrow-right-circle-fill" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-11.5.5a.5.5 0 0 1 0-1h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5z"/>
		</svg>
		<h1 class="info">* اگر در حال حاضر از کاربران سایت باشید وارد حساب خود خواهید شد و اگر عضو جدید هستید ،ابتدا با همین نام کاربری و رمز عبور عضو سایت خواهید شد و سپس وارد حساب خود می شوید.</h1>
	</div>
</body>
</html>



