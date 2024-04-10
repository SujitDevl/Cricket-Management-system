<?php
include '../header/header.php'; ?>
<?php
include("db.php");
include("header.php");
?>

<div class="panel panel-default">
    <div class="panel panel-heading">
        <!-- <h2>
            <a href="index.php" class="btn btn-warning pull-right"> Back</a>
        </h2> -->



<div class="panel panel-body">
<form action="view_attendance.php" method="POST">
<table class="table table-striped">
<tr>
<th>Sr.No</th>
<th>Dates</th>
<th>Records</th>
</tr>
<?php

$result=mysqli_query($con,"select distinct date  from attendance");
$serialnumber=0;

while($row=mysqli_fetch_array($result))
{
$serialnumber++;
?>
<tr>
<td> <?php  echo $serialnumber; ?> </td>
<td> <?php  echo $row['date']; ?> </td>
<?php

}
?>
<?php

$result1=mysqli_query($con,"select distinct Did  from attendance");
while($row=mysqli_fetch_array($result1))
{
?>
<td>
<form action="view_attendance.php" method="POST">


<input type="hidden" value="<?php echo $row['Did'] ?>" name="date">

<input type="submit" value="Show Attendance"class="btn btn-danger">

</form>    

</td>
<?php

}
?>
</tr>

  
</table>


