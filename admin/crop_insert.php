<?php
include('database.php');
$crop_name=$_POST['rnm'];
$crop_description=$_POST['rde'];

$sql="insert into crops values(null,'$crop_name','$crop_description')";
mysqli_query($conn,$sql);
?>
<script>
alert("inserted");
document.location="crop_view.php";
</script>
