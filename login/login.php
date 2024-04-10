<?php include 'landing.php';
?>
<?php
if(isset($_POST['login'])){
    $conn = mysqli_connect("localhost","root","","cms")or die("connection lost");
    $ply_username=$_POST['username'];
    
    $ply_password=$_POST['password'];
    $fng=1;
   
     $sql="SELECT * FROM user WHERE username='$ply_username' AND password = '$ply_password'";
     $result = mysqli_query($conn,$sql)or die("connection failed");
    $num= mysqli_num_rows($result);
    if($num==1){
        session_start();
        $_SESSION['loggedin']=True;
        $_SESSION['username']=$ply_username;
       header("Location: http://localhost/cms/welcome/welcome.php");
   }
   else{
      ?>
      <script>
         alert("Incorrect Password");
      </script>
      <?php
   }
   
  }
   ?>

        <div class="center">
            <h1 >Login</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
              <div class="txt_field">
                <input type="text" id="username" name="username" required>
                <span></span>
                <label>Username</label>
              </div>
              <div class="txt_field">
                <input type="password" id="password" name="password" required>
                <span></span>
                <label>Password</label>
              </div>
              <!-- <div class="pass">Forgot Password?</div> -->
              <input type="submit" name="login" value="Login">
              <div class="signup_link">
                Not a member? <a href="#">Contact Admin</a>
              </div>
            </form>
          </div>
      