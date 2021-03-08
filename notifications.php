<?php
echo "
	<div id='notifications'>
		<div class='container'>
			<div class='warning_notification' style='display:none;'>
			<svg class='warning_icon' viewBox='0 0 16 16' class='bi bi-exclamation-octagon' xmlns='http://www.w3.org/2000/svg'>
				<path fill-rule='evenodd' d='M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z'/>
				<path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/>
			</svg>
			<h1></h1>
			</div>
			<div class='info_notification' style='display:none;'>
			<svg class='info_icon' viewBox='0 0 16 16' class='bi bi-exclamation-octagon' xmlns='http://www.w3.org/2000/svg'>
				<path fill-rule='evenodd' d='M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z'/>
				<path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/>
			</svg>
			<h1></h1>
			</div>
			<div class='error_notification' style='display:none;'>
			<svg class='error_icon' viewBox='0 0 16 16' class='bi bi-exclamation-octagon' xmlns='http://www.w3.org/2000/svg'>
				<path fill-rule='evenodd' d='M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z'/>
				<path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/>
			</svg>
			<h1></h1>
			</div>
		
		</div>
	</div>
	<script>
	function show_warning_notification(warning_text){
		var tmp = $('#notifications .warning_notification').first().clone(true);
		tmp.find('h1').html(warning_text);
		tmp.appendTo('#notifications .container');
		tmp.fadeIn();
		setTimeout(function(){
			tmp.fadeOut();
			setTimeout(function(){
				tmp.remove();
			},1000);
			
		},10000);
		
	};
	function show_info_notification(info_text){
		var tmp = $('#notifications .info_notification').first().clone(true);
		tmp.find('h1').html(info_text);
		tmp.appendTo('#notifications .container');
		tmp.fadeIn();
		setTimeout(function(){
			tmp.fadeOut();
			setTimeout(function(){
				tmp.remove();
			},1000);
			
		},10000);
	};
	function show_error_notification(error_text){
		var tmp = $('#notifications .error_notification').first().clone(true);
		tmp.find('h1').html(error_text);
		tmp.appendTo('#notifications .container');
		tmp.fadeIn();
		setTimeout(function(){
			tmp.fadeOut();
			setTimeout(function(){
				tmp.remove();
			},1000);
			
		},10000);
	};
	</script>


	<style>
	/* notification */
	#notifications .container{
		position:fixed;
		right:0px;
		bottom:4%;
		
		z-index:1;
		width:40%;

		border-radius:5px;
	}
	#notifications .warning_notification{
		width: 100%;
		background-color: yellow;
		border-radius: 5px;
		margin: 0px;
		margin-top: 20px;
		margin-bottom: 20px;
		min-height:140px;
		position:relative;
	}
	#notifications .warning_notification .warning_icon{
		position:absolute;
		top:40px;
		right:20px;
		height:50px;
		fill:darkblue;
	}
	#notifications .warning_notification h1{
			direction: rtl;
		color: darkblue;
		top: 25px;
		width: 70%;
		margin: 0px;
		padding: 0px;
		position: relative;
		padding-bottom: 40px;
	}
	#notifications .info_notification{
		width: 100%;
		background-color: blue;
		border-radius: 5px;
		margin: 0px;
		margin-top: 20px;
		margin-bottom: 20px;
		min-height:140px;
		position:relative;
	}
	#notifications .info_notification .info_icon{
		position:absolute;
		top:40px;
		right:20px;
		height:50px;
		fill:aqua;
	}
	#notifications .info_notification h1{
			direction: rtl;
		color: aqua;
		top: 25px;
		width: 70%;
		margin: 0px;
		padding: 0px;
		position: relative;
		padding-bottom: 40px;
	}
	#notifications .error_notification{
		width: 100%;
		background-color: red;
		border-radius: 5px;
		margin: 0px;
		margin-top: 20px;
		margin-bottom: 20px;
		min-height:140px;
		position:relative;
	}
	#notifications .error_notification .error_icon{
		position:absolute;
		top:40px;
		right:20px;
		height:50px;
		fill:darkblue;
	}
	#notifications .error_notification h1{
			direction: rtl;
		color: darkblue;
		top: 25px;
		width: 70%;
		margin: 0px;
		padding: 0px;
		position: relative;
		padding-bottom: 40px;
	}
	</style>
";
?>
