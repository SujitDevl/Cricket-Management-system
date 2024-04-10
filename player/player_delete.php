<?php include '../header/header.php';
include 'header.php';
 ?>
<?php
if(isset($_POST['deletebtn'])){
    include 'config.php';
    $ply_id=$_POST['pid'];
    $sql = "DELETE FROM player WHERE grno = {$ply_id}";
    $result= mysqli_query($conn,$sql);
    // header("Location: http://localhost/cms/welcome/welcome.php");
    ?>
    <script>
          alert("Player deleted");
    </script>
    <?php
    mysqli_close($conn);
}

?>

<h2> <div class="well text-center"> Delete Player's </div></h2>
<div class="panel panel-default">
    <div class="panel panel-heading">
    <!-- <h2>Delete Record</h2> -->
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Grno</label>
            <input type="text" name="pid" placeholder="Enter Gr-Number TO Delete" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</div>
</div>
</body>
</html>
