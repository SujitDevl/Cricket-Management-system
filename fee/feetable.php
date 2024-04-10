<?php include '../header/header.php';
include 'header.php';
?>
<link rel="stylesheet" href="../css/fee22.css"> 
<h2> <div class="well text-center">View Player's fee's</div></h2>
<div class="panel panel-default">
    <div class="panel panel-heading">
<form class="searchform" action="" method="post">
        <div class="form-group">
        
            <input id="shc" type="text" name="pid" placeholder="ENTER PLAYER ID" />
          </div>
          <div class="form-group">
          
      <input class="submit" id="shb" type="submit" name="showbtn" value="SEARCH" />
          </div>
    </form>
    <?php
    if(isset($_POST['showbtn'])){
        $conn = mysqli_connect("localhost","root","","cms")or die("connection lost");
        $ply_id=$_POST['pid'];
        $sql2="SELECT * FROM player WHERE grno in ( SELECT feeid FROM fee WHERE payid={$ply_id})";
        $result4= mysqli_query($conn,$sql2);
        if(mysqli_num_rows($result4)>0){
            while($row=mysqli_fetch_assoc($result4)){
  ?>
<div class="panel panel-body">
<table class="table table-striped">
          <tr>
          <th>Id<np/th>
          <th>Name</th>
          <th>PaymentID</th>
          <th>Kitfee</th>
          <th>Uniformfee</th>
          <th>Academyfee</th>
          <th>Date_O_Pay</th>
          <th>Paid</th>
          <th>Balance</th>
          <th>Total</th>
          <th>Action</th>
            </tr>
      <!-- details -->
      
              <tr>
                  <td><?php echo $row['grno'] ?></td>
                  <td> <?php echo $row['firstname'] ?></td>
                  <td>

  <?php
            }
        }
    }
  ?>
  <?php
  if(isset($_POST['showbtn'])){
        $conn = mysqli_connect("localhost","root","","cms")or die("connection lost");
        $ply_id=$_POST['pid'];
        $sql2="SELECT * FROM player WHERE grno in ( SELECT feeid FROM fee WHERE payid={$ply_id})";
      
        $sql = "SELECT * FROM fee where payid={$ply_id}";
        $result= mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
  ?>
                 <?php echo $row['payid'] ?></td>
                  <td><?php echo $row['kitfee'] ?></td>
                  <td><?php echo $row['uniformfee'] ?></td>
                  <td><?php echo $row['academyfee'] ?></td>
                  <td><?php echo $row['dop'] ?></td>
                  <td><?php echo $row['paid'] ?></td>
                  <td><?php echo $row['balance'] ?></td>
                  <td><?php echo $row['total'] ?></td>
                  <td>
                    <span class="action_btn">
                      <a href='fee_edite.php?id=<?php echo $row['payid'] ?>'>Edit</a>
                      <a href='fee_delete.php?id=<?php echo $row['payid'] ?>'>Delete</a>
                    </span>
                  </td>
              </tr>
         
          
    
              
         
      </table>
                </div>
  </div>
</div>
<?php
                }
            }
        }
?>