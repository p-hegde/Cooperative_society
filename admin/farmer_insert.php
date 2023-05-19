<?php
include('database.php');
$farmer_name=$_POST['rn'];
$farmer_city=$_POST['rc'];
$farmer_address=$_POST['ra'];

$sql="insert into farmer values(null,'$farmer_name','$farmer_city','$farmer_address')";
mysqli_query($conn,$sql);
?>
<script>
alert("inserted");
document.location="farmer_view.php";
</script>