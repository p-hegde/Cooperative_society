<?php
//$stock_id=$_REQUEST['stock_id'];
$order_id=$_REQUEST['id'];
 $jaggery_stock=$_REQUEST['jaggery_stock'];
 $jaggery_id=$_REQUEST['jaggery_id'];
 $qnt=$_REQUEST['qnt'];
 $contact_no=$_REQUEST['contact_no'];
$stock_p=$jaggery_stock - $qnt;
include('database.php');

if($qnt<=$jaggery_stock)
{
echo $sql="update customer_order_details set status='Confirmed' where order_id='$order_id'";
mysqli_query($conn,$sql);

 $sql="update  jaggery set jaggery_stock='$stock_p' where jaggery_id='$jaggery_id'";
mysqli_query($conn,$sql); 

$msg1="Your Order is Confirmed";
$msg=str_replace(' ','+', $msg1);
//file_get_contents("http://trans.vwgsms.com/api/mt/SendSMS?user=smsdemo&password=emo1234&senderid=VENTUR&channel=Trans&DCS=0&flashsms=0&number=".$contact_no."&text=".$msg."&route=6");


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