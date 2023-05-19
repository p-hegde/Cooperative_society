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
                                            <li><span class="bread-blod">Products</span>
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
                                    <h1>Products</h1>
                                </div>
                            </div>
                  
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="basic-login-inner">
                                                <h3></h3>
<?php
include('database.php');
$product_id=$_REQUEST['product_id'];
$sql="select * from products where $product_id=product_id ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form action="products_update.php" id="formID" method="post" enctype="multipart/form-data" name="form1">
<input type="hidden" value="<?php echo $row['product_id'];?>" name="Product_ID">
  <table width="491" border="0" align="center">
    <tr>
      <td height="41" colspan="2"><div align="center"><strong>Products</strong></div></td>
    </tr>
    <tr>
      <td width="132" height="39">Product Name </td>
      <td width="349"><input name="Product_Name" type="text" id="Product_Name" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['product_name'];?>"></td>
    </tr>
    <tr>
      <td height="43">Product Rate </td>
      <td><input name="Product_Rate" type="text" id="Product_Rate" class="form-control validate[required,custom[onlyNumber]]" value="<?php echo $row['product_rate'];?>"></td>
    </tr>
    <tr>
      <td height="37">Product Size </td>
      <td><input name="Product_Size" type="text" id="Product_Size" class="form-control validate[required]" value="<?php echo $row['product_size'];?>"></td>
    </tr>
    <tr>
      <td height="50">Product Stock </td>
      <td>      <input name="Product_Stock" type="text" id="Product_Stock" class="form-control validate[required]" value="<?php echo $row['product_stock'];?>"></td>
    </tr>
    <tr>
      <td height="45">
        <div align="left">Product Image </div></td>
      <td><input name="Product_Image" type="file" value="<?php echo $row['product_image'];?>" class="form-control validate[required]" id="Product_Image"></td>
    </tr>
    <tr>
      <td height="45" colspan="2"><div align="center">
<input type="submit" name="Submit" value="Submit">        
<input name="Reset" type="reset" id="Reset" value="Reset">
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