<?php
include('database.php');
$s_id=$_POST['s_id'];
$customer_id=$_POST['cid'];
$date=$_POST['sd'];

$sql="update sales_master set customer_id='$customer_id',date='$date' where sales_master_id='$s_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("updated");
document.location="sales_master_view.php";
</script>