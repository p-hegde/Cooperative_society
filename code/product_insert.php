<?php
include('database.php');
$product_name=$_POST['pn'];
$rate=$_POST['pr'];

$sql="insert into product values(null,'$product_name','$rate')";
mysql_query($sql);
?>
<script>
alert("inserted..");
document.location="product_form.php";
</script>