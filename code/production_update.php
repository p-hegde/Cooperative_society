<?php
include('database.php');
$p_id=$_POST['p_id'];
$product_id=$_POST['pid'];
$raw_material_id=$_POST['rid'];
$quantity=$_POST['qty'];
$description=$_POST['pd'];
$production_date=$_POST['pda'];
$total_production=$_POST['tp'];
echo $sql="update production set product_id='$product_id',raw_material_id='$raw_material_id',quantity='$quantity',description='$description',production_date='$production_date',total_production='$total_production' where production_id='$p_id'";
mysql_query($sql);
?>
<script>
alert("Updated..");
document.location="production_view.php";
</script>
