<?php
include('database.php');
$s_id=$_POST['$s_id'];
$sales_master_id=$_POST['smid'];
$product_id=$_POST['pid'];
$quantity=$_POST['qunt'];
$discount=$_POST['dis'];

$sql="update sales_details set sales_master_id='$smid',product_id='$pid',quantity='$qunt',discount='$dis' where sales_details_id='$s_id'"; 
mysql_query($sql);
?>
<script>
alert("Updated..");
document.location="sales_details_view.php";
</script>