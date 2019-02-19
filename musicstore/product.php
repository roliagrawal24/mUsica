<?php
 session_start();
 $connect = mysqli_connect('localhost', 'root', 'root', 'misc','3308');
/* $pdo = new PDO('mysql:host=localhost;port=3308;dbname=misc',
     'root', 'root'); */

 if(isset($_POST["add_to_cart"]))
 {
      if(isset($_SESSION["shopping_cart"]))
      {
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
           if(!in_array($_GET["id"], $item_array_id))
           {
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                     'item_id'               =>     $_GET["id"],
                     'item_name'               =>     $_POST["hidden_name"],
                     'item_price'          =>     $_POST["hidden_price"],
                     'item_quantity'          =>     $_POST["quantity"]
                );
                $_SESSION["shopping_cart"][$count] = $item_array;
           }
           else
           {
                echo '<script>alert("Item Already Added")</script>';
                echo '<script>window.location="product.php"</script>';
           }
      }
      else
      {
           $item_array = array(
                'item_id'               =>     $_GET["id"],
                'item_name'               =>     $_POST["hidden_name"],
                'item_price'          =>     $_POST["hidden_price"],
                'item_quantity'          =>     $_POST["quantity"]
           );
           $_SESSION["shopping_cart"][0] = $item_array;
      }
 }
 if(isset($_GET["action"]))
 {
      if($_GET["action"] == "delete")
      {
           foreach($_SESSION["shopping_cart"] as $keys => $values)
           {
                if($values["item_id"] == $_GET["id"])
                {
                     unset($_SESSION["shopping_cart"][$keys]);
                     echo '<script>alert("Item Removed")</script>';
                     echo '<script>window.location="product.php"</script>';
                }
           }
      }
 }
 ?>
 <!DOCTYPE html>
 <html>
      <head>
           <title>Music Store</title>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
      <body bgcolor="#F0F8FF">
	<div class="container">
	<header>
		<h1>
			<center>MUSIC STORE</center>
		</h1>
		</header>

		<ul>
		  <li><a class="active" href="http://localhost:888/database/musicstore/home.php">Home</a></li>
		  <li><a href="http://localhost:888/database/musicstore/product.php">Products</a></li>
		  <li><a href="http://localhost:888/database/musicstore/order.php">Order now</a></li>
  <!--    <li><a href="http://localhost:888/database/musicstore/home.php">Sign Out</a></li> -->

		</ul>
        </div><br><br>
           <br />
           <div class="container" style="width:700px;">

                <?php
                $query = "SELECT * FROM products ORDER BY product_id  ASC";
                $connect = mysqli_connect('localhost', 'root', 'root', 'music','3308');
                $result = mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)
                {
                     while($row = mysqli_fetch_array($result))
                     {
                ?>
                <div class="col-md-4">
                     <form method="post" action="product.php?action=add&id=<?php echo $row["product_id"]; ?>">
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                               <h4 class="text-info"><?php echo $row["item_name"]; ?></h4>
                               <h4 class="text-danger">Rs. <?php echo $row["item_price"]; ?></h4>
                               <input type="text" name="quantity" class="form-control" value="1" />
                               <input type="hidden" name="hidden_name" value="<?php echo $row["item_name"]; ?>" />
                               <input type="hidden" name="hidden_price" value="<?php echo $row["item_price"]; ?>" />
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                          </div>
                     </form>
                </div>
                <?php
                     }
                }
                ?>
                <div style="clear:both"></div>
                <br />
                <h3 style="color:white">Order Details</h3>
                <div class="table-responsive">
                     <table class="table table-bordered">
                          <tr>
                               <th width="40%"  style="color:white">AlbumName</th>
                               <th width="10%" style="color:white">Quantity</th>
                               <th width="20%" style="color:white">Price</th>
                               <th width="15%" style="color:white">Total</th>
                               <th width="5%" style="color:white">Action</th>
                          </tr>
                          <?php


                          if(!empty($_SESSION["shopping_cart"]))
                          {
                               $total = 0;
                               foreach($_SESSION["shopping_cart"] as $keys => $values)
                               {
                          ?>
                          <tr>
                               <td style="color:white" ><?php echo $values["item_name"]; ?></td>
                               <td style="color:white"><?php echo $values["item_quantity"]; ?></td>
                               <td style="color:white">Rs <?php echo $values["item_price"]; ?></td>
                               <td style="color:white">Rs. <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                               <td style="color:white"><a href="product.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                          </tr>
                          <?php
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);
                               }
                          ?>
                          <tr>
                               <td colspan="3" align="right" style="color:white">Total</td>
                               <td align="right" style="color:white">Rs. <?php echo number_format($total, 2); ?></td>
                               <td></td>
                          </tr>
                          <?php
                          }
                          ?>
                     </table>
                </div>
           </div>
           <br />
      </body>
 </html>
