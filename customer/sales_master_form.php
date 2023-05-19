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
                                    <h1>Sales Master</h1>
                                </div>
                            </div>
                  
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="basic-login-inner">
                                                <h3></h3>



<script type="text/javascript">
<!-- Begin
function startCalc(){
  interval = setInterval("calc()",1);
}
function calc(){
tot=(parseInt(document.formID.rate.value) * parseInt(document.formID.qnt.value));
dic=(parseInt(document.formID.dic.value));
t=(tot-dic);
document.formID.total.value=t;

}
function stopCalc(){
  clearInterval(interval);
}
//  End -->
</script>

  <?php
	 include('database.php');

$bmid=$_REQUEST["bmid"];
$c_id=$_REQUEST["c_id"];


$bmi=0;
$bm_id=0;
if($bmid=='')
{
$sql="select max(sales_master_id) from  sales_master";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);

 $bmi=$row[0];
$bmi=$bmi+1;
}
else
{
 //bm_id=Integer.parseInt(bmid);

  $bmi=$bmid+0;
}

$dat=date('Y-m-d');
?>

<form name="formID" ID="formID" method="post" action="sales_master_insert.php">
 <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
    <tr>
      <th width="47%" colspan="2">Bill No 
			
        <input name="bmid" type="text" id="bmid" value="<?php echo $bmi; ?>" size="5" readonly=""></th>
      <th width="53%" colspan="4"><div align="right">Date 
            <input name="date" type="text" value="<?php echo $dat; ?>">
      </div></th>
    </tr>
    <tr>
      <td colspan="2">Select Customer
        <select name="c_id" id="c_id" class="validate[required] form-control" >
          <option value="">Select Customer</option>
		  <?php
		  $sql1="select * from customer_details";
		 $res1=mysqli_query($conn,$sql1);
			while($row1=mysqli_fetch_array($res1))
		
		{
		$cid=$row1["customer_id"];
		?>
		<option value="<?php echo $cid; ?>" <?php if($cid==$c_id) { ?> selected <?php } ?>><?php echo $row1["customer_name"]; ?></option>
		<?php
		}
		  ?>
        </select> </td>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <th>Select Product </th>
      <th>Rate</th>
      <th>Quantity</th>
      <th>Discount</th>
      <th>Total</th>
      <th>&nbsp;</th>
    </tr>
    <tr>
      <td><select name="prodcut_id" id="product_id"  class="validate[required]">
        <option value="">Select Procuct</option>
		<?php
		  $sql2="select * from  product";
		$res2=mysqli_query($conn,$sql2);
			while($row2=mysqli_fetch_array($res2))
		{
		?>
		<option value="<?php echo $row2["product_id"]; ?>"><?php echo $row2["product_name"]; ?></option>
		<?php
		}
		  ?>
      </select></td>
      <td><input name="rate" type="text" id="rate"  class="validate[required,custom[onlyNumber]] " size="15" onFocus="startCalc();" onBlur="stopCalc();"></td>
      <td><input name="qnt" type="text" id="qnt"  class="validate[required,custom[onlyNumber]]" size="10" onFocus="startCalc();" onBlur="stopCalc();"></td>
      <td><input name="dic" type="text" id="dic"  class="validate[required,custom[onlyNumber]]"  onFocus="startCalc();" onBlur="stopCalc();" value="0" size="10"></td>
      <td><input name="total" type="text" id="total" size="15" readonly="">
        <input type="submit" name="Submit" value=" Add Product "></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;  </p>
  <table class="table table-striped">
    <tr>
      <th>Sl NO</th>
      <th>Product Name </th>
      <th>Rate</th>
      <th>Qnt</th>
      <th>Total</th>
    </tr>
	<?php
	$slno=0;
	$tot=0;
	$vat=0;
	$discount=0;
	$total=0;
	$gtotal=0;
	
		$sql3="select * from sales_details bd,product p where bd.product_id=p.product_id and bd.sales_master_id='$bmid' ";
		$res3=mysqli_query($conn,$sql3);
			while($row3=mysqli_fetch_array($res3))
		{
		$slno=$slno+1;
		$bill_id=$row3["sales_details_id"];
		$pid=$row3["product_id"];
		
		 $qnt=$row3["quantity"];
		 $rate=$row3["rate"];
		 $dic=$row3["discount"];
		 $pname=$row3["pro_name"];
		 
		$tot=($rate*$qnt);
		 $discount=$discount+$dic;
		 $total=$total+$tot;
		 $vat=($total*18)/118;
		 $gtotal=($total+$vat)-$discount;
		 ?>
    <tr>
    <td>&nbsp;<?php echo $slno; ?></td>
      <td>&nbsp;<?php echo $pname; ?></td>
      <td>&nbsp;<?php echo $rate; ?></td>
      <td>&nbsp;<?php echo $qnt; ?></td>
      <td>&nbsp;<?php echo $tot; ?></td>
    </tr>
    
	<?php
	}
	?>
	<tr>
	  <th colspan="4"><div align="right"><b>Total</b></div></th>
	  <th>&nbsp;<b><?php echo $total; ?><b></th>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <td colspan="4"><div align="right"><b>Discount</b></div></td>
	  <td>&nbsp;<b><?php echo $discount; ?></b></td>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
      <td colspan="4"><div align="right"><b>GST</b></div></td>
      <td>&nbsp;<b><?php echo round($vat); ?></b></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th colspan="4"><div align="right"><b>Total Purchase Amount </b></div></th>
      <th>&nbsp;<b><?php echo round($gtotal); ?><b></th>
      <td>&nbsp;</td>
    </tr>
  </table>
  
  <input type="button" value="Print" onClick="PrintDiv();">
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