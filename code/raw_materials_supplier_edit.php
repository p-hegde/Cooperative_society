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
                                    <h1>Raw Materials Supplier</h1>
                                </div>
                            </div>
                  
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="basic-login-inner">
                                                <h3></h3>


<?php
include('database.php');
$r_id=$_REQUEST['r_id'];

$sql="select * from raw_materials_supplier where raw_material_supplier_id='$r_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);

?>
<form name="formID" ID="formID" method="post" action="raw_materials_supplier_update.php">

<input type="hidden" value="<?php echo $row['raw_material_supplier_id']?>" name="r_id">
  <p>raw_material_supplier</p>
  <p>&nbsp;</p>
    <table width="333" border="0">
	    <tr>
      <td width="214">Raw Material Supplier Name</td>
      <td width="40"><input name="rn" type="text" id="rn" value="<?php echo $row['raw_material_supplier_name'];?>" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Raw Material Supplier City</td>
      <td><input name="rc" type="text" id="rc" value="<?php echo $row['raw_material_supplier_city'];?>"class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Raw Material Supplier Address</td>
      <td><input name="ra" type="text" id="ra" value="<?php echo $row['raw_material_supplier_address'];?>"class="form-control validate[required]"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit">        
          <input type="reset" name="Reset" value="Reset">
      </div></td>
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
