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
                                    <h1>Raw Material Supply details</h1>
                                </div>
                            </div>
                  
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="basic-login-inner">
                                                <h3></h3>

<?php
include('database.php');
$s_id=$_REQUEST['s_id'];

$sql="select * from raw_material_supply_details where supply_id='$s_id' ";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);


?>

<form name="formID" ID="formID" method="post" action="raw_material_supply_details_update.php">

<input type="hidden" value="<?php echo $row['supply_id']?>" name="s_id">
  <p>raw_materials_supply_details</p>
  <table width="375" height="198" border="0">
    <tr>
      <td width="238">Raw Material Supplier</td>
      <td width="121"><select name="rmid" id="rmid" class="validate[required]">
	  <option value="">Select</option>
	  <?php
include('database.php');
$sql1="select * from raw_materials_supplier";
$res1=mysql_query($sql1);
while($row1=mysql_fetch_array($res1))
{
?>
  <option value="<?php echo $row1['raw_material_supplier_id'];?>"><?php echo $row1['raw_material_supplier_name'];?></option>
<?php
}
?>      </select></td>
    </tr>
    <tr>
      <td>Raw Material Id</td>
      <td><select name="rid" id="rid" class="form-control validate[required]">
	    <option value="">Select</option>
	  <?php
include('database.php');
$sql1="select * from raw_materials";
$res1=mysql_query($sql1);
while($row1=mysql_fetch_array($res1))
{
?>
  <option value="<?php echo $row1['raw_material_id'];?>"><?php echo $row1['raw_material_id'];?></option>
<?php
}
?>
      </select></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="rq" type="text" id="rq" value="<?php echo $row['quantity'];?>" class="form-control validate[required,custom[onlyNumber]]"> </td>
    </tr>
    <tr>
      <td>Supply Date</td>
      <td><input name="sd" type="date" id="sd"value="<?php echo $row['supply_date'];?>" class="form-control validate[required,custom[date]]" ></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit">
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