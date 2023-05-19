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
                                    <h1>Customer Payments</h1>
                                </div>
                            </div>
                  
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="basic-login-inner">
                                                <h3></h3>


<?php
include('database.php');
$c_id=$_REQUEST['c_id'];

$sql="select * from customer_payments where customer_payment_id='$c_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);


?>
<form name="formID" ID="formID" method="post" action="customer_payments_update.php">

<input type="hidden" value="<?php echo $row['customer_payment_id']?>" name="cd">
  <p>customer_payments</p>
  <table width="324" height="182" border="0">
    <tr>
      <td width="162">Customer</td>
      <td width="146"><select name="cid" id="cid">
	 <option value="">Select</option>
	 <?php
include('database.php');
$sql1="select * from customer_details";
$res1=mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_array($res1))
{
?>
<option value="<?php echo $row1['customer_id'];?>" <?php if($row1['customer_id']==$row['customer_id']) { ?> selected <?php } ?>><?php echo $row1['customer_name'];?></option>
<?php
}
?>
 </select></td>
    </tr>
    <tr>
      <td>Payment Amount</td>
      <td><input name="pa" type="text" id="pa" value="<?php echo $row['payment_amount'];?>" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><input name="cpd" type="text" id="cpd" value="<?php echo $row['description'];?>" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Payment Date</td>
      <td><input name="pd" type="date" id="pd" value="<?php echo $row['payment_date'];?>" class="form-control validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-primary">
      <input type="reset" name="Reset" value="Reset" class="btn btn-danger"></td>
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
