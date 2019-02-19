
<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
} else {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Music store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
	.mySlides {display:none;}
		h1 { font-size: 60px;}
		header
		{
			background-color:#DB7093;
			font-size:"50px";
		}

		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #333;
		}

		li {
			float: left;
		}

		li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		li a:hover {
			background-color: #111;
		}


             </style>
</head>
<body bgcolor="#F0F8FF">
	<div class="container">
	<header>
		<h1>
			<center>MUSIC STORE</center>
		</h1>
		</header>

		<ul>
		  <li><a class="active" href="home.php">Home</a></li>
		  <li><a href="product.php">Products</a></li>
		  <li><a href="">Order now</a></li>
      <li><a href="http://localhost:888/database/musicstore/index.php">Sign Out</a></li>

		</ul>
        </div><br><br>

<h2>Welcome, <?=$_SESSION['sess_user'];?>! </h2>

</body>
</html>
<?php
}
?>
