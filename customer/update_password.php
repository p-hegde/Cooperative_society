<?php

session_start();
?>
<?php
	
	
	 $a=$_POST['new_pwd'];
	$b=$_POST['conf_pwd'];
	
		include('database.php');
		$sql = "select * from login where user_name ='".$_SESSION['uname']."' and password='".$_POST['old_pwd']."'";
		$res=mysqli_query($conn,$sql);
	if($a==$b)
	{
		if(mysql_num_rows($res)>0)
		{
			$sql1 = "update login set password = '".$_POST['new_pwd']."' where user_name ='".$_SESSION['uname']."'";
			$res1 = mysqli_query($conn,$sql1);
			?>
				<script>
					alert('Successfully updated your password');
					document.location="home.php";
				</script>
			<?php
		} else
		{
			?>
				<script>
					alert('Failed to update your password');
					document.location="home.php";
				</script>
			<?php
		}
	}else
		{
			?>
				<script>
					alert('New Password and Retype Password do not match');
					document.location="home.php";
				</script>
			<?php
		}
		
?>
