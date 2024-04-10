<?php include '../header/header.php';
include 'header.php';
?>
<h2> <div class="well text-center">Search Tour </div></h2>
<div class="panel panel-default">
    <div class="panel panel-heading">
      
      <form class="searchform" action="" method="post">
        <div class="form-group">
        
            <input id="shc" type="text" name="tid" placeholder="ENTER Tour ID" />
          </div>
          <div class="form-group">
      <input class="submit" id="shb" type="submit" name="showbtn" value="SEARCH" />
          </div>
    </form>
  <?php
  if(isset($_POST['showbtn'])){


    $conn = mysqli_connect("localhost","root","","cms")or die("connection lost");
    $tour_id=$_POST['tid'];
    $sql = "SELECT * FROM tour WHERE tourid={$tour_id}";
    $result= mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
  
  ?>
 <div class="panel panel-body">
<table class="table table-striped">
          <tr>
          <th>Tour ID</th>
          <th>Tour Name</th>
          <th>Date_O_Tour</th>
          <th>Tour_Place</th>
          <th>Tour_Address</th>
          <th>Tour_Description</th>
          <th>Tour_fee</th>
      
          <th>Action</th>
          </tr>
          
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
                      <!-- <a href='Tour_player.php?id=<?php echo $row['tourid'] ?>'>player's</a> -->
                      <a href='tour_edit.php?id=<?php echo $row['tourid'] ?>'>Edite</a>
                      <a href='tour_delete.php?id=<?php echo $row['tourid'] ?>'>Delete</a>
                    </span>
                  </td>
              </tr>
    

      </table>
    <?php
                }
            }
        }
    ?>