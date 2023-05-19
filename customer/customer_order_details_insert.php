<?php

$customer_id=$_POST['customer_id'];
$product_id=$_POST['product_id'];
$quantity=$_POST['quantity'];
$order_date=$_POST['order_date'];


include('database.php');

 $sql="insert into customer_order_details values(null,'$customer_id','$product_id','$quantity','$order_date','Pending')";
mysqli_query($conn,$sql);
?>
<script language="javascript1.2">

alert("Customer Order Details are Inserted");
document.location="customer_order_details_view.php";
</script>