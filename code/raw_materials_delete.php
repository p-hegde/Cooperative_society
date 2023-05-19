<?php
$raw_material_id=$_REQUEST['r_id'];
include('database.php');
$sql="delete from  raw_materials where raw_material_id='$Raw Material Id'";
$res=mysql_query($sql);
?>

<script>
alert("deleted..");
document.location="raw_materials_view.php";
</script>
