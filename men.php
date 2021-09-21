<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>men</title>
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <div class="mohit" display="flex" style="display: flex;background-color: lightpink;justify-content: space-between;list-style-type: none;">
    <ul style="display: flex;list-style-type: none;color: aliceblue;">
    <div><li style="padding-right: 800px;list-style-type: none;"><h3><a href="index.html"style="color: aliceblue;">Ace By Aditi         </a></h3></li>
    </div>
    <li style="padding: 0px 20px list-style-type: none;"><a href="admin.php" style="color: aliceblue;">Admin             </a></li>
    <li style="padding: 0px 20px;list-style-type: none;"><a href="customer_login.php"style="color: aliceblue;">Login          </a></li>
    <li style="padding: 0px 20px;list-style-type: none;"><a href="customer_reg.php"style="color: aliceblue;">Registration          </a></li>
    <li style="padding: 0px 20px;list-style-type: none;"><a href="contact.php"style="color: aliceblue;">Contact         </a></li>  </ul>
    <li style="padding: 0px 20px;list-style-type: none;"><a href="aboutus.html"style="color: aliceblue;">About us         </a></li>  </ul>


</div>
</head>

<body class="sub_page">
  <div class="hero_area">
    <div class="logo_box">
      <a class="navbar-brand" href="index.html">
       
      </a>
    </div>
    <div class="menu_box">
      <div class="navbar-collapse" id="">
        
      
        </div>
      </div>
    </div>
  </div>


  <!-- men section -->

  <section class="men_section layout_padding-bottom layout_padding2-top">
    <div class="container">
      <div class="box">
        <div class="row">
          <div class="col-md-7">
            <div class="detail-box">
              <div class="heading_container"style="background-color: azure;">
                <h2>
                  Fashion <br>
                  for men
                </h2>
              </div>
              <p>
                Express yourself. It's hard to be nice if you don't feel comfortable. Shop Your Style.
              </p>
              <div class="btn-box">
               
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="img-box">
              <img src="images/men1.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 

  <!-- end men section -->


  


 <?php
include "config.php";
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php"><img src="images/cart-icon.png"> Cart<span>
<?php echo $cart_count;} ?></span></a>
</div>



<?php
session_start();
include('config.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query(
$c,
"SELECT * FROM `image` WHERE `code`='$code'"
);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['file_name'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'file_name'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>

<?php
include "config.php";
$result = mysqli_query($c,"SELECT * FROM `image`where id<10");
while($row = mysqli_fetch_assoc($result)){
    echo "   <div class='product_wrapper'style=display:flex;>
    <form method='post' action=''>
    <input type='hidden' name='code' value=".$row['code']." />
    <div class='file_name'><img src='images/".$row['file_name']."'width=200px height=200px </div>
    <div class='name'>".$row['name']."</div>
    <div class='price'>$".$row['price']."</div>
    <button type='submit' class='buy'>Buy Now</button>
    </form>
    </div>";
        }
mysqli_close($c);
?>
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php"><img src="images/cart-icon.png" /> Cart<span>
<?php echo $cart_count;} ?></span></a>
</div>

