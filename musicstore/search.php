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
		  <li><a class="active" href="#home">Home</a></li>
		  <li><a href="http://localhost/musicstore/product.php">Products</a></li>
		  <li><a href="http://localhost/musicstore/order.php">Order now</a></li>
      <li><a href="http://localhost/musicstore/index.php">Sign Out</a></li>

		</ul>
        </div><br><br>
</body>
 </html>
<?php

echo"<center>";
 echo"<form method='POST' action='' name='reg' onSubmit='return validate()'>";
echo"<table border='5' bgcolor='Lavender'> <h2><b>SEARCH</b></h2><br><a href='order.php'>HOME</a>&nbsp&nbsp&nbsp&nbsp<a href='update.php'>UPDATE</a>&nbsp&nbsp&nbsp&nbsp<a href='delete.php'>DELETE</a>&nbsp&nbsp&nbsp&nbsp<a href='search.php'>SEARCH</a><br><br></center>";

echo"<tr><td>
<center><table bgcolor='Lavender'>
<tr><td width='250'><b>Select Any One:<select name='sel'><option>Select Categary</option>";

  echo"<option value='cid'>CUSTOMER ID</option>";
  echo"<option value='fn'>FIRSTNAME</option>";
  echo"<option value='city'>CITY</option>";
  echo"<option value='pin'>PINCODE</option>

<td><input type='text' name='ty'><input type='submit' name='se' value='search'>/<input type='submit' name='se1' value='AllSearch'>";
echo"</tr></td></table>";
echo"</td></tr></table></center></form>
</body></html>";

 require'db_conn.php';

 $sel=filter_input(INPUT_POST,'sel');
   $ty=filter_input(INPUT_POST,'ty');

if(isset($_POST['se']))
 {

  if($sel=="cid")
  {$connect = mysqli_connect('localhost', 'root', 'root', 'music','3308');
$q1=mysqli_query($connect,"select* from customer where CUSTOMER_ID='$ty'");
echo"<center><table border='1'>";
  echo"<tr bgcolor='violet'><td><center>CUSTOMER_ID</center><td><center>FIRSTNAME</center><td><center>LASTNAME</center><td><center>EMAIL</center><td><center>PHONE</center><td><center>ADDRESS</center><td><center>STREET</center><td><center>CITY</center><td><center>PINCODE</center><td><center>DATE</center></td></tr>";

  while($rows=mysqli_fetch_array($q1))
{
    $cid=$rows['CUSTOMER_ID'];
 $fn=$rows['FIRSTNAME'];
 $ln=$rows['LASTNAME'];
  $email=$rows['EMAIL'];
 $phone=$rows['PHONE'];
 $address=$rows['ADDRESS'];
 $street=$rows['STREET'];
  $city=$rows['CITY'];
   $pin=$rows['PINCODE'];
   $dob=$rows['DATE'];

 echo"<tr bgcolor='Lavender'><td><center>$cid</center><td><center>$fn</center><td><center>$ln</center><td><center>$email</center><td><center>$phone</center><td><center>$address</center><td><center>$street</center><td><center>$city</center><td><center>$pin</center><td><center>$dob</center></td></tr>";

}
 echo"</center>";
}
 if($sel=="fn")
  { $connect = mysqli_connect('localhost', 'root', 'root', 'music','3308');
$q2=mysqli_query($connect,"select* from customer where FIRSTNAME='$ty'");
echo"<center><table border='1'>";
  echo"<tr bgcolor='violet'><td><center>CUSTOMER_ID</center><td><center>FIRSTNAME</center><td><center>LASTNAME</center><td><center>EMAIL</center><td><center>PHONE</center><td><center>ADDRESS</center><td><center>STREET</center><td><center>CITY</center><td><center>PINCODE</center><td><center>DATE</center></td></tr>";

  while($rows=mysqli_fetch_array($q2))
{
    $cid=$rows['CUSTOMER_ID'];
 $fn=$rows['FIRSTNAME'];
 $ln=$rows['LASTNAME'];
  $email=$rows['EMAIL'];
 $phone=$rows['PHONE'];
 $address=$rows['ADDRESS'];
 $street=$rows['STREET'];
  $city=$rows['CITY'];
   $pin=$rows['PINCODE'];
   $dob=$rows['DATE'];

 echo"<tr bgcolor='Lavender'><td><center>$cid</center><td><center>$fn</center><td><center>$ln</center><td><center>$email</center><td><center>$phone</center><td><center>$address</center><td><center>$street</center><td><center>$city</center><td><center>$pin</center><td><center>$dob</center></td></tr>";

}
 echo"</center>";
}
if($sel=="city")
  {$connect = mysqli_connect('localhost', 'root', 'root', 'music','3308');
$q3=mysqli_query($connect,"select* from customer where CITY='$ty'");
echo"<center><table border='1'>";
 echo"<tr bgcolor='violet'><td><center>CUSTOMER_ID</center><td><center>FIRSTNAME</center><td><center>LASTNAME</center><td><center>EMAIL</center><td><center>PHONE</center><td><center>ADDRESS</center><td><center>STREET</center><td><center>CITY</center><td><center>PINCODE</center><td><center>DATE</center></td></tr>";

  while($rows=mysqli_fetch_array($q3))
{
    $cid=$rows['CUSTOMER_ID'];
 $fn=$rows['FIRSTNAME'];
 $ln=$rows['LASTNAME'];
  $email=$rows['EMAIL'];
 $phone=$rows['PHONE'];
 $address=$rows['ADDRESS'];
 $street=$rows['STREET'];
  $city=$rows['CITY'];
   $pin=$rows['PINCODE'];
   $dob=$rows['DATE'];

 echo"<tr bgcolor='Lavender'><td><center>$cid</center><td><center>$fn</center><td><center>$ln</center><td><center>$email</center><td><center>$phone</center><td><center>$address</center><td><center>$street</center><td><center>$city</center><td><center>$pin</center><td><center>$dob</center></td></tr>";

}
 echo"</center>";
}
if($sel=="pin")
  {$connect = mysqli_connect('localhost', 'root', 'root', 'music','3308');
$q4=mysqli_query($connect,"select* from customer where PINCODE='$ty'");
echo"<center><table border='1'>";
 echo"<tr bgcolor='violet'><td><center>CUSTOMER_ID</center><td><center>FIRSTNAME</center><td><center>LASTNAME</center><td><center>EMAIL</center><td><center>PHONE</center><td><center>ADDRESS</center><td><center>STREET</center><td><center>CITY</center><td><center>PINCODE</center><td><center>DATE</center></td></tr>";

  while($rows=mysqli_fetch_array($q4))
{
    $cid=$rows['CUSTOMER_ID'];
 $fn=$rows['FIRSTNAME'];
 $ln=$rows['LASTNAME'];
  $email=$rows['EMAIL'];
 $phone=$rows['PHONE'];
 $address=$rows['ADDRESS'];
 $street=$rows['STREET'];
  $city=$rows['CITY'];
   $pin=$rows['PINCODE'];
   $dob=$rows['DATE'];

 echo"<tr bgcolor='Lavender'><td><center>$cid</center><td><center>$fn</center><td><center>$ln</center><td><center>$email</center><td><center>$phone</center><td><center>$address</center><td><center>$street</center><td><center>$city</center><td><center>$pin</center><td><center>$dob</center></td></tr>";

}
 echo"</center>";
}

}
if(isset($_POST['se1']))
 {
$q8=mysql_query("select* from customer");
echo"<center><table border='1'>";
  echo"<tr bgcolor='violet'><td><center>CUSTOMER_ID</center><td><center>FIRSTNAME</center><td><center>LASTNAME</center><td><center>EMAIL</center><td><center>PHONE</center><td><center>ADDRESS</center><td><center>STREET</center><td><center>CITY</center><td><center>PINCODE</center><td><center>DATE</center></td></tr>";

  while($rows=mysqli_fetch_array($q8))
{
    $cid=$rows['CUSTOMER_ID'];
 $fn=$rows['FIRSTNAME'];
 $ln=$rows['LASTNAME'];
  $email=$rows['EMAIL'];
 $phone=$rows['PHONE'];
 $address=$rows['ADDRESS'];
 $street=$rows['STREET'];
  $city=$rows['CITY'];
   $pin=$rows['PINCODE'];
   $dob=$rows['DATE'];

 echo"<tr bgcolor='Lavender'><td><center>$cid</center><td><center>$fn</center><td><center>$ln</center><td><center>$email</center><td><center>$phone</center><td><center>$address</center><td><center>$street</center><td><center>$city</center><td><center>$pin</center><td><center>$dob</center></td></tr>";

}
 echo"</center>";
}


?>
