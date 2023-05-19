<?php
$supply_id=$_REQUEST['s_id'];
include('database.php');
$sql="delete from  supply_details where supply_id='$supply_id'";
$res=mysqli_query($conn,$sql);
?>

<script>
alert("deleted");
document.location="supply_details_view.php";
</script>
