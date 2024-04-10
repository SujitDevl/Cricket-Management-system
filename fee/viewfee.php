<?php
include '../header/header.php';
include 'header.php';
?>

<h2> <div class="well text-center">View Player's fee's</div></h2>
<div class="panel panel-default">
    <div class="panel panel-heading">
<?php
$conn= mysqli_connect("localhost","root","","cms")or die("connection fail");
$sql="SELECT * FROM player JOIN  fee WHERE player.grno=fee.feeid";
$result = mysqli_query($conn,$sql)or die("connection failed");
if(mysqli_num_rows($result)>0){
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
          
            <?php while($row=mysqli_fetch_assoc($result)){ ?>
              <tr>
                  <td><?php echo $row['grno'] ?></td>
                  <td> <?php echo $row['firstname'] ?></td>
                  <td><?php echo $row['payid'] ?></td>
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
