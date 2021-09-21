<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
include("config.php");
$i="aditi";
$u=$_POST['username'];
$p=$_POST['password'];
$query="SELECT username, password FROM customer where username ='$u' and password='$p' ";
$result=mysqli_query($c,$query);
$num=  mysqli_num_rows($result);
echo '<script>alert("sucessfully saved")</script>';
if($num>0)
{        
$_SESSION['login_user'] = $u;
if ($u==$i) 
{
header("location:welcome.php");
}
else{
	echo '<script>alert("failed to login")</script>';

}
}
}
?>
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

  <title>Admin login</title>
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
      <a class="navbar-brand" href="index.html">
        
      </a>
      </a>
    </div>

    <div class="menu_box">
      <div class="navbar-collapse" id="">
      
        </div>
      </div>
    </div>
  </div>

<div id="middle">
<form name="login" method="post" action="">
<center>
<h1>USERNAME: <input type="text" name="username" requierd ><br>
    PASSWORD : <input type="password" name="password" required=""><br><br>
<input type="submit" value="LOGIN"></H1>
<center>
</form>

<div id="lower"><marquee><B></I><FONT COLOR="LIGHT GREY">WELCOME TO THE CUSTOMER LOGIN PAGE</FONT></I></B></marquee></div>

</body>

</html>