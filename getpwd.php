<?php
$type_otp=$_POST["type_otp"];
$otp=$_POST["otp"];
$pwd=$_POST["password"];
$mob=$_POST["mob"];
if($type_otp==$otp)
{
$msg="YOUR PASSWORD IS ".$pwd;

$msg=urlencode($msg);

$smsurl="http://trans.vwgsms.com/api/mt/SendSMS?user=smsdemo&password=emo1234&senderid=VENTUR&channel=Trans&DCS=0&flashsms=0&number=".$mob."&text=".$msg."%20message&route=6";
file_get_contents($smsurl);
?>
<script type="text/javascript">
alert("Your Password is <?php echo $pwd; ?>");
document.location="login.html";
</script>
<?php
}
else
{
?>
<script type="text/javascript">
alert("Wrong OTP NO");
history.back();
</script>
<?php

}
?>
</body>
</html>