<?php
include('database.php');
$product_id=$_REQUEST['product_id'];
$sql="delete from products where product_id=$product_id";
mysqli_query($conn,$sql);
?>
<script>
alert("product deleted");
document.location="products_view.php";
</script>
