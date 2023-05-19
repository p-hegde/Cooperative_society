<?php include('database.php');
$p_name=$_POST['Product_Name'];
$p_rate=$_POST['Product_Rate'];
$p_size=$_POST['Product_Size'];
$p_stock=$_POST['Product_Stock'];

$Product_Image=$_FILES['Product_Image']['name'];
$tmp_location=$_FILES['Product_Image']['tmp_name'];
$target="../images/".$Product_Image;
move_uploaded_file($tmp_location,$target);

$sql="insert into products values(null,'$p_name','$p_rate','$p_size','$p_stock','$Product_Image')";
mysqli_query($conn,$sql);
//echo("inserted...");
?>
<script>
alert("products added!");
document.location="products_view.php";
</script>