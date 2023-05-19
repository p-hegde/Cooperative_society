<?php
include('database.php');
$jaggery_name=$_POST['pn'];
$rate=$_POST['pr'];
$jaggery_size=$_POST['jaggery_size'];
$sql="insert into jaggery values(null,'$jaggery_name','$rate','$jaggery_size')";
mysqli_query($conn,$sql);
?>
<script>
alert("inserted..");
document.location="jaggery_form.php";
</script>