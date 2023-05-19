<?php
$order_id=$_REQUEST['id'];
 $product_stock=$_REQUEST['product_stock'];
 $product_id=$_REQUEST['product_id'];
 $qnt=$_REQUEST['qnt'];
 $contact_no=$_REQUEST['contact_no'];
$stock_p=$product_stock - $qnt;
include('database.php');

if($qnt<=$product_stock)
{
 $sql="update customer_order_details set status='Confirmed' where order_id='$order_id'";
mysqli_query($conn,$sql);

 $sql="update  products set product_stock='$stock_p' where product_id='$product_id'";
mysqli_query($conn,$sql); 

$msg1="Your Order is Confirmed";
$msg=str_replace(' ','+', $msg1);



?>
<script language="javascript1.2">

alert("Order Confirmed");
document.location="customer_order_details_view.php";
</script> 
<?php
}
else
{
?>
<script language="javascript1.2">

alert("Out of Stock");
document.location="customer_order_details_view.php";
</script> 

<?php
}
?>