
<?php include '../header/header.php';
?>
 <link rel="stylesheet" href="css/sign.css">
<div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="signout.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" id="pname" name="pname" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" id="gmail" name="gmail" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" id="phone" name="phone" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" id="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" id="cpassword" name="cpassword" placeholder="Confirm your password" required>
          </div>
        </div>
     
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>
