<?php
include('database.php');
$p_id=$_POST['p_id'];
$product_name=$_POST['pn'];
$rate=$_POST['pr'];

$sql="update product set product_name='$product_name',rate='$rate' where product_id='$p_id'";
mysql_query($sql);
?>
<script>
alert("Updated..");document.location="product_view.php";
</script>
