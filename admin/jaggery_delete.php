<?php
$product_id=$_REQUEST['p_id'];
include('database.php');
$sql="delete from  products where product_id='$product_id'";
$res=mysqli_query($conn,$sql);
?>

<script>
alert("deleted..");
document.location="product_view.php";
</script>
