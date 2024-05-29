<?php
$conn = mysqli_connect("localhost","root","","cms")or die("connection lost");
?>
<td><input type="hidden" value="<?php echo $row['Did'] ?>" name="date"></td>
