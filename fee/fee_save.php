<?php
echo $ply_feeid= $_POST['grno'];
echo $ply_kitfee = $_POST['kitfee'];
echo $ply_uniformfee = $_POST['uniformfee'];
echo $ply_academyfee = $_POST['academyfee'];
echo $ply_total = $_POST['total'];
echo $ply_paid = $_POST['paid'];
echo $ply_dop = $_POST['dop'];
echo $ply_des = $_POST['des'];
echo $ply_balance = $_POST['balance'];


$conn= mysqli_connect("localhost","root","","cms")or die("connection fail");

$sql="INSERT fee(feeid,kitfee,uniformfee,academyfee,total,paid,dop,dps,balance)  value ('$ply_feeid','$ply_kitfee','$ply_uniformfee','$ply_academyfee','$ply_total','$ply_paid','$ply_dop','$ply_des','$ply_balance')";
$result = mysqli_query($conn,$sql)or die("connection failed");
header("Location: http://localhost/cms/fee/viewfee.php");
mysqli_close($conn);
?>