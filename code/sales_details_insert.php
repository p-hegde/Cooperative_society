<?php
include('database.php');
$sales_master_id=$_POST['smid'];
$product_id=$_POST['pid'];
$quantity=$_POST['qunt'];
$discount=$_POST['dis'];

$sql="insert into sales_details values(null,'$sales_master_id','$product_id','$quantity','$discount')";
mysql_query($sql);
?>
<script>
alert("inserted..");
document.location="sales_details_form.php";
</script>