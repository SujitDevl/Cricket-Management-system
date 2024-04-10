<?php
include 'config.php';
$ply_id=$_GET['id'];
$sql = "DELETE FROM player WHERE grno = {$ply_id}";
$result= mysqli_query($conn,$sql);
header("Location: http://localhost/cms/player/player_view.php");
mysqli_close($conn);

?>