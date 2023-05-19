<?php
include('database.php');
$customer_id=$_POST['cid'];
$payment_amount=$_POST['pa'];
$description=$_POST['cpd'];
$payment_date=$_POST['pd'];

$sql="insert into customer_payments values(null,'$Customer','$Payment Amount','$Description','$Payment_Date')";
mysql_query($sql);
?>
<script>
alert("inserted..");
document.location="customer_payments_form.php";
</script>