<?php include '../header/header.php'; ?>
<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=TRUE){
    header("Location: http://localhost/login/sing.php");
    exit;
}
?>

<link rel="stylesheet" href="css/sty.css">
<main>
<section>
			<h3></h3>
			<h1>Welcome <?php echo $_SESSION['username']?> </h1>
			<p>“No matter how hot the fire burns, a protea always survives.” – AB Devilliers</p>
			<a href="../contact/index.php" class="btn41-43 btn-41" >Contact Us</a>
			<a href="../signup/sign.php" class="btntwo">signup here</a>
		</section>
</main>
</body>
</html>
