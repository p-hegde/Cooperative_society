<?php

$a_id=$_POST['a_id'];
$customer_id=$_POST['customer_id'];
$product_id=$_POST['product_id'];
$quantity=$_POST['quantity'];
$order_date=$_POST['order_date'];
$status=$_POST['status'];

include('dbconnect.php');

$sql="update customer_order_details set customer_id='$customer_id',product_id='$product_id',quantity='$quantity',order_date='$order_date',status='$status' where order_id='$a_id' ";  
mysqli_query($conn,$sql);
?>
<script language="javascript1.2">

alert("Customer Order Details are Updated");
document.location="customer_order_details_view.php";
</script>