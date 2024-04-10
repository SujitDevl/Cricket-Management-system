<?php include '../header/header.php';
include 'header.php'; ?>
<?php
$conn= mysqli_connect("localhost","root","","cms")or die("connection fail");
?>
<h2> <div class="well text-center"> Edit Tour</div></h2>
<div class="panel panel-default">
    <div class="panel panel-heading">
    <!-- <h2>Update Record</h2> -->

    <?php
    
$ply_id=$_GET['id'];

$sql="SELECT * FROM tour WHERE tourid={$ply_id} ";
$result = mysqli_query($conn,$sql)or die("connection failed");
if(mysqli_num_rows($result)>0){
 while($row=mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="tour_updatedata.php" method="post">
    <div class="form-group">
            <label>Name</label>
            <input type="hidden" name="tourid" value="<?php echo $row['tourid'] ?>"/>
            <input type="text" name="tname" value="<?php echo $row['tname'] ?>" />
        </div>
        <div class="form-group">
            <label>Date of Tour</label>
            <input type="date" name="dot" value="<?php echo $row['dot'] ?>" required />
        </div>
        <div class="form-group">
            <label>Tour place</label>
            <input type="text" name="tplace" value="<?php echo $row['tplace'] ?>" required />
        </div>
      <div class="form-group">
            <label>Address</label>
            <input type="text" name="taddress" value="<?php echo $row['taddress'] ?>" required />
        </div>
      <div class="form-group">
          <label>Description</label>
          <input type="text" name="tdsp" value="<?php echo $row['tdsp'] ?>" required />
      </div>
      <div class="form-group">
          <label>Tour fee</label>
          <input type="text" name="tfee" value="<?php echo $row['tfee'] ?>"  required />
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
  }
}
      ?>
</div>
</div>
</div>
</div>
</body>
</html>