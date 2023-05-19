<?php
include('database.php');
$p_id=$_POST['p_id'];
$jaggery_name=$_POST['pn'];
$rate=$_POST['pr'];
$jaggery_size=$_POST['jaggery_size'];

$sql="update jaggery set jaggery_name='$jaggery_name',rate='$rate',jaggery_size='$jaggery_size' where jaggery_id='$p_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("Updated..");document.location="jaggery_view.php";
</script>
