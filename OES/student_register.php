<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Registration | OIPL</title>

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
		<h2>Student Registration</h2>
		<form>
			<label>Student Name :</label>
			<input type="text" class="input_box" autofocus>
			<label>Email Id :</label>
			<input type="email" class="input_box">
			<label>Enrolled Course :</label>
			<select class="input_box">
				<option>Select</option>
				<option>Olevel</option>
				<option>CCC</option>
				<option>Tally</option>
			</select>
			<label>Batch Timing : </label>
			<select class="input_box">
				<option>Select</option>
				<option>8:00 AM - 10:00 AM</option>
				<option>9:00 AM - 11:00 AM</option>
				<option>10:00 AM - 12:00 PM</option>
				<option>11:00 AM - 01:00 PM</option>
				<option>12:00 PM - 02:00 PM</option>
				<option>01:00 PM - 03:00 PM</option>
				<option>02:00 AM - 04:00 PM</option>
				<option>03:00 PM - 05:00 PM</option>
			</select>
			<input type="submit" class="btn" value="Register">
		</form>
	</main>
</body>
</html>