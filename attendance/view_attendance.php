<?php
include '../header/header.php'; ?>
<?php
include("db.php");
include("header.php");

?>


<div class="panel panel-default">
    <div class="panel panel-heading">
       
         

<div class="panel panel-body">
<form action="view_attendance.php" method="POST">
<table class="table table-striped">
<tr>
<th>Sr.No</th>

<th>Roll no</th>
<th>Attendance Status</th>
</tr>
<?php
 $pdate=$_POST['date'];

 $sql = "SELECT * FROM attendance where Did={$pdate}";
$result=mysqli_query($con,$sql);
$serialnumber=0; 
$counter=0;

while($row=mysqli_fetch_array($result)) 
{
$serialnumber++;
?>
<?php?>


<tr>      
<td><?php echo $serialnumber ?></td>
<td><?php echo $row['roll'] ?></td>
<td><?php echo $row['attendance_status'] ?></td>
</tr>
<?php
$counter++;
}

?>
  
</table>




</form>





</div>
    </div>
</div>

