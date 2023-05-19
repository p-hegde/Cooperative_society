<?php
$Product Id=$_REQUEST['p_id'];
include('database.php');
$sql="delete from  product where product_id='$product_id'";
$res=mysql_query($sql);
?>

<script>
alert("deleted..");
document.location="product_view.php";
</script>
