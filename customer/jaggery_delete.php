<?php
$jaggery_Id=$_REQUEST['p_id'];
include('database.php');
$sql="delete from  jaggery where jaggery_id='$jaggery_Id'";
$res=mysqli_query($conn,$sql);
?>

<script>
alert("deleted..");
document.location="jaggery_view.php";
</script>
