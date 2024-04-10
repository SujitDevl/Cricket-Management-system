<?php
include 'config.php';
$tour_id=$_GET['id'];
$sql = "DELETE FROM tour WHERE tourid = {$tour_id}";
$result= mysqli_query($conn,$sql);
header("Location: http://localhost/cms/tour/tour_view.php");
mysqli_close($conn);

?>