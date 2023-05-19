<?php

$order_id=$_REQUEST['id'];

include('database.php');

$sql="delete from customer_order_details where order_id='$order_id'";
mysqli_query($conn,$sql);

?>
<script language="javascript1.2">

alert("Deleted");
document.location="customer_order_details_view.php";
</script> 