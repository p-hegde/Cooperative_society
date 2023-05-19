<?php
include('database.php');
$Product_ID=$_POST['Product_ID'];
$p_name=$_POST['Product_Name'];
$p_rate=$_POST['Product_Rate'];
$p_size=$_POST['Product_Size'];
$p_stock=$_POST['Product_Stock'];

$Product_Image=$_FILES['Product_Image']['name'];
$tmp_location=$_FILES['Product_Image']['tmp_name'];
$target="../images/".$Product_Image;
move_uploaded_file($tmp_location,$target);

$sql="update products set Product_Name='$p_name',Product_Rate='$p_rate',Product_Size='$p_size',Product_Stock='$p_stock',Product_Image='$Product_Image' where Product_ID='$Product_ID'";
mysqli_query($conn,$sql);

?>
<script>
alert("products updated!");
document.location="products_view.php";
</script>