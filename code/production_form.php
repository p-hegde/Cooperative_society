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
                                    <h1>Production</h1>
                                </div>
                            </div>
                  
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="basic-login-inner">
                                                <h3></h3>


<form name="formID" id="formID" method="post" action="production_insert.php">
  <p>production</p>
  <p>&nbsp;</p>
  <table width="200" border="0">
    <tr>
      <td>Product Id</td>
      <td><select name="pid" id="pid" class="form-control validate[required]" > 
	  <option selected>Select</option>
	 <?php
include('database.php');
$sql1="select * from  product";
$res1=mysql_query($sql1);
while($row1=mysql_fetch_array($res1))
{
?>
<option value="<?php echo $row1['product_id'];?>"><?php echo $row1['product_id'];?></option>
<?php
}
?>
	  
      </select></td>
    </tr>
    <tr>
      <td>Raw Material Id</td>
      <td>        <select name="rid" id="rid" class="form-control validate[required]" >
	  <option selected>Select</option>
	 <?php
include('database.php');
$sql1="select * from  raw_materials";
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
      <td><input name="qty" type="text" id="qty" class="form-control validate[required,custom[onlyNumber]]" ></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><input name="pd" type="text" id="pd"class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Production Date</td>
      <td><input name="pda" type="date" id="pda" class="form-control validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td>Total Production</td>
      <td><input name="tp" type="text" id="tp" class="form-control validate[required,custom[onlyNumber]]" ></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-primary">
          <input type="reset" name="Reset" value="Reset" class="btn btn-danger"></td>
    </tr>
  </table>
   <p>&nbsp;</p>
   
</form>
</body>
</html>
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