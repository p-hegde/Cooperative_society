<?php

$order_id=$_REQUEST['id'];

include('database.php');

$sql="update customer_order_details set status='No Stock' where order_id='$order_id'";
mysqli_query($conn,$sql);

?>
<script language="javascript1.2">

alert("No Stock Updated");
document.location="customer_order_details_view.php";
</script> 