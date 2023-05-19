<?php
include('database.php');
$product_id=$_POST['pid'];
$crop_id=$_POST['rid'];
$quantity=$_POST['qty'];
$description=$_POST['pd'];
$production_date=$_POST['pda'];
$total_production=$_POST['tp'];
$sql="insert into production values(null,'$product_id','$crop_id','$quantity','$description','$production_date','$total_production')";
mysqli_query($conn,$sql);
?>
<script>
alert("inserted");
document.location="production_view.php";
</script>