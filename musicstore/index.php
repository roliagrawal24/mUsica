<!DOCTYPE html>
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
    body ,html
    {
    height:100%;
    background-image: url("assets/images/mic.jpg");
    }

		header
		{

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
		<h1 style="color:white">
			<center>MUSIC STORE</center>
		</h1>
		</header>

		<ul>
		  <li><a class="active" href="http://localhost:888/database/musicstore/home.php">Home</a></li>

     <li><a href="http://localhost:888/database/musicstore/product.php">Products</a></li>
     <li><a href="http://localhost:888/database/musicstore/order.php">Order now</a></li>
      <li><a href="http://localhost:888/database/musicstore/artist.php">Artist </a></li>


		</ul>
        </div><br><br>
<form action="" method="POST">
 <p style="color:white">Username: <input type="text" name="user">  </p> <br />
 <p style="color:white">
Password: <input type="password" name="pass">
</p>
<br />
<input type="submit" value="Login" name="submit" />
</form>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
    $user=$_POST['user'];
    $pass=$_POST['pass'];

    $con=mysqli_connect('localhost','root','root','music','3308') or die(mysql_error());
    mysqli_select_db($con,'music') or die("cannot select DB");

    $query=mysqli_query($con,"SELECT * FROM login WHERE name='".$user."' AND password='".$pass."'");
    $numrows= mysqli_num_rows($query);
    if($numrows!=0)
    {
    while($row=mysqli_fetch_assoc($query))
    {
    $dbusername=$row['name'];
    $dbpassword=$row['password'];
    }

    if($user == $dbusername && $pass == $dbpassword)
    {
    session_start();
    $_SESSION['sess_user']=$user;

    /* Redirect browser */
    header("Location: members.php");
    }
    } else {
    echo "Invalid username or password!";
    }

} else {
    echo "All fields are required!";
}
}
?>
</body>
</html>
