      <html>
<head>
    <title>Music store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script language="javascript">
     function validate()
{
  var cid=document.reg.cid.value;
  var fname=document.reg.fn.value;
  var lname=document.reg.ln.value;
    var email=document.reg.email.value;
   var phone=document.reg.phone.value;
var address=document.reg.address.value;
var street=document.reg.street.value;
  var city=document.reg.city.value;
  var pin=document.reg.pin.value;
   var mm=document.reg.mm.value;
  var dd=document.reg.dd.value;
  var yy=document.reg.yy.value;

if(cid=='')
  {
    window.alert("Please Enter fname!");
    document.reg.cid.focus();
    return false;

 }
if(fname=='')
  {
    window.alert("Please Enter fname!");
    document.reg.fn.focus();
    return false;

 }

 if(lname=='')
  {
    window.alert("Please Enter lname!");
    document.reg.ln.focus();
    return false;

 }

 if(dd=='')
  {
    window.alert("Please Select Day!");
    document.reg.dd.focus();
    return false;

 }
 if(mm=='')
  {
    window.alert("Please Select Month!");
    document.reg.mm.focus();
    return false;

 }
 if(yy=='')
  {
    window.alert("Please Select Year!");
    document.reg.yy.focus();
    return false;

 }
 if(address=='')
  {
    window.alert("Please Select Address!");
    document.reg.address.focus();
    return false;

 }
 if(street=='')
  {
    window.alert("Please Select Street!");
    document.reg.street.focus();
    return false;

 }
 if(city=='')
  {
    window.alert("Please Select Address!");
    document.reg.city.focus();
    return false;

 }
 if(pin=='')
  {
    window.alert("Please Select Address!");
    document.reg.pin.focus();
    return false;

 }
 if(phone=='')
 {
    window.alert("Please Select Address!");
    document.reg.phone.focus();
    return false;

 }
 if(email=='')
 {
    window.alert("Please Select Address!");
    document.reg.email.focus();
    return false;

 }

}
</script>
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

<body backgroung="C:\Users\Healer\Desktop\music.jpg">
	<div class="container">
	<header>
		<h1>
			<center>MUSIC STORE</center>
		</h1>
		</header>

		<ul>
		  <li><a class="active" href="#home">Home</a></li>
		  <li><a href="http://localhost:888/database/musicstore/product.php">Products</a></li>
		  <li><a href="http://localhost:888/database/musicstore/order.php">Order now</a></li>
      <li><a href="http://localhost:888/database/musicstore/index.php">Sign Out</a></li>

		</ul>
        </div><br><br>


<center>
<form method="POST" action="" name="reg" onSubmit="return validate()">
<center><table border="5" bgcolor="Lavender"> <h2 ><b>UPDATE</b></h2><br><a href="order.php">HOME</a>&nbsp&nbsp&nbsp&nbsp<a href="update.php">UPDATE</a>&nbsp&nbsp&nbsp&nbsp<a href="delete.php">DELETE</a>&nbsp&nbsp&nbsp&nbsp<a href="search.php">SEARCH</a><br><br></center>
        <tr>
		<td>CUSTOMER ID:</td>
		<td><input type="text" name="cid" /></td>
	</tr>
	<tr>
		<td>FIRST NAME:</td>
		<td><input type="text" name="fn" /></td>
	</tr>
	<tr>
		<td>LAST NAME:</td>
		<td><input type="text" name="ln" /></td>
	</tr>
        <tr>
		<td>PHONE:</td>
		<td><input type="text" name="phone" /></td>
	</tr>
        <tr>
		<td>EMAIL:</td>
		<td><input type="text" name="email" /></td>
	</tr>





<tr>
<td>Date(DD-MM-YYYY)</td>
<td><select name="dd">
<option> select day </option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17"> 17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>


</select>
<select name="mm">
<option> select mounth </option>
<option value="jan">JAN</option>
<option value="feb">FEB</option>
<option value="mar">MAR</option>
<option value="apr">APR</option>
<option value="may">MAY</option>
<option value="jun">JUN</option>
<option value="jul">JUL</option>
<option value="aug">AUG</option>
<option value="sep">SEP</option>
<option value="oct">OCT</option>
<option value="nov">NOV</option>
<option value="dec">DEC</option>
</select>
<select name="yy">
<option>select year</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
</select>
</td>
</tr>


        <tr>
		<td>ADDRESS(DOOR NO.):</td>
		<td><input type="text" name="address" /></td>
	</tr>

        <tr>
		<td>STREET:</td>
		<td><input type="" name="street" /></td>
	</tr>

                    <tr>
<td>CITY:</td>
<td><select name="city">
<option> select city </option>
                <option value="BANGALORE">BANGALORE</option>
                <option value="NEWDELHI">NEW DELHI</option>
                <option value="GULBARGA">GULBARGA</option>
                <option value="MUMBAI">MUMBAI</option>
                <option value="KOLKATA">KOLKATA</option>
                <option value="CHENNAI">CHENNAI</option>
                <option value="MANGALORE">MANGALORE</option>
                <option value="MYSORE">MYSORE</option>
                <option value="LUCKNOW">LUCKNOW</option>
                <option value="INDORE">INDORE</option>

</select>

</td>
</tr>

        <tr>
		<td>PINCODE:</td>
		<td><input type="text" name="pin" /></td>
	</tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="ADD" /></td>
	</tr>
 </table>
</form>
</body>
</html>
<?php
require'db_conn.php';
$cid=filter_input(INPUT_POST,'cid');
$fn=filter_input(INPUT_POST,'fn');
$ln=filter_input(INPUT_POST,'ln');
$phone=filter_input(INPUT_POST,'phone');
$email=filter_input(INPUT_POST,'email');
$dd=filter_input(INPUT_POST,'dd');
$mm=filter_input(INPUT_POST,'mm');
$yy=filter_input(INPUT_POST,'yy');
$address=filter_input(INPUT_POST,'address');
$street=filter_input(INPUT_POST,'street');
$city=filter_input(INPUT_POST,'city');
$pin=filter_input(INPUT_POST,'pin');
$cap1=strtoupper($fn);
$cap2=strtoupper($ln);



if(isset($_POST['submit']))
 {
 $connect = mysqli_connect('localhost', 'root', 'root', 'music','3308');
 $q1=mysqli_query($connect,"UPDATE customer SET CUSTOMER_ID='$cid',FIRSTNAME='$cap1',LASTNAME='$cap2',EMAIL='$email',PHONE='$phone',ADDRESS='$address',STREET='$street',CITY='$city',PINCODE='$pin',DATE='$dd $mm $yy' where CUSTOMER_ID =$cid");
if($q1)
{
 echo"Record Successfully Updated";
}
else
{

echo"Not Updating Your Record" ;
}
 }
?><?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
