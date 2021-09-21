<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
require_once("config.php");
$u=$_POST['name'];
$p=$_POST['phone'];
$x=$_POST['email'];
$y=$_POST['message'];
$query="INSERT INTO `tell`(`name`, `phone`, `email`, `message`) VALUES ('$u','$p','$x','$y')";
$result=mysqli_query($c,$query);
if($result)
{        
$_SESSION['login_user'] = $u;
if ($result)
	{
		
    header("location:customer_login.php");
}else
{
  echo '<script>alert("data not saved")</script>';
}

}
else {echo '<script>alert("data not saved ")</script>';

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

  <title>contact us</title>
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

  <!-- contact section -->

  <section class="contact_section layout_padding-bottom layout_padding2-top">
    <div class="container">
      <div class="box layout_padding2">
        <div class="row">
          <div class="col-lg-6 col-md-8 mx-auto">
            <div class="contact-form">
              <div class="heading_container"style="background-color: azure;">
                <h2>
                  Request a call back
                </h2>
              </div>
              <orm name="" method="POST" action="">
                <div>
                  <input type="text" placeholder="Full Name " />
                </div>
                <div>
                  <input type="text" placeholder="Phone Number" />
                </div>
                <div>
                  <input type="email" placeholder="Email Address" />
                </div>
                <div>
                  <input type="text" placeholder="Message" class="input_message" />
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn_on-hover">
                    Send
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->



  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2021 All Rights Reserved by
      <a href="#">Ace by Aditi</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="./js/custom.js"></script>
</body>

</html>