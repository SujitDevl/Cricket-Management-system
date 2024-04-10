<?php include '../header/header.php';
include 'header.php';
?>
 <?php
       
       ?>
<?php
if(isset($_POST['showbt']))
{
    // $tour_id=$_POST['tour'];
    $ply_id=$_POST['grno'];
    $ply_name=$_POST['pname'];
   $ply_phone=$_POST['phone'];

$conn= mysqli_connect("localhost","root","","cms")or die("connection fail");

$sql="INSERT tourplayer(tourid,roll,pname,contact)  value ('$ptour_id,'$ply_id','$ply_name','$ply_phone')";
$result = mysqli_query($conn,$sql)or die("connection failed");
mysqli_close($conn);
}
?>
<h2> <div class="well text-center">Add Player In Tour </div></h2>
<div class="panel panel-default">
    <div class="panel panel-heading">

    <form class="searchform" action="" method="post">
        <div class="form-group">
        
        <input id="shc" type="text" name="sid" placeholder="ENTER Tour ID" required />
          </div>
          <div class="form-group">
          
          <input class="submit" id="shb" type="submit" name="showbtn" value="Submit" />
          </div>
    </form>
  <?php
  if(isset($_POST['showbtn'])){

    $conn = mysqli_connect("localhost","root","","cms")or die("connection lost");
    $ply_id=$_POST['sid'];
    $sql = "SELECT * FROM player where grno={$ply_id}";
    $result= mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
  
  ?>
 <div class="panel panel-body">
 <form class="post-form" action="Tour_playeradd.php" method="post">
<table class="table table-striped">
          <tr>
          <th>Roll NO</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Email</th>
      
          </tr>
         
              <tr>
              
                  <td><?php echo $row['grno'] ?></td>
                  <td><?php echo $row['firstname'] ?></td>
                  <td><?php echo $row['contact'] ?></td>
                  <td><?php echo $row['email'] ?></td>
               

                
              </tr>
      </table>
       <!-- add date into variables  -->
      

       <div class="form-group">
       <!-- <input type="hidden" name="tour" value="<?php //$ptour_id ?>"/> -->
          <input type="hidden" name="grno" value="<?php echo $row['grno'] ?>"/>
         <input type="hidden" name="pname" value="<?php echo $row['firstname'] ?>"/>
        <input type="hidden" name="phone" value="<?php echo $row['contact'] ?>" />
        </div>
      <div class="mb-3">
          <button type="submit" name="showbt"  class="btn btn-primary">Add Player</button>
         </div>
      
                
    <?php
                }
            }
        }
        echo $ptour_id= $_POST['tourid'];
        $sql = "SELECT * FROM tour WHERE tourid={$ptour_id}";
        $result1= mysqli_query($conn,$sql);
                if(mysqli_num_rows($result1)>0){
                    while($row=mysqli_fetch_assoc($result1)){
                        ?>
                  <input type="hidden" name="tourid" value="<?php echo $row['tourid'] ?>"/>

                        <?php
                    }
                }
    ?>
    </form>