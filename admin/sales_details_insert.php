<?php
include('database.php');
$sales_master_id=$_POST['smid'];
$jaggery_id=$_POST['pid'];
$quantity=$_POST['qunt'];
$discount=$_POST['dis'];

$sql="insert into sales_details values(null,'$sales_master_id','$jaggery_id','$quantity','$discount')";
mysqli_query($conn,$sql);
?>
<script>
alert("inserted");
document.location="sales_details_form.php";
</script>