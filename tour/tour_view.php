<?php
include '../header/header.php';
include 'header.php';
?>
<h2> <div class="well text-center">View Tour </div></h2>
<div class="panel panel-default">
    <div class="panel panel-heading">
<?php
$conn= mysqli_connect("localhost","root","","cms")or die("connection fail");
$sql="SELECT * FROM tour";
$result = mysqli_query($conn,$sql)or die("connection failed");
if(mysqli_num_rows($result)>0){
?>
<div class="panel panel-body">
<table class="table table-striped">
          <tr>
          <th>Tour_ID</th>
          <th>Tour_Name</th>
          <th>Date_O_Tour</th>
          <th>Tour_Place</th>
          <th>Tour_Address</th>
          <th>Tour_Description</th>
          <th>Tour_fee</th>
      
          <th>Action</th>
          </tr>
          
          <?php while($row=mysqli_fetch_assoc($result)){ ?>
              <tr>
              
                  <td><?php echo $row['tourid'] ?></td>
                  <td><?php echo $row['tname'] ?></td>
                  <td><?php echo $row['dot'] ?></td>
                  <td><?php echo $row['tplace'] ?></td>
                  <td><?php echo $row['taddress'] ?></td>
                  <td><?php echo $row['tdsp'] ?></td>
                  <td><?php echo $row['tfee'] ?></td>

                  <td>
                    <span class="action_btn">
                      <!-- <a href='Tour_player.php?id=<?php //echo $row['tourid'] ?>'>player's</a> -->
                      <a href='tour_edit.php?id=<?php echo $row['tourid'] ?>'>Edite</a>
                      <a href='tour_delete.php?id=<?php echo $row['tourid'] ?>'>Delete</a>
                    </span>
                  </td>
              </tr>
              <?php } ?>
          
      </table>
      <?php }
      else{
        echo "<h1> No Record Present<?h1>";
        mysqli_close($conn);
      }
      ?>
</div>
    </div>
</div>