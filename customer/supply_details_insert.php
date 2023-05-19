<?php
include('database.php');
$farmer_id=$_POST['rmid'];
$sugarcane_id=$_POST['rid'];
$quantity=$_POST['rq'];
$supply_date=$_POST['sd'];


$sql="insert into supply_details values(null,'$farmer_id','$sugarcane_id','$quantity','$supply_date')";
mysqli_query($conn,$sql);
?>
<script>
alert("inserted");
document.location="supply_details_view.php";
</script>