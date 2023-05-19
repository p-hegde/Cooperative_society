<?php
include('database.php');
$p_id=$_POST['p_id'];
$product_id=$_POST['pid'];
$crop_id=$_POST['rid'];
$quantity=$_POST['qty'];
$description=$_POST['pd'];
$production_date=$_POST['pda'];
$total_production=$_POST['tp'];
$sql="update production set product_id='$product_id',crop_id='$crop_id',quantity='$quantity',description='$description',production_date='$production_date',total_production='$total_production' where production_id='$p_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("Updated");
document.location="production_view.php";
</script>
