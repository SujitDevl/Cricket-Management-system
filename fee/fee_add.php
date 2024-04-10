<?php include '../header/header.php';
include 'header.php';
?>

<link rel="stylesheet" href="../css/fee22.css">   
<div class="item" id="search">
<h2> <div class="well text-center">Add Player's fee's</div></h2>
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
    $sql = "SELECT * FROM player where grno={$ply_id}";
    $result= mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
?>
</div>
</div>
            </div>
 
<div class="main-content">

  <div class="item" id="details">
    <form class="post-form" action="fee_save.php" method="post">
      <div class="form-group">
        <label>ID-Rollnum</label>
        <input type="text" name="grno" value="<?php echo $row['grno'] ?>"  />
      </div>
      <div class="form-group">
        <label>Player Name</label>
        <input type="text" name="firstname" value="<?php echo $row['firstname'] ?>" />
      </div>
      <div class="form-group">
        <label for="">Date of joining</label>
        <input type="text" name="doj" value="<?php echo $row['doj'] ?>" />
      </div>
      <!-- details -->

  </div>
  <div class="item" id="payment">
    <!-- table1 -->
    <div class="pay">
      <div class="form-group">
        <label>Kitfee</label>
        <input type="text" id="kitfee" name="kitfee" value="" />
      </div>
      <div class="form-group">
        <label>Uniformfee</label>
        <input type="text" id="Uniformfee" name="uniformfee" value="" />
      </div>
      <div class="form-group">
        <label>Academyfee</label>
        <input type="text" id="Academyfee" name="academyfee" value="" />
      </div>
      <label id="btn" class="btn41-43 btn-41">Calcutate</label>
      <hr>
      <div class="form-group">
        <label>Total-fee</label>
        <input type="text" id="total" name="total" value="" required />
      </div>

    </div>
    <!-- table2 -->
    <div class="pay">
      <div class="form-group">
        <label>Payable</label>
        <input type="text" id="paid" name="paid" value="" />
      </div>
      <div class="form-group">
        <label>Date of pay</label>
        <input type="date" name="dop" value="" required/>
      </div>
      <div class="form-group">
        <label>Description</label>
        <input type="text" name="des" value="" />
      </div>
      <label id="btn2" class="btn41-43 btn-41">Calcutate</label>
      <hr>
      <div class="form-group">
        <label>Balance</label>
        <input type="text" id="pending" name="balance" value="" required />
      </div>

    </div>
    <input class="submit" type="submit" value="Submit" />
    </form>
    <?php
                }
            }
        }
    ?>
  </div>
</div>


<script>
  let btn = document.getElementById('btn');
  btn.addEventListener('click', function () {
    var y = document.getElementById("kitfee").value;
    var z = document.getElementById("Uniformfee").value;
    var x = document.getElementById("Academyfee").value;
    var b = document.getElementById("paid").value;
    var a = document.getElementById("total").value=parseFloat(y)+parseFloat(z)+parseFloat(x);
    
  })
  let btn2 = document.getElementById('btn2');
  btn2.addEventListener('click',function(){
    var d = document.getElementById("total").value;
    var f = document.getElementById("paid").value;
    document.getElementById("pending").value=parseFloat(d) - parseFloat(f);
  })
</script>