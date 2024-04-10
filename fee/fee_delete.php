<?php
include 'config.php';
$ply_id=$_GET['id'];
$sql = "DELETE FROM fee WHERE payid = {$ply_id}";
$result= mysqli_query($conn,$sql);
header("Location: http://localhost/cms/fee/viewfee.php");
mysqli_close($conn);

?>