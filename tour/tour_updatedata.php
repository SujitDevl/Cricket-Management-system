<?php
$tour_id=$_POST['tourid'];
echo $tour_name=$_POST['tname'];
echo $tour_dot=$_POST['dot'];
echo $tour_tplace=$_POST['tplace'];
echo $tour_taddress=$_POST['taddress'];
echo $tour_tdsp=$_POST['tdsp'];
echo $tour_tfee=$_POST['tfee'];
$conn = mysqli_connect("localhost","root","","cms")or die("connection lost");

$sql = "UPDATE tour SET tname='{$tour_name}',dot='{$tour_dot}',tplace='{$tour_tplace}',taddress='{$tour_taddress}',tdsp='{$tour_tdsp}',tfee='{$tour_tfee}' WHERE tourid={$tour_id}";

$result= mysqli_query($conn,$sql) or die("connection loss");
header("Location: http://localhost/cms/tour/tour_view.php");
mysqli_close($conn);

?>