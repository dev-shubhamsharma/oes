<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Dashboard | OIPL</title>

	<style type="text/css">
		*
		{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		}

		header 
		{
			background: #4b6cb7;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #182848, #4b6cb7);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #182848, #4b6cb7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 10px 50px;
			color:#fff;
		}

		header .logo 
		{
			height: 50px;
		}

		header a {
			text-decoration: none;
			color: #fff;
			
			border-width: 1px;
			border-style: solid;
			border-color: #eee;
			transition: 200ms;
			border-radius: 5px;
			padding: 10px 20px;
			margin-right: 5px;
			
		}

		header a:hover 
		{
			
/*			font-weight: bold;*/
			color:#f1c40f;
			background:#324e8d ;
			
		}


		footer 
		{
			background: #444;
			padding: 40px 60px;
			text-align: center;
			color: #fff;
		}
	</style>
</head>
<body>

	<header>
		
		<img src="images/logo.png" class="logo">
		<h1>Student Dashboard</h1>
		<a href="sign_out.php">Sign out</a>
	</header>
	<footer>
		<p>Made wih <span style="color:red">&hearts;</span> by Shubham Sharma</p>
		<p>All rights reserved - 2025</p>

	</footer>
</body>
</html>