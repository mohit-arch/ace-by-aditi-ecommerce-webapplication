
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

  <title>Database Of Products</title>
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

  <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Datatables of products</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3 align="center">Database Of Products</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered table-hover">  
                     <tbody>  
                     <thead>  
                               <tr>  
                                    <td>id</td>
                                    <td>Name</td>  
                                    <td>code</td>  
                                    <td>price</td>  
                                    <td>image</td>
                                    <td>uploaded_on</td>
                                    <td>status</td>    
                               </tr>  
                          </thead>  
                          <?php  
include "config.php";
                       $query="SELECT `id`, `name`, `code`, `price`, `file_name`, `uploaded_on`, `status` FROM `image` WHERE 1" ;
                          $row=mysqli_query($c,$query);
                          
     while($result= mysqli_fetch_assoc($row)) 
        {        echo'
          <tr>
                <td>'.$result["id"].'</td> 
                <td>'.$result["name"].'</td>  
                <td>'.$result["code"].' </td>  
                <td> '.$result["price"] .'</td>  
                <td><img src="images/'.$result["file_name"].'"height=100px width=100px></td>  
                <td>'.$result["uploaded_on"].'</td>   
                <td>'.$result["status"].'</td> '; 
  
        }

mysqli_close($c);
?>                                          <td colspan="5" align="right">

<input type="button" value="next" onclick="location='upload3.php'" >
</td>           
                          </tbody>
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  