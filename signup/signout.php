<?php
$conn = mysqli_connect("localhost","root","","cms")or die("connection lost");
 $ply_uname=$_POST['pname'];
 $ply_username=$_POST['username'];
 $ply_gmail=$_POST['gmail'];
 $ply_phone=$_POST['phone'];
 $ply_password=$_POST['password'];
 $ply_cpassword=$_POST['cpassword'];
 $exists = false;
 $conn = mysqli_connect("localhost","root","","cms")or die("connection lost");
if(($ply_password==$ply_cpassword) && $exists==false ){
  $sql="INSERT user(uname,username,gmail,phone,password)  VALUE ('$ply_uname','$ply_username','$ply_gmail','$ply_phone','$ply_password')";
  $result = mysqli_query($conn,$sql)or die("connection failed");
  header("Location: http://localhost/cricket/login/login.php");
}
else{
    
    header("Location: http://localhost/cms/signup/sign.php");
}


?>