<!doctype html>
<html class="no-js" lang="en">

<head>
<?php include('meta_tag.php'); ?>

  <?php include('sidebar.php'); ?>
</head>

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
                                    <h1>Sales Details</h1>
                                </div>
                            </div>
                  
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="basic-login-inner">
                                                <h3></h3>


<?php
include('database.php');
$s_id=$_REQUEST['s_id'];

$sql="select * from sales_details where sales_details_id='$s_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);


?>
<form name="formID" ID="formID" method="post" action="sales_details_update.php">

<input type="hidden" value="<?php echo $row['sales_details_id']?>" name="$s_id">
  <p>sales details</p>
  <table width="246" border="0">

    <tr>
      <td width="147">Sales Master Id</td>
      <td width="83">      <select name="smid" id="smid" class="validate[required]">
	  <option selected>Select</option>
	 <?php
include('database.php');
$sql1="select * from  sales_master";
$res1=mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_array($res1))
{
?>
<option value="<?php echo $row1['sales_master_id'];?>"><?php echo $row1['sales_master_id'];?></option>
<?php
}
?>
      </select></td>
    </tr>
    <tr>
      <td>jaggery Id</td>
      <td><select name="pid" id="pid" class="validate[required]">
     <option value="">Select</option>
	 <?php
include('database.php');
$sql1="select * from  jaggery";
$res1=mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_array($res1))
{
?>
<option value="<?php echo $row1['jaggery_id'];?>"><?php echo $row1['jaggery_id'];?></option>
<?php
}
?>
	  </select></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="qunt" type="text" id="qunt" value="<?php echo $row['quantity'];?>" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Discount</td>
      <td><input name="dis" type="text" id="dis" value="<?php echo $row['discount'];?>" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td height="41" colspan="2"><input type="submit" name="Submit" value="Submit">        
	  <input type="reset" name="Reset" value="Reset"></td>
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
