<?php 
session_start();
unset($_SESSION["uname"]);
session_destroy();

?>

<script>
alert("Logout");
document.location="home/index.php";
</script>