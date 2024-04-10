<?php
echo $ply_payid= $_POST['pid'];
echo $ply_kitfee = $_POST['kitfee'];
echo $ply_uniformfee = $_POST['uniformfee'];
echo $ply_academyfee = $_POST['academyfee'];
echo $ply_total = $_POST['total'];
echo $ply_paid = $_POST['paid'];
echo $ply_dop = $_POST['dop'];
echo $ply_des = $_POST['des'];
echo $ply_balance = $_POST['balance'];

$conn = mysqli_connect("localhost","root","","cms")or die("connection lost");
$sql = "UPDATE fee SET kitfee='{$ply_kitfee}',uniformfee='{$ply_uniformfee}',academyfee='{$ply_academyfee}',total='{$ply_total}',paid='{$ply_paid}',dop='{$ply_dop}',dps='{$ply_des}',balance='{$ply_balance}' WHERE payid={$ply_payid}";

$result= mysqli_query($conn,$sql) or die("connection loss");
header("Location: http://localhost/cms/fee/viewfee.php");
mysqli_close($conn);

?>