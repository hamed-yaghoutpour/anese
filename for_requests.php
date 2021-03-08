<?php  
//new user:
	if(
		isset($_GET["action"])
		&&
		$_GET["action"] == "1"
		&&
		isset($_GET["username"])
		&&
		isset($_GET["password"])

	){
		new_user($_GET["username"],$_GET["password"]);
	};

//new chat:
	if(
		isset($_GET["action"])
		&&
		$_GET["action"] == "2"
		&&
		isset($_GET["name"])
		&&
		isset($_GET["image_path"])

	){
		new_chat($_GET["name"],$_GET["image_path"]);
	};

//new pv mesage:
	if(
		isset($_GET["action"])
		&&
		$_GET["action"] == "3"
		&&
		isset($_GET["sender"])
		&&
		isset($_GET["receiver"])
		&&
		isset($_GET["message"])


	){
		new_pv_massage($_GET["sender"],$_GET["receiver"],$_GET["message"]);
	};

//new group mesage:
	if(
		isset($_GET["action"])
		&&
		$_GET["action"] == "4"
		&&
		isset($_GET["chat_id"])
		&&
		isset($_GET["sender"])
		&&
		isset($_GET["message"])


	){
		settype($_GET["chat_id"],"integer");
		new_group_message($_GET["chat_id"],$_GET["sender"],$_GET["message"]);
	};

//new like:
	if(
		isset($_GET["action"])
		&&
		$_GET["action"] == "5"
		&&
		isset($_GET["post_id"])
		&&
		isset($_GET["username"])


	){
		settype($_GET["post_id"],"integer");
		new_like($_GET["post_id"],$_GET["username"]);
	};

//new post:
	if(
		isset($_GET["action"])
		&&
		$_GET["action"] == "6"
		&&
		isset($_GET["title"])
		&&
		isset($_GET["caption"])
		&&
		isset($_GET["sender_username"])
		&&
		isset($_GET["image_path"])
		&&
		isset($_GET["video_path"])


	){
		new_post($_GET["title"],$_GET["caption"],$_GET["sender_username"],$_GET["image_path"],$_GET["video_path"]);
	};

//new comment:
	if(
		isset($_GET["action"])
		&&
		$_GET["action"] == "7"
		&&
		isset($_GET["post_id"])
		&&
		isset($_GET["username"])
		&&
		isset($_GET["comment"])


	){
		settype($_GET["post_id"],"integer");
		new_post($_GET["post_id"],$_GET["username"],$_GET["comment"]);
	};

//new member:
	if(
		isset($_GET["action"])
		&&
		$_GET["action"] == "8"
		&&
		isset($_GET["chat_id"])
		&&
		isset($_GET["username"])
	){
		settype($_GET["chat_id"],"integer");
		new_post($_GET["chat_id"],$_GET["username"]);
	};

//new main:
	if(
		isset($_GET["action"])
		&&
		$_GET["action"] == "9"
		&&
		isset($_GET["key_name"])
		&&
		isset($_GET["key_value"])
	){
		new_post($_GET["key_name"],$_GET["key_value"]);
	};

//new cookie:
	if(
		isset($_GET["action"])
		&&
		$_GET["action"] == "10"
		&&
		isset($_GET["c_n"])
		&&
		isset($_GET["c_v"])
	){
		setcookie($_GET["c_n"],$_GET["c_v"]);
	};
?>






