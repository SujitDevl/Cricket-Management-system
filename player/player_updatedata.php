<?php
echo $ply_grno= $_POST['grno'];
echo $ply_firstname = $_POST['pname'];
echo $ply_gender = $_POST['Gender'];
echo $ply_dob = $_POST['dob'];
echo $ply_doj = $_POST['doj'];
echo $ply_address = $_POST['saddress'];
echo $ply_contact= $_POST['phone'];
echo $ply_email = $_POST['gmail'];
echo $ply_school = $_POST['School'];

$conn = mysqli_connect("localhost","root","","cms")or die("connection lost");
$sql = "UPDATE player SET firstname='{$ply_firstname}',gender='{$ply_gender}',dob='{$ply_dob}',doj='{$ply_doj}',address='{$ply_address}',contact='{$ply_contact}',email='{$ply_email}',school='{$ply_school}' WHERE grno={$ply_grno}";

$result= mysqli_query($conn,$sql) or die("connection loss");
header("Location: http://localhost/cms/player/player_view.php");
mysqli_close($conn);

?>
