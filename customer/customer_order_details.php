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
                                    <h1>Customer Order Details</h1>
                                </div>
                            </div>
                  
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="basic-login-inner">
                                                <h3></h3>

<form name="formID" ID="formID"method="post" action="customer_order_details_insert.php">
  <table width="492" height="352" border="0">
    <tr>
      <td colspan="2"><div align="center"><em><strong>Customer Order Details </strong></em></div></td>
    </tr>
    <tr>
      <td width="177">Customer Name </td>
      <td width="217"><select name="customer_id" id="customer_id" class="validate[required] form-control">
        
        <?php
		 include('database.php');
		 $uname=$_SESSION['uname'];
		  $sql="select * from customer_details where email='$uname'";
		  $res=mysqli_query($conn,$sql);
	      while($row=mysqli_fetch_array($res))
	      {
	  
	      ?>
        <option value="<?php echo $row['customer_id'];?>"><?php echo $row['customer_name'];?></option>
        <?php
		  
		  }
		  ?>
      </select></td>
    </tr>
    <tr>
      <td>Product Name / Type</td>
      <td><select name="product_id" id="product_id" class="validate[required] form-control">
        <option value>Select</option>
        <?php
	  include('database.php');
	  $jid=$_REQUEST['jid'];
	  $sql="select * from products ";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	  
	  ?>
        <option value="<?php echo $row['product_id'];?>" <?php if($row['product_id']==$jid) { ?> selected <?php } ?>><?php echo $row['product_name'];?> / Rs.<?php echo $row['product_rate'];?></option>
        <?php
	  }
	  ?>
      </select>
      </select></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="quantity" type="text" id="quantity" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Order Date </td>
      <td><input name="order_date" value=<?php  echo date('Y-m-d'); ?> type="text" readonly="" id="order_date" class="form-control validate[required,custom[date]]"></td>
    </tr>
    
    <tr>
      <td height="55" colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-primary">
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