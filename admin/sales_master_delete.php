<?php
$sales_master_id=$_REQUEST['s_id'];
include('database.php');
$sql="delete from sales_master where sales_master_id='$sales_master_id'";
$res=mysqli_query($conn,$sql);
?>

<script>
alert("deleted");
document.location="sales_master_view.php";
</script>
