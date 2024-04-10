<?php include '../header/header.php';
include 'header.php';
?>
<h2> <div class="well text-center">Add Tour </div></h2>
<div class="panel panel-default">
    <div class="panel panel-heading">
    <!-- <h2>Add New Record</h2> -->
    <form class="post-form" action="tour_savedata.php" method="post">
        <div class="form-group">
            <label>Tour_Name</label>
            <input type="text" name="tname" value="" required/>
        </div>
        <div class="form-group">
            <label>Date of Tour</label>
            <input type="date" name="dot" value="" required />
        </div>
        <div class="form-group">
            <label>Tour place</label>
            <input type="text" name="tplace" value="" required />
        </div>
      <div class="form-group">
            <label>Address</label>
            <input type="text" name="taddress" value="" required />
        </div>
      <div class="form-group">
          <label>Description</label>
          <input type="text" name="tdsp" value="" required />
      </div>
      <div class="form-group">
          <label>Tour fee</label>
          <input type="text" name="tfee" value=""  required />
      </div>
      <div class="mb-3">
          
      <button type="submit"  class="btn btn-primary">Save Tour</button>

      <!-- <input class="submit" type="submit" class="btn btn-primary"    value="Save"  /> -->
     </div>
        
    </form>
</div>
</div>
</div>
</body>
</html>
