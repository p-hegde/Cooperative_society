<?php
include('database.php');
$raw_material_supplier_name=$_POST['rn'];
$raw_material_supplier_city=$_POST['rc'];
$Raw Material Supplier Address=$_POST['ra'];

$sql="insert into raw_materials_supplier values(null,'$Raw Material Supplier Name','$Raw Material Supplier City','$Raw Material Supplier Address')";
mysql_query($sql);
?>
<script>
alert("inserted..");
document.location="raw_materials_supplier_form.php";
</script>