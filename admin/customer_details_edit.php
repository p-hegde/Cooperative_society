
<!doctype html>
<html class="no-js" lang="en">

<head>
<?php include('meta_tag.php'); ?>

  <?php include('sidebar.php'); ?>
<style type="text/css">
<!--
.style1 {
	font-family: sans-serif;
	font-size: 13.12px;
	color: rgb(0, 0, 0);
	background-color: rgb(204, 255, 204);
}
-->
</style></head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Basic Element</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Form Start -->
        <div class="basic-form-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div class="sparkline8-list mt-b-30">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>customer_details</h1>
                                </div>
                            </div>
                  
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="basic-login-inner">
                                                <h3></h3>

<?php
include('database.php');
$c_id=$_REQUEST['c_id'];
$sql="select * from customer_details where customer_id='$c_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);


?>





<form name="formID" ID="formID" method="post" action="customer_details_update.php">

<input type="hidden" value="<?php echo $row['customer_id']?>" name="customer_id">
  <p>customer_details</p>
  <table width="476" height="334" border="0">
    <tr>
      <td width="197">Name </td>
      <td width="139"><input name="cn" type="text" id="cn" value="<?php echo $row['customer_name'];?>" class="form-control validate[required,custom[onlyLetter]]" >      </td>
    </tr>
    <tr>
      <td>Address </td>
      <td><input name="ca" type="text" id="ca" value="<?php echo $row['customer_address'];?>" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>City </td>
      <td><input name="cc" type="text" id="cc" value="<?php echo $row['customer_city'];?>" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td><p>Contact Number</p>
      </td>
      <td><input name="cnor" type="text" id="cnor" value="<?php echo $row['contact_number'];?>" class="form-control validate[required,custom[mobile]]"></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input name="em" type="text" id="em" value="<?php echo $row['email'];?>" class="form-control validate[required,custom[email]]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-primary">
      <input type="reset" name="Reset" value="Reset" class="btn btn-danger></td>
    </tr>
  </table>

</form>
</div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


               
        <!-- Basic Form End-->
        <?php include('footer.php'); ?>
		<?php include('val.php');?>