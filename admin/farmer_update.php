<?php
include('database.php');
$r_id=$_POST['r_id'];
$farmer_name=$_POST['rn'];
$farmer_city=$_POST['rc'];
$farmer_address=$_POST['ra'];

$sql="update farmer set farmer_name='$farmer_name',farmer_city='$farmer_city',farmer_address='$farmer_address' where farmer_id='$r_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("updated");
document.location="farmer_view.php";
</script>