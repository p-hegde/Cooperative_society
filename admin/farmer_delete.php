<?php
$farmer_id=$_REQUEST['r_id'];
include('database.php');
$sql="delete from  farmer where farmer_id='$farmer_id'";
$res=mysqli_query($conn,$sql);
?>

<script>
alert("deleted");
document.location="farmer_view.php";
</script>
