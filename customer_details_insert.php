<?php
include('admin/database.php');
$Name=$_POST['cn'];
$Address=$_POST['ca'];
$City=$_POST['cc'];
$Number=$_POST['cnor'];
$Email=$_POST['em'];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
$hint_qtn=$_POST["hint_qtn"];
$hint_ans=$_POST["hint_ans"];

if($password==$cpassword)
{
$sql2="select * from customer_details where email='$Email' ";
$res=mysqli_query($conn,$sql2);
if($row=mysqli_fetch_array($res))
{

echo " <script>
alert('This Email-id already Exists');
document.location='login.php';
</script>";

}
else
{

$sql="insert into customer_details values(null,'$Name','$Address','$City','$Number','$Email')";
mysqli_query($conn,$sql);
$sql="insert into login values('$Email','$password','customer','$hint_ans','$hint_ans','active')";
mysqli_query($conn,$sql);




}

?>
<script type="text/javascript">
alert("Customer Registered Successfully");
document.location="home/index.php";
</script>
<?php
}
else
{
?>
<script type="text/javascript">
alert("Confirm Password Did not Match");
history.back();
</script>

<?php
}
?>
