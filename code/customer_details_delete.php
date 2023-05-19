<?php
$Customer=$_REQUEST['c_id'];
include('database.php');
$sql="delete from  customer_details where customer_id='$customer_id'";
$res=mysql_query($sql);
?>

<script>
alert("deleted..");
document.location="customer_details_view.php";
</script>
