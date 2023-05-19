<?php
include('database.php');
$p_id=$_POST['p_id'];
$product_name=$_POST['pn'];
$product_rate=$_POST['pr'];
$product_size=$_POST['product_size'];
$product_stock=$_POST['product_stock'];





$sql="update products set product_name='$product_name',product_rate='$product_rate',product_size='$product_size',product_stock='$product_stock' where product_id='$p_id'";
mysqli_query($conn,$sql);
?>
<script>

alert("Updated..");
document.location="product_view.php";
</script>
           