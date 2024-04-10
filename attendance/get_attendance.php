<?php
include '../header/header.php'; ?>
<?php
include("db.php");
include("header.php");
$flag=0;

if(isset($_POST['submit']))
{
    foreach($_POST['attendance_status'] as $id=>$attendance_status)
    {
        $roll=$_POST['roll'][$id];
        $date=date("Y-m-d H:i:s");
        $date2=date("md-Y H:i:s");

       $result= mysqli_query($con,"insert into attendance(roll,attendance_status,date,Did) values('$roll','$attendance_status','$date','$date2')");
       if($result)
       {
           $flag=1;
       }
    }
}


?>


<div class="panel panel-default">
    <div class="panel panel-heading">
        <!-- <h2>
            <a href="index.php" class="btn btn-warning pull-right"> Back</a>

        </h2> -->
         <?php  if($flag) { ?>
        <div class="alert alert-success">
            Attendance Date Inserted Successfully!!
            </div>
            
            <?php } ?>
<h4>
    <div class="well text-center">Date: <?php echo date("Y-m-d") ;?> </div>
</h4>





<div class="panel panel-body">
<form action="get_attendance.php" method="POST">
<table class="table table-striped">
<tr>
<th>Sr.No</th>
<th>Roll no</th>
<th>Attendance Status</th>
</tr>
<?php


$result=mysqli_query($con,"select * from player");
$serialnumber=0;
$counter=0;

while($row=mysqli_fetch_array($result))
{
$serialnumber++;
?>
<tr>
<td> <?php  echo $serialnumber; ?> </td>
<td> <?php  echo $row['grno']; ?> </td>
<input type="hidden" value="<?php echo $row['grno'];?>" name="roll[]">
<td>
    <input type="radio" name="attendance_status[<?php echo $counter; ?>]" value="Present"> Present
    <input type="radio" name="attendance_status[<?php echo $counter; ?>]" value="Absent"> Absent
</td>
</tr>
<?php
$counter++;
}
?>
  
</table>

<input type="submit" name="submit" value="submit" class="btn btn-danger">



</form>





</div>
    </div>
</div>
