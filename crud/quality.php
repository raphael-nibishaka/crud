<?php
include 'connection.php';
if(isset($_POST['submit'])){
$name = $_POST['name'];
$items = $_POST['items'];
$quality=$_POST['quality'];
$email=$_POST['email'];
$amount=$_POST['amount'];
$date = $_POST['date'];
$amount_frw = $amount ." frw";
$total =$amount*$items ." frw";
$sql = "INSERT INTO quality(product_name,items,quality,mfg_date,amount_per_item,total_amount,email) VALUES('$name','$items','$quality','$date','$amount_frw','$total','$email')";
$result= $conn->query($sql);

$conn->close();
}
?>
<html>
    <a href="quality.html">back</a><br>
   <a href="read.php">read</a>
</html>