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
<?php $customer_id=$_REQUEST['cid'];?>
<form name="formID" ID="formID" method="post" action="customer_payments_insert.php">
  <p>&nbsp;</p>
  <div align="center">
    <table width="456" height="277" border="0">
        <tr>
          <td width="162">Customer Name </td>
          <td width="146"><select name="cid" id="cid" class="form-control validate[required]" >
	     
	     <?php
include('database.php');
$sql1="select * from customer_details where customer_id='$customer_id'";
$res1=mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_array($res1))
{
?>
    <option value="<?php echo $row1['customer_id'];?>"><?php echo $row1['customer_name'];?></option>
    <?php
}
?>
	      </select></td>
        </tr>
		<?php
		$bill_amount=0;
		 $sql11="select * from sales_details sd,  sales_master sm, customer_details cd where sd.sales_master_id=sm.sales_master_id and sm.customer_id=cd.customer_id and cd.customer_id='$customer_id'";
$res11=mysqli_query($conn,$sql11);
while($row11=mysqli_fetch_array($res11))
{
$quantity=$row11['quantity'];
$rate=$row11['rate'];
$discount=$row11['discount'];


$bamt=($quantity*$rate)-$discount;
$bill_amount=$bill_amount+$bamt;

}
$gst=($bill_amount*18)/118;
		?>
        <tr>
          <td>Total Bill Amount </td>
          <td>&nbsp;<?php echo round($bill_amount+$gst); ?></td>
        </tr>
		
		
		<?php
		$paid=0;
		 $sql2="select * from customer_payments cp, customer_details cd where  cp.customer_id=cd.customer_id and cp.customer_id='$customer_id'";
$res2=mysqli_query($conn,$sql2);
while($row2=mysqli_fetch_array($res2))
{
$paid=$paid+$row2['payment_amount'];
}
 
$bal=$bill_amount-$paid;
		?>
        <tr>
          <td>Paid Amount </td>
          <td>&nbsp;<?php echo $paid; ?></td>
        </tr>
        <tr>
          <td>Balance</td>
          <td>&nbsp;<?php echo round($bal+$gst); ?></td>
        </tr>
        <tr>
          <td>Payment Amount</td>
          <td><input name="pa" type="text" id="pa" class="form-control validate[required,custom[onlyNumber]]"></td>
        </tr>
        <tr>
          <td>Description</td>
          <td><textarea name="cpd" id="cpd" class="form-control validate[required]"></textarea></td>
        </tr>
        <tr>
          <td>Payment Date</td>
          <td><input name="pd" type="date" id="pd" value="<?php echo date('Y-m-d'); ?>" class="form-control validate[required,custom[date]]"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-primary">
          <input type="reset" name="Reset" value="Reset" class="btn btn-danger"></td>
        </tr>
    </table>
  </div>
  <p>&nbsp;  </p>
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