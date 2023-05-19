<?php
include('database.php');
$customer_id=$_POST['cid'];
$date=$_POST['sd'];

$sql="insert into sales_master values(null,'$customer_id','$date')";
mysql_query($sql);
?>
<script>
alert("inserted..");
document.location="sales_master_form.php";
</script>