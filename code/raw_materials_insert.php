<?php
include('database.php');
$raw_material_name=$_POST['rnm'];
$raw_material_description=$_POST['rde'];

$sql="insert into raw_materials values(null,'$Raw Material Name','$Raw Material Description')";
mysql_query($sql);
?>
<script>
alert("inserted..");
document.location="raw_materials_form.php";
</script>
