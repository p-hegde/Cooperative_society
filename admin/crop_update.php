<?php
include('database.php');
$crop_id=$_POST['crop_id'];
$crop_name=$_POST['rnm'];
$crop_description=$_POST['rde'];

 $sql="update crops set crop_name='$crop_name',crop_description='$crop_description' where crop_id='$crop_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("Updated");
document.location="crop_view.php";
</script>

