<?php
include('database.php');
$productname=$_POST['pn'];
$product_rate=$_POST['pr'];
$product_size=$_POST['product_size'];
$product_stock=$_POST['product_stock'];
echo $sql="insert into products values(null,'$productname','$product_rate','$product_size','$product_stock')";
mysqli_query($conn,$sql);
?>
<script>
alert("inserted..");
document.location="product_view.php";
</script>