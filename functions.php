<?php
function br(){
    echo "<br>";
};
function start_pre_tag(){
    echo "<pre>";
};
function end_pre_tag(){
    echo "</pre>";
};

function new_user($username,$password){
    global $conn;
    $sql = "
        insert into users (username,password) values ('$username','$password');
    ";
	mysqli_query($conn,$sql);
};
function new_chat($name,$image_path){
    global $conn;
    $sql = "
    insert into chats (name,image_path) values ('$name','$image_path');
    ";
	mysqli_query($conn,$sql);
};
function new_pv_massage($sender,$receiver,$message){
    global $conn;
    $sql = "
    insert into pv_messages (sender,receiver,message) values 
    ('$sender','$receiver','$message');
    ";
	mysqli_query($conn,$sql);
};
function new_group_message($chat_id,$sender,$message){
    global $conn;
    $sql = "
        insert into group_messages (chat_id,sender,message)
        values ($chat_id,'$sender','$message');
    ";
	mysqli_query($conn,$sql);
};
function new_like($post_id,$username){
    global $conn;
	$sql = "
		select * from likes where post_id = $post_id and username = '$username';
	";
    $results = mysqli_query($conn,$sql);
    if($row != mysqli_fetch_assoc($results)){
        $sql = "
            insert into likes (post_id,username) values ($post_id,'$username');
        ";
		mysqli_query($conn,$sql);
    };
};
function new_post($title,$caption,$sender_username,$image_path,$video_path){
    global $conn;
	$sql = "
    insert into posts (title,caption,sender_username,image_path,video_path)
    values ('$title','$caption','$sender_username','$image_path','$video_path');
    ";
    mysqli_query($conn,$sql);
};
function new_comment($post_id,$username,$comment){
    global $conn;
    $sql = "
    insert into comments (post_id,username,comment)
    values ($post_id,'$username','$comment');
    ";
	mysqli_query($conn,$sql);
};
function new_member($chat_id,$username){
    global $conn;
    $sql = "
        insert into members (chat_id,username)
        values ($chat_id,'$username');
    ";
	mysqli_query($conn,$sql);
};
function new_main($key_name,$key_value){
    global $conn;
    $sql = "
        insert into main (key_name,key_value)
        values ('$key_name','$key_value');
    ";
	mysqli_query($conn,$sql);
};
function show_pv_messages($chat_id,$username_1,$username_2){
    global $conn;
    $sql = "
        select * from pv_messages where (sender='$username_1' and receiver='$username_2') or (sender='$username_2' and receiver='$username_1');
    ";
	$results = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($results)){
        //use this variables in sample html
        //$row["sender"]
        //$row["receiver"]
        //$row["message"]
    };

};
function show_group_messages($chat_id){
    global $conn;
    
	$sql = "
        select * from group_messages where (chat_id='$chat_id');
    ";
	$results = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($results)){
        //use this variables in sample html
        //$row["sender"]
        //$row["message"]
    };

};
function post_likes_count($post_id){
    global $conn;
    $sql = "
        select * from likes where post_id = $post_id;
    ";
	$results = mysqli_query($conn,$sql);
    $counter = 0;
    while($row = mysqli_fetch_assoc($results)){
        $counter++;
    };
    return $counter;
};
function show_post_comments($post_id){
    global $conn;
    $sql = "
        select * from comments where post_id = $post_id;
    ";
	$results = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($results)){
       /*  use this var s:
        $row["username"]
        $rom["comment"] */
        
    };
};
function show_all_posts(){
    global $conn;
    $sql = "
        select * from posts;
    ";
	$results = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($results)){
        /* use this var s :
        $row["tilte"]
        $row["caption"]
        $row["sender_username"]
        $row["image_path"]
        $row["video_path"] */
    };
};
function check_user_exists($username){
    global $conn;
    $sql = "
        select * from users where username = '$username'
    ";
	$results = mysqli_query($conn,$sql);
    if ($row = mysqli_fetch_assoc($results)){
        return true;
    }else{
        return false;
    };
};
function login_check($username,$password){
    global $conn;
    $sql = "
    select password from users where username = '$username'
    ";
	$results = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($results);
    if($row["password"]==$password){
        return true;
    }else{
        return false;
    };
};


?>






