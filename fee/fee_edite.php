<?php include '../header/header.php'; ?>
<?php
include 'header.php';
$conn= mysqli_connect("localhost","root","","cms")or die("connection fail");
?>
<link rel="stylesheet" href="../css/fee22.css">
<!-- <link rel="stylesheet" href="feecss.css"> -->
<h2> <div class="well text-center">View Player's fee's</div></h2>
<div class="main-content" style="height: 500px;">

<form class="post-form" action="feeupdate.php" method="post">

  <div class="item" id="details">
  <?php


$ply_id=$_GET['id'];

$sql="SELECT * FROM fee WHERE payid={$ply_id} ";
$result = mysqli_query($conn,$sql)or die("connection failed");
if(mysqli_num_rows($result)>0){
 while($row=mysqli_fetch_assoc($result)){
?>


  </div>

  <div class="item" id="payment">
    <!-- table1 -->
    <div class="pay">
      <div class="form-group">
        <label>Kitfee</label>
        <input type="hidden" name="pid" value="<?php echo $row['payid']?>"/>
        <input type="text" id="kitfee" name="kitfee"value="<?php echo $row['kitfee'] ?>" />
      </div>
      <div class="form-group">
        <label>Uniformfee</label>
        <input type="text" id="Uniformfee" name="uniformfee" value="<?php echo $row['uniformfee'] ?>" />
      </div>
      <div class="form-group">
        <label>Academyfee</label>
        <input type="text" id="Academyfee" name="academyfee" value="<?php echo $row['academyfee'] ?>" />
      </div>
      <label id="btn" class="btn41-43 btn-41">Calcutate</label>
      <hr>
      <div class="form-group">
        <label>Total-fee</label>
        <input type="text" id="total" name="total" value="<?php echo $row['total'] ?>" />
      </div>

    </div>
    <!-- table2 -->
    <div class="pay">
      <div class="form-group">
        <label>Payable</label>
        <input type="text" id="paid" name="paid" value="<?php echo $row['paid'] ?>" />
      </div>
      <div class="form-group">
        <label>Date of pay</label>
        <input type="date" name="dop" value="<?php echo $row['dop'] ?>" />
      </div>
      <div class="form-group">
        <label>Description</label>
        <input type="text" name="des" value="<?php echo $row['dps'] ?>" />
      </div>
      <label id="btn2" class="btn41-43 btn-41">Calcutate</label><hr>
      <div class="form-group">
        <label>Balance</label>
        <input type="text" id="pending" name="balance" value="<?php echo $row['balance'] ?>" />
      </div>

    </div>
    <input class="submit" type="submit" value="Update" />
  </div>
  </form>
  <?php
  }
}
      ?>
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