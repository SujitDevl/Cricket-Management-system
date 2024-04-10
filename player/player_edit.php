<?php include '../header/header.php';
include 'header.php'; ?>
<?php
$conn= mysqli_connect("localhost","root","","cms")or die("connection fail");
?>
<h2> <div class="well text-center"> Add Player's </div></h2>
<div class="panel panel-default">
    <div class="panel panel-heading">
    <!-- <h2>Update Record</h2> -->

    <?php
    
$ply_id=$_GET['id'];

$sql="SELECT * FROM player WHERE grno={$ply_id} ";
$result = mysqli_query($conn,$sql)or die("connection failed");
if(mysqli_num_rows($result)>0){
 while($row=mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="player_updatedata.php" method="post">
    <div class="form-group">
            <label>Name</label>
            <input type="hidden" name="grno" value="<?php echo $row['grno'] ?>"/>
            <input type="text" name="pname" value="<?php echo $row['firstname'] ?>" />
        </div>
        <div class="form-group">
          <label>Class</label>
          <select name="Gender">
              <option value="<?php echo $row['gender']?>" selected disabled><?php echo $row['gender']?></option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
          </select>
      </div>
        <div class="form-group">
            <label>Date of birth</label>
            <input type="date" name="dob" value="<?php echo $row['dob'] ?>" required/>
        </div>
        <div class="form-group">
            <label>Date of Join</label>
            <input type="date" name="doj" value="<?php echo $row['doj'] ?>" required />
        </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="tel" name="phone" value="<?php echo $row['contact'] ?>" required />
      </div>
      <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $row['address'] ?>" required/>
        </div>
        
        <div class="form-group">
          <label>gmail</label>
          <input type="email" name="gmail" value="<?php echo $row['email'] ?>" required />
      </div>
      <div class="form-group">
        <label>School name</label>
        <input type="text" name="School" value="<?php echo $row['school'] ?>" required/>
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
