<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign in | OIPL</title>

	<style type="text/css">

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		main 
		{
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			background: rgba(50, 50, 50, 0.6);
			background-size: cover;
			min-height: 100vh;
			max-width: 100vw;
		}

/*		background: url('https://images.pexels.com/photos/6963098/pexels-photo-6963098.jpeg');*/

		main h2 {
			color:#fff;
			font-family: 'segoe ui',sans-serif;
			font-size: 40px;
			margin-bottom: 25px;
		}

		form 
		{
			display: flex;
			flex-direction: column;
			background: rgba(0,0,0, 0.5);
			padding: 40px 30px;
			font-size: 20px;
			color:#fff;
			font-family: 'segeo ui',sans-serif;
			border-radius: 10px;
			min-width: 400px;
		}

		form label {
			font-size: 18px;
			margin-bottom: 6px;
		}

		.input_box 
		{
			font-size: 15px;
			padding: 5px 10px;
			margin-bottom: 25px;
			border-radius: 2px;
			border:none;
			background: #fff;
		}

		.btn 
		{
			background: #4b6cb7;
			border: none;
			font-size: 18px;
			padding: 15px;
			color: #fff;
			border-radius: 5px;
		}

		.background
		{

/*			max-width: 100vw;*/
			width: 100%;
			height: 100vh;
			position: absolute;
			top:70px;
			left: 0;
			z-index: -1;
			background: url('https://images.pexels.com/photos/6963098/pexels-photo-6963098.jpeg');
			background-position: center;
			background-size: cover;
		}

		
	</style>
</head>
<body>
	<?php

		include "header.php";
	 ?>

	<div class="background">
		<!-- <img src=""> -->
	</div>
	<main>
		<h2>Sign in</h2>
		<form>
			<label>Registration Number :</label>
			<input type="number" class="input_box" autofocus>
			<label>Password :</label>
			<input type="password" class="input_box">
			
			<input type="submit" class="btn" value="Sign in">
		</form>
	</main>


</body>
</html>