<?php session_start();?>
<?php
$username=$_POST['username'];
$password=$_POST['password'];

include('database.php');
 $sql="select * from login where user_name='$username' and password='$password'";
$res=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($res))
{
$_SESSION['uname']=$username;
$type=$row['type'];


if($type=="admin")
{
header('location:admin/home.php');
}
else if($type=="user")
{
header('location:user/home.php');
}

else if($type=="customer")
{
header('location:customer/home.php');
}


}
else
{
?>
<script>
alert("Invalid Username Or Password");
history.back();
</script>
<?php
}

?>

