<?php include '../header/header.php';
 include 'header.php';
?>
<h2> <div class="well text-center"> Update Player's </div></h2>
<div class="panel panel-default">
    <div class="panel panel-heading">
      
      <form class="searchform" action="" method="post">
        <div class="form-group">
        
            <input id="shc" type="text" name="sid" placeholder="ENTER PLAYER ID" />
          </div>
          <div class="form-group">
      <input class="submit" id="shb" type="submit" name="showbtn" value="SEARCH" />
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
            <input type="date" name="dob" value="<?php echo $row['dob'] ?>" />
        </div>
        <div class="form-group">
            <label>Date of Join</label>
            <input type="date" name="doj" value="<?php echo $row['doj'] ?>" />
        </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="number" name="phone" value="<?php echo $row['contact'] ?>" />
      </div>
      <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $row['address'] ?>" />
        </div>
        
        <div class="form-group">
          <label>gmail</label>
          <input type="gmail" name="gmail" value="<?php echo $row['email'] ?>" />
      </div>
      <div class="form-group">
        <label>School name</label>
        <input type="text" name="School" value="<?php echo $row['school'] ?>" />
    </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
      <?php
                }
            }
        }
      ?>
  </div>
  </div>
      </div>
      </div>

</body>
</html>
