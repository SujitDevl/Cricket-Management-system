<?php
include '../header/header.php'; ?>
<?php
include 'header.php';

?>

<h2> <div class="well text-center">View Player's </div></h2>
<div class="panel panel-default">
    <div class="panel panel-heading">
    <?php

?>  
         

<div class="panel panel-body">
<form action="view_attendance.php" method="POST">
<table class="table table-striped">
<tr>
<!-- <th>Sr.No</th> -->
<th>Grno</th>
          <th>Name</th>
          <th>Gender</th>
          <th>Date_O_birth</th>
          <th>Date_O_join</th>
          <th>Address</th>
          <th>Phone</th>
          <th>Email</th>
          <th>School_name</th>
          <th>Action</th>
</tr>
<?php
$conn= mysqli_connect("localhost","root","","cms")or die("connection fail");
$sql="SELECT * FROM player";
$result = mysqli_query($conn,$sql)or die("connection failed");
$serialnumber=0; 
$counter=0;
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
$serialnumber++;
?>
<?php?>


<tr>      
<!-- <td><?php //echo $serialnumber ?></td> -->
<td><?php echo $row['grno'] ?></td>
                  <td><?php echo $row['firstname'] ?></td>
                  <td><?php echo $row['gender'] ?></td>
                  <td><?php echo $row['dob'] ?></td>
                  <td><?php echo $row['doj'] ?></td>
                  <td><?php echo $row['address'] ?></td>
                  <td><?php echo $row['contact'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td><?php echo $row['school'] ?></td>

                  <td>
                    <span class="action_btn">
                      <a href='player_edit.php?id=<?php echo $row['grno'] ?>'>Edit</a>
                      <a href='player_del.php?id=<?php echo $row['grno'] ?>'>Delete</a>
                    </span>
                  </td>
</tr>
<?php
$counter++;

}
}

?>
  
</table>




</form>





</div>
    </div>
</div>

