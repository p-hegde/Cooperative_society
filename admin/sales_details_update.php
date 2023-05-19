<?php
include('database.php');
$s_id=$_POST['$s_id'];
$sales_master_id=$_POST['smid'];
$jaggery_id=$_POST['pid'];
$quantity=$_POST['qunt'];
$discount=$_POST['dis'];

$sql="update sales_details set sales_master_id='$smid',jaggery_id='$pid',quantity='$qunt',discount='$dis' where sales_details_id='$s_id'"; 
mysqli_query($conn,$sql);
?>
<script>
alert("Updated");
document.location="sales_details_view.php";
</script>