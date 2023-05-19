<html>
<head>
<title>Login From Design</title>
     <link rel="stylesheet" type="text/css" href="style.css">
<body>
    <div class="loginbox">
	<img src="img3.png" class="img3">
	     <h1>Forgot Password</h1>
		 
		      <?php
 include('database.php');
 $uname=$_REQUEST["username"];
$sql="select * from login where binary(user_name)='$uname'";
$res=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($res))
{

$sql1="select * from customer_details where binary(email)='$uname'";
$res1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($res1);

  $otp=rand(1000,9999);

$mob=$row1['contact_number'];
 $msg="FORGOT PASSWORD OTP NO ".$otp;

$msg=urlencode($msg);
 $smsurl="http://trans.vwgsms.com/api/mt/SendSMS?user=smsdemo&password=emo1234&senderid=VENTUR&channel=Trans&DCS=0&flashsms=0&number=".$mob."&text=".$msg."%20message&route=6";
file_get_contents($smsurl);

//$msg1="FORGOT PASSWORD OTP NO ".$otp;
//$msg=str_replace(' ','+', $msg1);
// file_get_contents("http://trans.vwgsms.com/api/mt/SendSMS?user=smsdemo&password=emo1234&senderid=VENTUR&channel=Trans&DCS=0&flashsms=0&number=".$mob."&text=".$msg."&route=6");


?>

	
	<form class="form-3" action="getpwd.php" method="post">
									<div class="input-prepend" title="Hint Answer" data-rel="tooltip">
									Enter OTP NO
							<input name="type_otp" type="text" class="input-large span10" id="type_otp" size="50" autofocus  />
							
						      <input name="mob" type="hidden" id="hintans" value="<?php echo $mob; ?>">
							  <input name="otp" type="hidden" id="hintans" value="<?php echo $otp; ?>">
                              <input name="password" type="hidden" id="password" value="<?php echo $row['password']; ?>">
<p>							<button type="submit" class="btn btn-primary">Get Password</button>
	  </p>
						</fieldset>
</form>
</div>


</body>
</head>
</html>
			
<?php	
	
}
else
{
?>
<script type="text/javascript">
alert("Wrong Username");
//document.location="login.php";
</script>
<?php
}
?>
</body>
</html>

