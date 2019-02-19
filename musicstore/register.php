

<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['name']) && isset($_POST['password'])){
        $username = $_POST['name'];
	$email = $_POST['email'];
        $password = $_POST['password'];


         /*$connection = mysqli_connect('localhost', 'root', 'root','music','3308');
        $query=mysqli_query($connection,"INSERT into  login (name, password, email) VALUES ('$username','$password', '$email') ");

$numrows= mysqli_num_rows($query); */
$query = "INSERT INTO `login` (name, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($connection, $query);
        if($result)

    /*    $result = mysqli_query($connection, $query); */
      /*  if($numrows!=0)*/{
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
    ?>



    <!
<html>
<head>
<!-- Latest compiled and minified CSS -->
<title> registration page
</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<link rel="stylesheet" href="style1.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body ,html
{
height:100%;
background-image: url("assets/images/mic.jpg");
}


header
{
	background-color: white;
	font-size:"50px";
}

ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: black;
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

<body>
	<header>
		<h1>
			<center>MUSIC STORE</center>
		</h1>
		</header>
	<ul>
  <li><a href="http://localhost:888/database/musicstore/home.php">Home</a></li>
	<li><a href="http://localhost:888/database/musicstore/product.php">Products</a></li>
	<li><a href="http://localhost:888/database/musicstore/order.php">Order now</a></li>


</ul>

<div class="container">
      <form class="form-signin" method="POST">

        <h2 class="form-signin-heading" style="color:white">Please Register</h2>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" name="name" class="form-control" placeholder="Username" required>
	</div>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <a class="btn btn-lg btn-primary btn-block" href="http://localhost:888/database/musicstore/index.php">Login</a>
        <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
     <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      </form>
</div>
</body>
</html>
