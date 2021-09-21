<?php
        include "db.php";
        $con=mysqli_connect('localhost','root');
        mysqli_select_db($con,'aditi');
        if(isset($_POST['submit'])){
            $id=$_POST['id'];
            $name=$_POST['name'];
            $code=$_POST['code'];
            $price=$_POST['price'];
            $files=$_FILES['file'];
            print_r($id);
            echo "<br>";
           // print_r($image);
           // $filename=$image['name'];
            // $fileeror=$image['error'];
           // $filetmp=$file['tmp_name'];
               } 
        ?>