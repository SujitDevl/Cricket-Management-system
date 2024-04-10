<?php
echo $ply_name=$_POST['sname'];
echo $ply_gender=$_POST['Gender'];
echo $ply_dob=$_POST['dob'];
echo $ply_doj=$_POST['doj'];
echo $ply_phone=$_POST['phone'];
echo $ply_address=$_POST['saddress'];
echo $ply_gmail=$_POST['gmail'];
echo $ply_school=$_POST['school'];

$conn= mysqli_connect("localhost","root","","cms")or die("connection fail");

$sql="INSERT player(firstname,gender,dob,doj,contact,address,email,school)  value ('$ply_name','$ply_gender','$ply_dob','$ply_doj','$ply_phone','$ply_address','$ply_gmail','$ply_school')";
$result = mysqli_query($conn,$sql)or die("connection failed");
header("Location: http://localhost/cms/player/player_view.php");
mysqli_close($conn);
?>