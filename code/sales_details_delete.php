<?php
$sales_details_id=$_REQUEST['s_id'];
include('database.php');
$sql="delete from  sales_details where sales_details_id='$sales_details_id'";
$res=mysql_query($sql);
?>

<script>
alert("deleted..");
document.location="sales_details_view.php";
</script>
