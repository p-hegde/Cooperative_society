<?php
$supply_id=$_REQUEST['s_id'];
include('database.php');
$sql="delete from  raw_material_supply_details where supply_id='$Supply Id'";
$res=mysql_query($sql);
?>

<script>
alert("deleted..");
document.location="raw_material_supply_details_view.php";
</script>
