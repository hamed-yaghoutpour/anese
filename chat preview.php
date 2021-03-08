echo "<style>
.post{
    position: relative;
    height:700px;
    width:100%;
    
    margin-bottom:100px;


}
.post .profile_img{
    height: 130px;
    width: 130px;
    position: absolute;
    top: 17px;
    right: 3px;
    border-radius: 90%;
    background-color: aqua;

}
.post .profile_full_name{
    direction: rtl;
    color: aqua;
    position: absolute;
    top: -17px;
    font-size: 79px;
    right: 150px;
    font-family: 'b baran';


}
.post .more{
    color: aqua;
    position: absolute;
    top: 7px;
    left: 27px;
    font-size: 88px;
}
.post .media_image{
    height: 400px;
    width: 100%;
    position: absolute;
    background-color: darkblue;
    border-radius: 58px;
    top: 180px;
    left: 50%;
    transform: translate(-50%,0%)
    
}
.post .like_button{
    fill: aqua;
    position: absolute;
    top: 620px;
    left: 20px;
    height: 66px;
    
}
.post .comments_input{
        border: 2px solid aqua;
    position: absolute;
    top: 620px;
    right: 100px;
    height: 65px;
    display:none;
    width: 0px;
    border-radius: 30px;
    background-color:transparent;
    direction:rtl;
    padding-right: 22px;
        font-size: 30px;
        color:white;
}
.post .share_icon{
    position: absolute;
    top: 620px;
    left: 111px;
    height: 66px;
}
.post .comments_icon{
    position: absolute;
    top: 620px;
    right:20px;
    height: 66px;
}
</style>";
$id = '';
$sender_username = '';
$image_path = '';
echo "
	<div class='post'>
		<div class='post_id'>$id</div>
		<div class='profile_img'></div>
		<div class='profile_full_name'>$sender_username</div>
		<div class='date'></div>
		<div class='more'>...</div>
		<div class='media_image'></div>
		<img src='like_button.svg' class='like_button'>
		<input class='comments_input' placeholder='متن نظر خود را وارد کنید'>
		<img src='share_icon.svg' class='share_icon'>
		<img src='comments_icon.svg' class='comments_icon'>
	</div>
";