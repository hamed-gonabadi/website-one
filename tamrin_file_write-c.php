﻿<html>
<head>
	<link rel="icon" href="post-3.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
submit form
</title>

</head>
<style>
	body{
		padding-top: auto;
		background-image:url(qwer.jpg);
		background-size: 300px;
		
		
	}
	#navi{
		color: #0f0f0f;
		border-radius: 15px;
		font: bold 20px arial;
		padding:25px 0px ;
		text-align: center;
		width: 100%;
		background-color: #1cb688;
		opacity: 85%;
	}
	#main-form{
		background: linear-gradient(#dcfffd ,#ffffff );
		width: fit-content;
		margin-top:50px;
		margin-bottom: 20px;
		margin-left: 500px;
		text-align: center;
		outline: none;
		padding: 50px;
		border-left: solid 10px #22e7dd;
		border-top: solid 15px #22e7dd ;
		border-radius: 50px;
	}
	#main-form:hover{
		
		animation-name: all-form;
		animation-duration: 5s;
		
	}

	@keyframes all-form {
		40%{color: #04a153;}
		/* 10%{border-color: #16c783;}
		100%{border-color: #79ffc1;} */

	}
	.cadr{
	margin: 20px auto;
	font-family: Arial, Helvetica, sans-serif;
	border-radius: 10px;
	border-style: none;
	outline: none;
	width: 200px;
	height: 30px;
	background-color: #d6d6d6;
	}
	.cadr:focus{
		background-color: turquoise;
		transition: all 0.3s;
	}

	.cadr:hover{
		background-color: aqua;
		transition: all 0.5s;
	}
	.label1{
		font-family:Arial, Helvetica, sans-serif;
		font-weight: bold;
	}
	.botom{
	width: 100px;
	height: 30px;
	font-family:Arial, Helvetica, sans-serif ;
	border-radius: 10px;
	font-weight: bold;
	border-style: none;
	margin-right: 10px;
	background-color: #20ad83;

	}
	.botom:hover{
		background-color: #0d694e;
		transition: all 0.3s;
		cursor: pointer;
		transform: scale(1.2);
		animation-name: botomm;
		animation-duration: 4s;	
	}
	@keyframes botomm {
		0% {background-color: #e4142f;}
		100% {background-color: #ff2946;}

}

#out{
	margin-bottom: 30px;
	font-style: normal;
	border-radius: 8px;
	border-top-left-radius: 2px;
	border-bottom-left-radius: 2px;
	border-left:8px solid rgb(13, 88, 66);
	font-family:cursive;
	font-weight: 400;
	font-size: 18px;
	padding:18px;
	margin-left: 332px;
	width: 50%;
	text-align: start;
	background-color: #156d5a7a;
	

}




</style>



<body>

<nav id="navi">
		make in <a href="https://www.instagram.com/p/CHcITlkHlGe/" >Hamed Gonabadi</a> 
		&nbsp<!-- حق کپی رایت   -->&copy;2020
	</nav>
	
<div id="main-form">
<form action="" method="POST">
<!-- <?php echo $_SERVER["PHP_SELF"];?> -->

<label class="label1">
Name1: <input type="text" class="cadr" name="esm1" placeholder="     enter your name:">

</label>
<br>
<label class="label1">
Name2: <input type="text" class="cadr" name="esm2" placeholder="     enter your name:">

</label>
<br>
<label class="label1">
Name3: <input type="text" class="cadr" name="esm3" placeholder="     enter your name:">

</label>
<br>
<input type="submit" class="botom" name="send" value="Send">

<input type="reset" class="botom" class="cadr" value="Reset">

</form></h1>
</div>


<div id="out">
	<?php
	
	$esm1=$esm2=$esm3=" ";
	
	if(!empty($_POST["esm1"]) && !empty($_POST["esm2"]) && !empty($_POST["esm3"]))
	{
	$esm1=$_POST["esm1"] ."<br>";
	
	$esm2=$_POST["esm2"] ."<br>";
	
	$esm3=$_POST["esm3"] ."<br>";
	
	mkdir("esm");
	
	$assami=fopen("esm/namha.txt","w") or die("نمیتوانیم فایل را باز کنیم !!");
	
	fwrite($assami,$esm1);
	fwrite($assami,$esm2);
	fwrite($assami,$esm3);
	
	fclose($assami);
	
	$assami=fopen("esm/namha.txt","r") or die("نمیتوانیم فایل را باز کنیم !!");
	
	while(!feof($assami))
	{
		echo fgets($assami);
	}
	
	fclose($assami);
	// یا می توان از کد های زیر نیز استفاده کرد
	// echo readfile("namha.txt");
	// echo fread($assami,filesize("namha.txt"));
	}
	?>
	</div>

</body>
</html>