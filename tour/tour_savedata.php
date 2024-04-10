<?php
echo $tour_name=$_POST['tname'];
echo $tour_dot=$_POST['dot'];
echo $tour_tplace=$_POST['tplace'];
echo $tour_taddress=$_POST['taddress'];
echo $tour_tdsp=$_POST['tdsp'];
echo $tour_tfee=$_POST['tfee'];

$conn= mysqli_connect("localhost","root","","cms")or die("connection fail");

$sql="INSERT tour(tname,dot,tplace,taddress,tdsp,tfee)  value ('$tour_name','$tour_dot','$tour_tplace','$tour_taddress','$tour_tdsp','$tour_tfee')";
$result = mysqli_query($conn,$sql)or die("connection failed");
header("Location: http://localhost/cms/tour/tour_view.php");
mysqli_close($conn);
?>