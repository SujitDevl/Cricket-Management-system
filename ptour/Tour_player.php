<?php include '../header/header.php';
include 'header.php';
?>
<h2> <div class="well text-center">View Tour </div></h2>
<div class="panel panel-default">
    <div class="panel panel-heading">
      
      <form class="searchform" action="" method="post">
        <div class="form-group">
        
            <input id="shc" type="text" name="tid" placeholder="ENTER Tour ID" required />
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
          <th>Tour_fee</th>
      
          <th>Action</th>
          </tr>
          
              <tr>
              
                  <td><?php echo $row['tourid'] ?></td>
                  <td><?php echo $row['tname'] ?></td>
                  <td><?php echo $row['tfee'] ?></td>

                  <td>
                    <span class="action_btn">
                    <form class="" action="Tour_playeradd.php" method="post">
                    <input type="hidden" name="tourid" value="<?php echo $row['tourid'] ?>"/>
                    <button type="submit" class="btn btn-primary" >
                      Add player
                </button>
                </form>
                      <a href='tour_edit.php?id=<?php echo $row['tourid'] ?>'>View player</a>
                    </span>
                  </td>
              </tr>
    

      </table>
    <?php
                }
            }
        }
    ?>