<?php
include('database.php');
$Name=$_POST['cn'];
$Address=$_POST['ca'];
$City=$_POST['cc'];
$Number=$_POST['cnor'];
$Email=$_POST['em'];

$sql="insert into customer_details values(null,'$Name','$Address','$City','$Number','$Email')";
mysql_query($sql);
?>
<script>
alert("inserted..");
document.location="customer_details_form.php";
</script>

