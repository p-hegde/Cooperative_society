<?php
include('database.php');
$product_id=$_POST['pid'];
$raw_material_id=$_POST['rid'];
$quantity=$_POST['qty'];
$description=$_POST['pd'];
$production_date=$_POST['pda'];
$total_production=$_POST['tp'];
$sql="insert into production values(null,'$Product Id','$Raw Material Id','$Quantity','$Description','$Production Date','$Total Production')";
mysql_query($sql);
?>
<script>
alert("inserted..");
document.location="production_form.php";
</script>