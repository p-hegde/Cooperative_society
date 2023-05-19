<?php
include('database.php');
$supply_id=$_POST['s_id'];
$farmer_id=$_POST['rmid'];
$sugarcane_id=$_POST['rid'];
$quantity=$_POST['rq'];
$supply_date=$_POST['sd'];


$sql="update supply_details set farmer_id='$farmer_id',sugarcane_id='$sugarcane_id',quantity='$quantity',supply_date='$supply_date' where supply_id='$supply_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("Updated");
document.location="supply_details_view.php";
</script>

