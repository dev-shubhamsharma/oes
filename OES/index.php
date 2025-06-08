<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Homepage | OIPL</title>

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
		}

		header .nav 
		{
			display:flex;
			list-style: none;
/*			align-self: self-end;*/

		}

		header .nav_link
		{
			
		}

		header a {
			text-decoration: none;
			color: #fff;
			
			border-width: 1px;
			transition: 200ms;
			border-radius: 5px;
			padding: 10px 20px;
			margin-right: 5px;
			
		}

		header a:hover 
		{
			border-style: solid;
			border-color: #eee;
/*			font-weight: bold;*/
			color:#f1c40f;
			
		}

		header .logo 
		{
			height: 50px;
		}
	</style>
</head>
<body>

<header>
	
	<img src="images/logo.png" class="logo">

	<ul class="nav">
		<li class="nav_link"><a href="#">About</a></li>
		<li class="nav_link"><a href="#">Courses</a></li>
		<li class="nav_link"><a href="student_register.php">Register</a></li>
		<li class="nav_link"><a href="sign_in.php">Sign in</a></li>
		<li class="nav_link"><a href="#">Contact</a></li>
	</ul>

</header>


<footer>
		
</footer>

</body>
</html>