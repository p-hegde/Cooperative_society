<?php
$cropl_id=$_REQUEST['r_id'];
include('database.php');
echo $sql="delete from  crops where crop_id='$cropl_id'";
$res=mysqli_query($conn,$sql);
?>

<script>
alert("deleted");
document.location="crop_view.php";
</script>
