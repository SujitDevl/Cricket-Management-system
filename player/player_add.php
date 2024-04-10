<?php include '../header/header.php';
      include 'header.php';
?>

<h2> <div class="well text-center"> Add Player's </div></h2>
<div class="panel panel-default">
    <div class="panel panel-heading">
    <!-- <h2>Add New Record</h2> -->
    <form class="post-form" action="player_savedata.php" method="post">
        <div class="form-group">
            <label>Name : </label>
            <input type="text" name="sname" required/>
        </div>
        <div class="form-group">
            <label>Roll no   : </label>
            <input type="text" name="" required/>
        </div>
        <div class="form-group">
            <label>Gender : </label>
            <select name="Gender" style="width: 66%;
             padding: 5px;" >
                <option value="" required >Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">other</option>
            </select>
        </div>
        <div class="form-group">
            <label>Date of birth : </label>
            <input type="date" name="dob" required />
        </div>
        <div class="form-group">
          <label>Date of Join : </label>
          <input type="date" name="doj" required />
      </div>
      <div class="form-group">
          <label>Phone : </label>
          <input type="tel" pattern="^\d{10}$" name="phone" required />
      </div>
      <div class="form-group">
            <label>Address : </label>
            <input type="text" name="saddress" required />
        </div>
        
        <div class="form-group">
          <label>gmail : </label>
          <input type="email" name="gmail" required />
      </div>
      <div class="form-group">
          <label>School Name : </label>
          <input type="text" name="school" required />
      </div>
      <div class="mb-3">
          
          <button type="submit"  class="btn btn-primary">Save Player</button>
    
          <!-- <input class="submit" type="submit" value="Save"  /> -->
         </div>
      
    </form>
</div>
</div>
</div>

